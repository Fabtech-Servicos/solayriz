<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UploadTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UploadTable Test Case
 */
class UploadTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UploadTable
     */
    public $Upload;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Upload'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Upload') ? [] : ['className' => UploadTable::class];
        $this->Upload = TableRegistry::getTableLocator()->get('Upload', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Upload);

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
