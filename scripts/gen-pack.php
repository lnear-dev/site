#!/usr/bin/php
<?php
require_once __DIR__ . "/bootstrap.php";
function createDirWithStubContents($name)
{
  // $destDir = __DIR__ . "/../packages/$name";
  $destDir = kPackagesDir . "/$name";
  if (!file_exists($destDir)) {
    mkdir($destDir, 0777, true);
  }

  $PUBLIC_NAME = "lnear-$name";
  $TITLE_NAME  = "Lnear " . ucfirst($name);

  //dont overwrite existing files
  if (file_exists($destDir . "/package.json")) {
    echo "Package already exists\n";
    return;
  }

  $files    = scandir(kStubDir);
  $iterator = new RecursiveDirectoryIterator(kStubDir);
  $items    = new RecursiveIteratorIterator($iterator, RecursiveIteratorIterator::SELF_FIRST);
  foreach ($items as $item) {
    if ($item->isDir()) {
      $dir = $destDir . DIRECTORY_SEPARATOR . $items->getSubPathName();
      if (!file_exists($dir)) {
        mkdir($dir);
      }
    } else {
      $file = $destDir . DIRECTORY_SEPARATOR . $items->getSubPathName();
      copy($item, $file);
    }
  }
  // Replace placeholders
  $files   = scandir($destDir);
  $search  = ["{{PUBLIC_NAME}}", "{{NAME}}", "{{TITLE_NAME}}"];
  $replace = [$PUBLIC_NAME, $name, $TITLE_NAME];
  foreach ($files as $file) {
    $path = $destDir . DIRECTORY_SEPARATOR . $file;
    if (is_file($path)) {
      $content = file_get_contents($path);
      $content = str_replace($search, $replace, $content);
      file_put_contents($path, $content);
    }
  }

}

// throw new Exception("Please provide a package name");
$args = array_slice($argv, 1);
if (count($args) === 0)
  $args = ["test"];
$name = $args[0];
createDirWithStubContents($name);

// call ./update-terminals.php
exec("php " . __DIR__ . "/update-terminals.php");
chdir(kPackagesDir . "/$name");
exec("pnpm install", $output, $return_var);
