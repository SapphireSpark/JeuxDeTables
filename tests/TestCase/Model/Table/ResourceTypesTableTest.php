<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ResourceTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ResourceTypesTable Test Case
 */
class ResourceTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ResourceTypesTable
     */
    public $ResourceTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.resource_types',
        'app.resources'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ResourceTypes') ? [] : ['className' => ResourceTypesTable::class];
        $this->ResourceTypes = TableRegistry::getTableLocator()->get('ResourceTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ResourceTypes);

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

    public function testValidationDefault()
    {
        $data = [
            'resource_id' => '1',
            'description' => '',
            'created' => '2018-08-31 14:38:24',
            'modified' => '2018-08-31 14:38:24'
        ];
        
        $resourcetype = $this->ResourceTypes->newEntity($data);
        $resultingError = $this->ResourceTypes->validator()->errors($data);
        $expectedError = [
            'description' => [
                    '_empty' => 'This field cannot be left empty'
            ]
        ];
        $this->assertEquals($expectedError, $resultingError);
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
    
    public function testFindDescription()
    {
        $query = $this->ResourceTypes->find('description');
        $this->assertInstanceOf('Cake\ORM\Query', $query);
        $result = $query->hydrate(false)->toArray();
        $expected = [
            (int) 0 => [
                'id' => 1,
                'resource_id' => 1,
                'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'created' => '2018-10-07 21:00:06',
                'modified' => '2018-10-07 21:00:06'
        
        ]];
        $this->assertEquals($expected, $result);
}}
