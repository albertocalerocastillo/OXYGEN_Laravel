<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Activity;

class ActivityControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_page()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/activities');

        $response->assertStatus(200);
        $response->assertSee('Lista de Actividades');
    }

    public function test_create_page()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/activities/create');

        $response->assertStatus(200);
        $response->assertSee('Crear Nueva Actividad');
    }

    public function test_store_activity()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $activityData = [
            'type' => 'kayak',
            'user_id' => $user->id,
            'datetime' => '2025-03-27T10:00',
            'paid' => true,
            'notes' => 'Prueba de creación.',
            'satisfaction' => 9,
        ];

        $response = $this->post('/activities', $activityData);

        $response->assertStatus(302);
        $response->assertRedirect('/activities');
        $this->assertDatabaseHas('activities', $activityData);
    }

    public function test_show_page()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $activity = Activity::factory()->create(['user_id' => $user->id]);

        $response = $this->get("/activities/{$activity->id}");

        $response->assertStatus(200);
        $response->assertSee($activity->type);
    }

    public function test_edit_page()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $activity = Activity::factory()->create(['user_id' => $user->id]);

        $response = $this->get("/activities/{$activity->id}/edit");

        $response->assertStatus(200);
        $response->assertSee('Editar Actividad');
        $response->assertSee($activity->type);
    }

    public function test_update_activity()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $activity = Activity::factory()->create(['user_id' => $user->id, 'notes' => 'Nota antigua']);

        $updatedData = [
            'type' => 'windsurf',
            'user_id' => $user->id,
            'datetime' => '2025-03-28T11:00',
            'paid' => false,
            'notes' => 'Nota actualizada.',
            'satisfaction' => 6,
        ];

        $response = $this->put("/activities/{$activity->id}", $updatedData);

        $response->assertStatus(302);
        $response->assertRedirect('/activities');
        $this->assertDatabaseHas('activities', $updatedData);
        $this->assertDatabaseMissing('activities', ['notes' => 'Nota antigua']);
    }

    public function test_delete_activity()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $activity = Activity::factory()->create(['user_id' => $user->id]);

        $response = $this->delete("/activities/{$activity->id}");

        $response->assertStatus(302);
        $response->assertRedirect('/activities');
        $this->assertDatabaseMissing('activities', ['id' => $activity->id]);
    }
}