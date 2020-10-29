<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InstallationTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InstallationTable Test Case
 */
class InstallationTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InstallationTable
     */
    public $Installation;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Installation'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Installation') ? [] : ['className' => InstallationTable::class];
        $this->Installation = TableRegistry::getTableLocator()->get('Installation', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Installation);

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
