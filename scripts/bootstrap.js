import * as fs from 'fs';
import * as path from 'path';
import { fileURLToPath } from 'url';
export const __filename = fileURLToPath(import.meta.url);
export const __dirname = path.dirname(__filename);
export const kBaseDir = path.join(__dirname, '..');
export const kPackagesDir = path.join(kBaseDir, 'packages');
export const kAppsDir = path.join(kBaseDir, 'apps');
export const kDocsAppDir = path.join(kBaseDir, 'docs');
export const kDocsDir = path.join(kDocsAppDir, 'resources', 'views', 'docs');
export const kStubDir = path.join(__dirname, '.stub');
// export class Dirs {
//   static base(filename: string): string {
//     return path.join(kBaseDir, filename);
//   }
// }
export const Dirs = {
  base: (filename) => path.join(kBaseDir, filename),
  packages: (filename) => path.join(kPackagesDir, filename),
  apps: (filename) => path.join(kAppsDir, filename),
  docs: (filename) => path.join(kDocsDir, filename),
  docsApp: (filename) => path.join(kDocsAppDir, filename),
  stub: (filename) => path.join(kStubDir, filename),
};
export const kPackagesList = fs
  .readdirSync(kPackagesDir)
  .filter((pack) => !['.', '..', '.DS_Store'].includes(pack));
export const kAppsList = fs
  .readdirSync(kAppsDir)
  .filter((app) => !['.', '..', '.DS_Store'].includes(app));
export const kRootPackageJson = JSON.parse(
  fs.readFileSync(path.join(kBaseDir, 'package.json'), 'utf8')
);
function getPackageJson(packageName) {
  return JSON.parse(
    fs.readFileSync(
      path.join(kPackagesDir, packageName, 'package.json'),
      'utf8'
    )
  );
}
function getPackageDependencies(packageName) {
  const packageJson = getPackageJson(packageName);
  return packageJson.dependencies
    ? Object.keys(packageJson.dependencies).filter((dep) =>
        dep.startsWith('@lnear/')
      )
    : [];
}
function sortPackagesByDependencies(packages) {
  const sorted = [];
  const visited = {};
  function visit(packageName, dependencies) {
    if (visited[packageName]) return;
    visited[packageName] = true;
    dependencies.forEach((dep) => visit(dep, packages[dep] || []));
    sorted.push(packageName);
  }
  for (const packageName in packages) {
    visit(packageName, packages[packageName]);
  }
  return sorted;
}
export const kInterPackageDependencies = (() => {
  const dependencies = {};
  kPackagesList.forEach((packageName) => {
    dependencies[`@lnear/${packageName}`] = getPackageDependencies(packageName);
  });
  return dependencies;
})();
export const kSortedPackages = sortPackagesByDependencies(
  kInterPackageDependencies
);
export const kSortedPackageNames = kSortedPackages.map((packageName) =>
  packageName.replace('@lnear/', '')
);
export { getPackageJson, getPackageDependencies };

