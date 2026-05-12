<?php

namespace App\Data;
readonly class Basics
{
    public function __construct(
        public string $name,
        public string $email,
        public string $summary)
    {
    }

    public static function fromArray (array $data):self
{
    return new self(
        name: $data['name'] ?? '',
        email: $data['email'] ?? '',
        summary:  $data['summary'] ?? '',);

}

}
