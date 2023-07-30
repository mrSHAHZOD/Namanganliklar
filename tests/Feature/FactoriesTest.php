<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Audit;
use App\Models\Category;
use App\Models\Message;
use App\Models\News;
use App\Models\Post;

class FactoriesTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
 /*    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    } */

    public function test_audit_factory(): void
    {
        $audit = audit::factory()->create();
        // Assert statements to validate the generated user
        $this->assertInstanceOf(audit::class, $audit);
    }

    public function test_category_factory(): void
    {
        $category = Category::factory()->create();
        // Assert statements to validate the generated user
        $this->assertInstanceOf(Category::class, $category);
    }

    public function test_message_factory(): void
    {
        $message = Message::factory()->create();
        // Assert statements to validate the generated user
        $this->assertInstanceOf(Message::class, $message);
    }

    public function test_news_factory(): void
    {
        $news = News::factory()->create();
        // Assert statements to validate the generated user
        $this->assertInstanceOf(News::class, $news);
    }


    public function test_post_factory(): void
    {
        $post = Post::factory()->create();
        // Assert statements to validate the generated user
        $this->assertInstanceOf(Post::class, $post);
    }

}
