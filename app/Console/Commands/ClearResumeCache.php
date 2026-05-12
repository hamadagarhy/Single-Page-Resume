<?php

namespace App\Console\Commands;

use App\Services\ResumeService;
use Illuminate\Console\Command;

class ClearResumeCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:clear-resume-cache';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear only the resume cache key';

    /**
     * Execute the console command.
     */
    public function handle(ResumeService $resumeService): void
    {
        $resumeService->clearCache();
        $this->info('Resume cache cleared!');
    }
}
