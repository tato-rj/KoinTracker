<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Redis;

class ViewsTest extends TestCase
{
    /** @test */
    public function visitors_can_see_a_coin_page()
    {
        $this->get(route('coins.show', $this->coin))->assertSuccessful();
    }
}
