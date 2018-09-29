<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HelpersTest extends TestCase
{
    /**
     * @test
     *
     * @return void
     */
    public function pageTitleShouldReturnCorrectTitleTheBaseTitleIfTitleIsEmpty()
    {
        $this->assertEquals(config('app.name') . ' - List of artisans', page_title(''));
    }
    /**
     * @test
     *
     * @return void
     */
    public function pageTitleShouldReturnCorrectTitleTheBaseTitleIfTitleIsProvided()
    {
        $this->assertEquals('Home | ' . config('app.name') . ' - List of artisans', page_title('Home'));
        $this->assertEquals('About | ' . config('app.name') . ' - List of artisans', page_title('About'));
    }
}
