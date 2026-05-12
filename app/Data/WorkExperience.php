<?php

namespace App\Data;
use Carbon\Carbon;

readonly class WorkExperience
{
    public function __construct(
        public string $company,
        public string $position,
        public ?Carbon $startDate,
        public  ?Carbon $endDate,
        public string $summary)
    {
    }

  public static function fromArray (array $data):self
{
    return new self(
        company: $data['company'] ?? '',
        position: $data['position'] ?? '',
        startDate: isset($data['startDate'])
            ? Carbon::parse($data['startDate'])
            : null,
        endDate: isset($data['endDate'])
            ? Carbon::parse($data['endDate'])
            : null,
        summary: $data['summary'] ?? '',);

}

}
