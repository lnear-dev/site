<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class UpdateBlogContent
{
    const kRepoUrl = 'https://github.com/lnear-dev/blog.git';

    public static function localPath()
    {
        return storage_path('app/blog');
    }
    public function __invoke()
    {
        if (!Storage::exists($this->localPath())) {
            $this->cloneRepo();
        } else {
            $this->pullRepo();
        }
        $this->processMarkdownFiles();

    }
    private function process(string ...$args)
    {
        $process = new Process($args, $this->localPath());
        $process->run();
        if (!$process->isSuccessful())
            throw new ProcessFailedException($process);
        return $process;
    }

    protected function cloneRepo()
    {
        $this->process('git', 'clone', self::kRepoUrl, $this->localPath());
        Log::info('Repository cloned successfully.');
    }

    protected function pullRepo()
    {
        $this->process('git', 'pull');
        Log::info('Repository pulled successfully.');
    }

    protected function processMarkdownFiles()
    {
        // $files  = File::allFiles($this->localPath());
        $series = File::directories($this->localPath());
        foreach ($series as $s) {
            // $this->processSerie($serie);
            dump("Serie: {$s}");

            $files = File::allFiles($s);
            foreach ($files as $file) {
                if ($file->getExtension() === 'md') {
                    $content = File::get($file->getRealPath());
                    Log::info("Processing file: {$file->getFilename()}", ['content' => $content]);
                }
            }
        }

        foreach ($files as $file) {
            if ($file->getExtension() === 'md') {
                $content = File::get($file->getRealPath());
                Log::info("Processing file: {$file->getFilename()}", ['content' => $content]);
            }
        }
    }
}
