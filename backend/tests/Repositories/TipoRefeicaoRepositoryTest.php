<?php namespace Tests\Repositories;

use App\Models\TipoRefeicao;
use App\Repositories\TipoRefeicaoRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class TipoRefeicaoRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var TipoRefeicaoRepository
     */
    protected $tipoRefeicaoRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->tipoRefeicaoRepo = \App::make(TipoRefeicaoRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_tipo_refeicao()
    {
        $tipoRefeicao = factory(TipoRefeicao::class)->make()->toArray();

        $createdTipoRefeicao = $this->tipoRefeicaoRepo->create($tipoRefeicao);

        $createdTipoRefeicao = $createdTipoRefeicao->toArray();
        $this->assertArrayHasKey('id', $createdTipoRefeicao);
        $this->assertNotNull($createdTipoRefeicao['id'], 'Created TipoRefeicao must have id specified');
        $this->assertNotNull(TipoRefeicao::find($createdTipoRefeicao['id']), 'TipoRefeicao with given id must be in DB');
        $this->assertModelData($tipoRefeicao, $createdTipoRefeicao);
    }

    /**
     * @test read
     */
    public function test_read_tipo_refeicao()
    {
        $tipoRefeicao = factory(TipoRefeicao::class)->create();

        $dbTipoRefeicao = $this->tipoRefeicaoRepo->find($tipoRefeicao->id);

        $dbTipoRefeicao = $dbTipoRefeicao->toArray();
        $this->assertModelData($tipoRefeicao->toArray(), $dbTipoRefeicao);
    }

    /**
     * @test update
     */
    public function test_update_tipo_refeicao()
    {
        $tipoRefeicao = factory(TipoRefeicao::class)->create();
        $fakeTipoRefeicao = factory(TipoRefeicao::class)->make()->toArray();

        $updatedTipoRefeicao = $this->tipoRefeicaoRepo->update($fakeTipoRefeicao, $tipoRefeicao->id);

        $this->assertModelData($fakeTipoRefeicao, $updatedTipoRefeicao->toArray());
        $dbTipoRefeicao = $this->tipoRefeicaoRepo->find($tipoRefeicao->id);
        $this->assertModelData($fakeTipoRefeicao, $dbTipoRefeicao->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_tipo_refeicao()
    {
        $tipoRefeicao = factory(TipoRefeicao::class)->create();

        $resp = $this->tipoRefeicaoRepo->delete($tipoRefeicao->id);

        $this->assertTrue($resp);
        $this->assertNull(TipoRefeicao::find($tipoRefeicao->id), 'TipoRefeicao should not exist in DB');
    }
}
