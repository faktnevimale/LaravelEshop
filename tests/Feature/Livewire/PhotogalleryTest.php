<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Photogallery;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class PhotogalleryTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Photogallery::class)
            ->assertStatus(200);
    }
}
