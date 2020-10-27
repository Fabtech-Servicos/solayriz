<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OperationTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OperationTable Test Case
 */
class OperationTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OperationTable
     */
    public $Operation;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Operation'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Operation') ? [] : ['className' => OperationTable::class];
        $this->Operation = TableRegistry::getTableLocator()->get('Operation', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Operation);

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
}
