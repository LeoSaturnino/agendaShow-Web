<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EstabelecimentosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EstabelecimentosTable Test Case
 */
class EstabelecimentosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EstabelecimentosTable
     */
    public $Estabelecimentos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Estabelecimentos',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Estabelecimentos') ? [] : ['className' => EstabelecimentosTable::class];
        $this->Estabelecimentos = TableRegistry::getTableLocator()->get('Estabelecimentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Estabelecimentos);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
