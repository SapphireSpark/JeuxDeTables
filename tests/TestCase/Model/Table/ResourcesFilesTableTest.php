<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ResourcesFilesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ResourcesFilesTable Test Case
 */
class ResourcesFilesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ResourcesFilesTable
     */
    public $ResourcesFiles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.resources_files',
        'app.resources',
        'app.files'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ResourcesFiles') ? [] : ['className' => ResourcesFilesTable::class];
        $this->ResourcesFiles = TableRegistry::getTableLocator()->get('ResourcesFiles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ResourcesFiles);

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
