<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Route;
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
    /**
     * @test
     *
     * @return void
     */
    public function setActiveRouteShouldReturnCorrectClassBasedOnGiven()
    {
        $this->get(route('home'));
        $this->assertEquals('active', set_active_route('home'));
        $this->assertEquals('', set_active_route('about'));
        $this->assertEquals('', set_active_route('contact'));

        $this->get(route('contact'));
        $this->assertEquals('', set_active_route('home'));
        $this->assertEquals('', set_active_route('about'));
        $this->assertEquals('active', set_active_route('contact'));

        $this->get(route('about'));
        $this->assertEquals('', set_active_route('home'));
        $this->assertEquals('active', set_active_route('about'));
        $this->assertEquals('', set_active_route('contact'));
    }
}
