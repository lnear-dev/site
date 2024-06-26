<?php
require_once __DIR__ . "/bootstrap.php";
$root_package = json_decode(file_get_contents(kBaseDir . "/package.json"));
// var_dump($root_package);
$root_package_version = $root_package->version;
//first load all package.json files
$packages = [];
foreach (kPackagesList as $package) {
    if ($package === "." || $package === "..") {
        continue;
    }
    $package_json       = json_decode(
        file_get_contents(kPackagesDir . "/{$package}/package.json"),
    );
    $packages[$package] = $package_json;
}
// var_dump($packages);

//bump the version of each package
foreach ($packages as $package => $package_json) {
    $package_json->private = false;
    file_put_contents(
        kPackagesDir . "/{$package}/package.json",
        json_encode($package_json, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES),
    );
}

$current_dir = getcwd();
chdir(kBaseDir);
passthru("pnpm install");
//only commit if there are changes
if (passthru("git status --porcelain") !== 0) {
    passthru(
        implode(" && ", [
            "git add .",
            "git commit -m 'publish packages" .
            date("Y-m-d H:i:s") .
            "v{$root_package_version}" .
            "'",
            "git push",
        ]),
    );
}
//publish each package
foreach (kSortedPackageNames as $package) {
    chdir(kPackagesDir . "/{$package}");
    echo "building {$package}...\n";
    passthru("pnpm run build");
    echo "publishing {$package}...\n";
    passthru("pnpm publish --access public");
    echo "done\n";
}
chdir($current_dir);
echo "done\n";
