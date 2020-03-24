<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Recipe;

class RecipeTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRecipeNameIsNotEmpty()
    {
        $recipe = factory(Recipe::class)->make();
        $recipe->name='';
        $this->assertFalse('',$recipe->name);
    }
}
