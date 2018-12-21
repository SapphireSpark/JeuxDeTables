<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ResourceTypes Controller
 *
 * @property \App\Model\Table\ResourceTypesTable $ResourceTypes
 *
 * @method \App\Model\Entity\ResourceType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ResourceTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Resources']
        ];
        $resourceTypes = $this->paginate($this->ResourceTypes);

        $this->set(compact('resourceTypes'));
        $this->loadComponent('RequestHandler');
       
    }

    /**
     * View method
     *
     * @param string|null $id Resource Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $resourceType = $this->ResourceTypes->get($id, [
            'contain' => ['Resources']
        ]);

        $this->set('resourceType', $resourceType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $resourceType = $this->ResourceTypes->newEntity();
        if ($this->request->is('post')) {
            $resourceType = $this->ResourceTypes->patchEntity($resourceType, $this->request->getData());
            if ($this->ResourceTypes->save($resourceType)) {
                $this->Flash->success(__('The resource type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The resource type could not be saved. Please, try again.'));
        }
        $resources = $this->ResourceTypes->Resources->find('list', ['limit' => 200]);
        $this->set(compact('resourceType', 'resources'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Resource Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $resourceType = $this->ResourceTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $resourceType = $this->ResourceTypes->patchEntity($resourceType, $this->request->getData());
            if ($this->ResourceTypes->save($resourceType)) {
                $this->Flash->success(__('The resource type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The resource type could not be saved. Please, try again.'));
        }
        $resources = $this->ResourceTypes->Resources->find('list', ['limit' => 200]);
        $this->set(compact('resourceType', 'resources'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Resource Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $resourceType = $this->ResourceTypes->get($id);
        if ($this->ResourceTypes->delete($resourceType)) {
            $this->Flash->success(__('The resource type has been deleted.'));
        } else {
            $this->Flash->error(__('The resource type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
