<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_as_a_path()
    {
        $project = factory('App\Project')->create();
        $this->assertEquals('/projects/' . $project->id, $project->path());
    }

    public function it_belongs_to_owner()
    {
        $project = factory('App\Project')->create();
        // $this->assertEquals('/projects/' . $project->id, $project->path());
        $this->assertInstanceOf('\App\User', $project->owner());
    }
}
