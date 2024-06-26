<?php
const kBaseDir     = __DIR__ . "/..";
const kPackagesDir = kBaseDir . "/packages";
const kAppsDir     = kBaseDir . "/apps";
const kDocsDir     = kAppsDir . "/docs.lnear.dev/src/pages";
const kStubDir     = __DIR__ . "/.stub";
define(
    "kPackagesList",
    array_filter(
        scandir(kPackagesDir),
        fn($package) => !in_array($package, [".", "..", ".DS_Store"])
    ),
);
define(
    "kAppsList",
    array_filter(
        scandir(kAppsDir),
        fn($app) => !in_array($app, [".", "..", ".DS_Store"])
    ),
);
define(
    "kRootPackageJson",
    json_decode(file_get_contents(kBaseDir . "/package.json")),
);

function getPackageJson($package)
{
    return json_decode(
        file_get_contents(kPackagesDir . "/{$package}/package.json"),
    );
}

function getPackageDependencies($package)
{
    $package_json = getPackageJson($package);
    return isset($package_json->dependencies)
        ? array_filter(
            get_object_vars($package_json->dependencies),
            fn($dep) => strpos($dep, "@lnear/") === 0,
            ARRAY_FILTER_USE_KEY,
        )
        : [];
}
function sortPackagesByDependencies($packages)
{
    // return an array of package names sorted from least dependent to most dependent
    $sorter = new class ($packages) {
        private $packages;
        private $sorted = [];
        private $visited = [];
        public function __construct($packages)
        {
            $this->packages = $packages;
        }
        public function sort()
        {
            foreach ($this->packages as $package => $dependencies) {
                $this->visit($package, $dependencies);
            }
            return $this->sorted;
        }
        private function visit($package, $dependencies)
        {
            if (isset($this->visited[$package])) {
                return;
            }
            $this->visited[$package] = true;
            foreach ($dependencies as $dependency => $version) {
                $this->visit($dependency, $this->packages[$dependency]);
            }
            $this->sorted[] = $package;
        }
    };
    return $sorter->sort();
}
define(
    "kInterPackageDependencies",
    (function () {
        $dependencies = [];
        foreach (kPackagesList as $package) {
            $dependencies["@lnear/{$package}"] = getPackageDependencies(
                $package,
            );
        }
        return $dependencies;
    })(),
);
define(
    "kSortedPackages",
    sortPackagesByDependencies(kInterPackageDependencies),
);
define(
    "kSortedPackageNames",
    array_map(
        fn($package) => str_replace("@lnear/", "", $package),
        kSortedPackages,
    ),
);

//simple autoloader for Class.php directly in vendor
spl_autoload_register(function ($class) {
    $file = __DIR__ . "/vendor/" . str_replace("\\", "/", $class) . ".php";
    if (file_exists($file)) {
        require_once $file;
    }
});

