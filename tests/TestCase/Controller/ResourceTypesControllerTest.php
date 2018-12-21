<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ResourceTypesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ResourceTypesController Test Case
 */
class ResourceTypesControllerTest extends IntegrationTestCase
{

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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->get('/resource-types');
        $this->assertResponseOk();
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->get('/resource-types/view/2');
        $this->assertResponseOk();
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
                $this->session([
            'Auth' => [
                'User' => [
                    'id' => 1,
                    'email' => 'Lorem ipsum dolor sit amet',
                    'password' => 'Lorem ipsum dolor sit amet',
                    'role' => 2,
                    'created' => null,
                    'modified' => null
                ]
            ]
        ]);
        $this->get('/resource-types/add');
        $this->assertResponseSuccess();
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
                $this->session([
            'Auth' => [
                'ResourceType' => ['id' => 2,
                    'Resource-id' => 1,
                    'Description' => 'Lorem ipsum dolor sit amet',
                ]
            ]
        ]);

        $this->get('/resource-types/edit/2');
        $this->assertResponseSuccess();
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->session([
            'Auth' => [
                'ResourceType' => ['id' => 2,
                    'Resource-id' => 1,
                    'Description' => 'Lorem ipsum dolor sit amet',
                ]
            ]
        ]);


        $this->enableCsrfToken();
        $this->enableSecurityToken();
        $query = $this->ResourceTypes->find('all', ['conditions' => ['ResourceTypes.id' => 2]])->first();
        $this->delete($query);
        $this->assertEmpty($query);
    }
}


