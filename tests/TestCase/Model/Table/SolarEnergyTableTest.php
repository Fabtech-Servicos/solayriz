<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SolarEnergyTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SolarEnergyTable Test Case
 */
class SolarEnergyTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SolarEnergyTable
     */
    public $SolarEnergy;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.SolarEnergy'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SolarEnergy') ? [] : ['className' => SolarEnergyTable::class];
        $this->SolarEnergy = TableRegistry::getTableLocator()->get('SolarEnergy', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SolarEnergy);

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
