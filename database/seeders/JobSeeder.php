<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Tag;
use App\Models\Job;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $tags = Tag::factory(3)->create();

        Job::factory(20)->hasAttached($tags)->create(new Sequence(
            [
            'featured' => false,
            'schedule' => 'Full Time'
        ],
        [
            'featured' => true,
            'schedule' => 'Part Time'
        ]
        ));
    }
}
