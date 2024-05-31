<?php

namespace HarayaTalk\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use HarayaTalk\Models\User;
use HarayaTalk\Models\Message;
use HarayaTalk\Models\Conversation;

class MessageTest extends TestCase
{
    use RefreshDatabase;

    public function test_message_can_be_sent()
    {
        $user = User::factory()->create();
        $conversation = Conversation::factory()->create();

        $response = $this->actingAs($user)->post('/messages', [
            'conversation_id' => $conversation->id,
            'message' => 'Hello, World!'
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('messages', ['message' => 'Hello, World!']);
    }
}
