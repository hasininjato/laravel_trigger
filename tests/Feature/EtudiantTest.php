<?php

namespace Tests\Feature\Etudiant;

use App\Models\Etudiant;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class EtudiantTest extends TestCase
{
    use RefreshDatabase;
    public function test_index_should_return_status()
    {
        $response = $this->get(route('etudiants.index'));
        $response->assertStatus(200);
    }

    public function test_index_should_return_view()
    {
        $response = $this->get(route('etudiants.index'));
        $response->assertViewIs('etudiant.index');
    }

    public function test_get_etudiants_should_contain_etudiant_created()
    {
        Etudiant::factory()->create();
        $response = $this->get(route('ajax-etudiants'));
        $etudiant = Etudiant::find(1)->toArray();
        $response->assertJsonFragment($etudiant);
    }
}
