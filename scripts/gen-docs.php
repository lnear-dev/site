<?php
require_once __DIR__ . "/bootstrap.php";

$Parsedown   = new Parsedown();
$packagesRaw = array_filter(
    array_map(
        fn($package) => [
            "name"     => $package,
            "filename" => kPackagesDir . "/$package/README.md",
        ],
        kSortedPackageNames,
    ),
    fn($package) => file_exists($package["filename"]),
);

$packages = array_map(
    fn($package) => [
        "name"     => $package["name"],
        "filename" => $package["filename"],
        "readme"   => $Parsedown->text(file_get_contents($package["filename"])),
    ],
    $packagesRaw,
);
//
foreach ($packages as $package) {
    file_put_contents(
        kDocsDir . "/$package[name].html",
        $package["readme"],
    );
}