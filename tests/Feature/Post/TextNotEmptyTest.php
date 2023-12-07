<?php

use App\Models\Post;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\URL;
use Tests\TestCase;

class TextNotEmptyTest extends TestCase {
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void {
        $this->assertTrue(true);
    }
}