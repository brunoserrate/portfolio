<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Receita;

class ReceitaApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_receita()
    {
        $receita = factory(Receita::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/receitas', $receita
        );

        $this->assertApiResponse($receita);
    }

    /**
     * @test
     */
    public function test_read_receita()
    {
        $receita = factory(Receita::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/receitas/'.$receita->id
        );

        $this->assertApiResponse($receita->toArray());
    }

    /**
     * @test
     */
    public function test_update_receita()
    {
        $receita = factory(Receita::class)->create();
        $editedReceita = factory(Receita::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/receitas/'.$receita->id,
            $editedReceita
        );

        $this->assertApiResponse($editedReceita);
    }

    /**
     * @test
     */
    public function test_delete_receita()
    {
        $receita = factory(Receita::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/receitas/'.$receita->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/receitas/'.$receita->id
        );

        $this->response->assertStatus(404);
    }
}
