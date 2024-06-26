<?php

require_once __DIR__ . "/bootstrap.php";

class Terminal
{

    public string $cwd = '${workspaceFolder}';
    public string $icon = "checklist";
    public string $command = "pnpm run build --watch";
    public function __construct(
        public string $name,
        string $cwd_root = "packages",
        string $command = "pnpm run build --watch",
    ) {
        $this->cwd     = '${workspaceFolder}/' . "{$cwd_root}/{$name}";
        $this->command = $command;
    }
}
class TerminalTask implements JsonSerializable
{
    public string $label;
    public string $type = "shell";
    public string $command;
    public array $options = [
    ];
    public bool $isBackground = false;
    public array $problemMatcher = [];
    public array $presentation = [
        "group" => "lnear-group",
    ];
    public function __construct(
        Terminal $terminal,
        bool $isBackground = false,
        array $options = [],
    ) {
        $this->label        = $terminal->name;
        $this->command      = $terminal->command;
        $this->options      = array_merge([
            "cwd" => $terminal->cwd,
        ], $options);
        $this->isBackground = $isBackground;

    }
    public function jsonSerialize(): mixed
    {
        return get_object_vars($this);
    }
}

class Terminals implements JsonSerializable
{
    public function __construct(
        TerminalTask ...$terminals,
    ) {
        $this->terminals = $terminals;
    }
    public array $terminals = [];
    public function addTerminal(TerminalTask $terminal)
    {
        $this->terminals[] = $terminal;
    }
    public function jsonSerialize(): mixed
    {
        return get_object_vars($this);
    }
}

class Tasks implements JsonSerializable
{
    public string $version = "2.0.0";
    public array $presentation = [
        "echo"             => false,
        "reveal"           => "always",
        "focus"            => false,
        "panel"            => "dedicated",
        "showReuseMessage" => true,
    ];
    public array $tasks = [];
    public function __construct(
        TerminalTask ...$terminals,
    ) {
        $this->tasks = [
            [
                "label"      => "Create terminals",
                "dependsOn"  => array_map(fn($dir)  => $dir->label, $terminals),

                "group"      => [
                    "kind"      => "build",
                    "isDefault" => true,
                ],
                // "dependsOrder" => "sequence",
                "runOptions" => [
                    "runOn" => "folderOpen",
                ],
            ],
            ...$terminals,
        ];

    }
    public function jsonSerialize(): mixed
    {
        return get_object_vars($this);
    }
}

$terminals          = new Terminals();
$pacakges           = array_filter(kPackagesList, fn($dir) => !in_array($dir, [".", ".."]));
$apps               = array_filter(kAppsList, fn($dir) => !in_array($dir, [".", ".."]));
$pacakges_priorites = [
    "utils",
    "router",
    "app",
];// any package that is not in the list will be added to the end of the list
//sort the packages by the priority
usort($pacakges, function ($a, $b) use ($pacakges_priorites) {
    $a_index = array_search($a, $pacakges_priorites);
    $b_index = array_search($b, $pacakges_priorites);
    if ($a_index === false && $b_index === false)
        return 0;
    if ($a_index === false)
        return 1;
    if ($b_index === false)
        return -1;
    return $a_index - $b_index;
});
foreach ($pacakges as $dir)
    $terminals->addTerminal(new TerminalTask(new Terminal($dir, "packages")));
foreach (array_filter($apps, fn($dir) => !in_array($dir, [".", ".."])) as $dir)
    $terminals->addTerminal(new TerminalTask(new Terminal($dir, "apps", "pnpm run dev")));
const kVSCodeDir = kBaseDir . "/.vscode";
if (!file_exists(kVSCodeDir))
    mkdir(kVSCodeDir, 0777, true);
// const kTerminalsFile = kVSCodeDir . "/terminals.json";
// file_put_contents(kTerminalsFile, json_encode($terminals, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
const kTaskFile = kVSCodeDir . "/tasks.json";
file_put_contents(kTaskFile, json_encode(new Tasks(...$terminals->terminals), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
