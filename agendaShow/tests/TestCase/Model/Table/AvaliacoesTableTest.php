<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AvaliacoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AvaliacoesTable Test Case
 */
class AvaliacoesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AvaliacoesTable
     */
    public $Avaliacoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Avaliacoes',
        'app.Clientes',
        'app.Estabelecimentos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Avaliacoes') ? [] : ['className' => AvaliacoesTable::class];
        $this->Avaliacoes = TableRegistry::getTableLocator()->get('Avaliacoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Avaliacoes);

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
