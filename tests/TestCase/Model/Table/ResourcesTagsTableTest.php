<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ResourcesTagsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ResourcesTagsTable Test Case
 */
class ResourcesTagsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ResourcesTagsTable
     */
    public $ResourcesTags;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.resources_tags',
        'app.resources',
        'app.tags'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ResourcesTags') ? [] : ['className' => ResourcesTagsTable::class];
        $this->ResourcesTags = TableRegistry::getTableLocator()->get('ResourcesTags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ResourcesTags);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
