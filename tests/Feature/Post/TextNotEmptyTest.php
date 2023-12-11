<?php

use App\Models\Post;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\URL;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;


class TextNotEmptyTest extends TestCase {
    use RefreshDatabase;

    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void {
        $response = $this->get('/posts');
        $response->assertStatus(200);
        $this->assertTrue(true);
    }
    public function test_page_return_200() {
        $url = 'http://127.0.0.1:8001/posts';
        $headers = get_headers($url,1);
        $this->assertEquals('HTTP/1.1 200 OK', $headers[0]);
    }
    public function test_is_title_displayed(): void {
        $post = Post::factory()->create();
        $title = $post->title;
        $expectedText = sprintf('%s', $title);
        $response = $this->get('/posts');
        $response->assertSee($expectedText);        
    }
    public function test_is_username_displayed(): void {
        $post = Post::factory()->create();
        $user = User::factory()->create();
        $name = $user -> name;
        $expectedText = sprintf('%s', $name);
        $response = $this->get('/posts');
        $response->assertSee($expectedText);        
    }
    

}