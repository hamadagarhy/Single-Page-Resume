<?php


namespace App\Data;
readonly class SocialProfile
{
    public function __construct(
        public string $network,
        public ?string $url)
    {
    }

   public static function fromArray(array $data): self
    {
        return new self(
            network: $data['network'] ?? '',
            url: $data['url'] ?? null,);

    }

}

