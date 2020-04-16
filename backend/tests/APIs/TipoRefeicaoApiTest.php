<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\TipoRefeicao;

class TipoRefeicaoApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_tipo_refeicao()
    {
        $tipoRefeicao = factory(TipoRefeicao::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/tipo_refeicaos', $tipoRefeicao
        );

        $this->assertApiResponse($tipoRefeicao);
    }

    /**
     * @test
     */
    public function test_read_tipo_refeicao()
    {
        $tipoRefeicao = factory(TipoRefeicao::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/tipo_refeicaos/'.$tipoRefeicao->id
        );

        $this->assertApiResponse($tipoRefeicao->toArray());
    }

    /**
     * @test
     */
    public function test_update_tipo_refeicao()
    {
        $tipoRefeicao = factory(TipoRefeicao::class)->create();
        $editedTipoRefeicao = factory(TipoRefeicao::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/tipo_refeicaos/'.$tipoRefeicao->id,
            $editedTipoRefeicao
        );

        $this->assertApiResponse($editedTipoRefeicao);
    }

    /**
     * @test
     */
    public function test_delete_tipo_refeicao()
    {
        $tipoRefeicao = factory(TipoRefeicao::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/tipo_refeicaos/'.$tipoRefeicao->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/tipo_refeicaos/'.$tipoRefeicao->id
        );

        $this->response->assertStatus(404);
    }
}
