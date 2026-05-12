<?php

namespace App\Data;

readonly class Resume
{
   public function __construct(
       public Basics $basics,
       public array  $profiles,
       public array  $skills,
       public array  $work)
   {
   }

    public static function fromArray (array $data):self
    {
        $basics = Basics::fromArray($data['basics']?? []);
        $profiles = array_map(fn($profile) => SocialProfile::fromArray($profile), $data['profiles'] ?? []);
        $skills = array_map(fn($skill) => Skill::fromArray($skill), $data['skills'] ?? []);
        $work = array_map(fn($work) => WorkExperience::fromArray($work), $data['work'] ?? []);

        return new self(
            basics: $basics,
            profiles : $profiles,
            skills : $skills,
            work : $work,
            );

    }


}
