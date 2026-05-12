<?php

namespace App\Services;

use App\Data\Resume;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class ResumeService
{

    public function getResume() : Resume
    {

            $data = Cache::remember('resume.data', config('resume.cache_ttl'), function () {
                dump('reading file...');
                $resume = Storage:: disk('resumes')->get('resume.json');
                return json_decode($resume, true);
            });

            if (!is_array($data)) {
                throw new \RuntimeException('Invalid resume JSON structure.');
            }
            return Resume::fromArray($data);
    }

    public function clearCache() : void
    {
        Cache::forget('resume.data');
    }
}
