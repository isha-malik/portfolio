<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use App\Models\Employer;
use App\Models\Job;

class JobTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $employer = Employer::factory()->create();
        $job = Job::factory()->create([
            'employer_id' => $employer->id,
        ]);
        $this->assertTrue($job->employer->is($employer));

        // expect($job->employer->is($employer))->toBeTrue();
    }

    public function test_tags(): void
    {
        $job = Job::factory()->create();
        $job->tag('Frontend');

       $this->assertCount(1, $job->tags);
    }
}
