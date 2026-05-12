<?php


namespace App\Data;
use App\Enums\SkillLevel;

readonly class Skill
{
    public function __construct(
        public string $name,
        public SkillLevel $level)
    {
    }

   public static function fromArray(array $data): self
    {
        if (! isset($data['name'])) {
            throw new \InvalidArgumentException('Skill name is required');
        }

        if (! isset($data['level'])) {
            throw new \InvalidArgumentException('Skill level is required');
        }
        return new self(
            name: $data['name'],
            level: SkillLevel::from($data['level']) ,);

    }

}

