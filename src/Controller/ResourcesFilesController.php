<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ResourcesFiles Controller
 *
 * @property \App\Model\Table\ResourcesFilesTable $ResourcesFiles
 *
 * @method \App\Model\Entity\ResourcesFile[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ResourcesFilesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Resources', 'Files']
        ];
        $resourcesFiles = $this->paginate($this->ResourcesFiles);

        $this->set(compact('resourcesFiles'));
    }

    /**
     * View method
     *
     * @param string|null $id Resources File id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $resourcesFile = $this->ResourcesFiles->get($id, [
            'contain' => ['Resources', 'Files']
        ]);

        $this->set('resourcesFile', $resourcesFile);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $resourcesFile = $this->ResourcesFiles->newEntity();
        if ($this->request->is('post')) {
            $resourcesFile = $this->ResourcesFiles->patchEntity($resourcesFile, $this->request->getData());
            if ($this->ResourcesFiles->save($resourcesFile)) {
                $this->Flash->success(__('The resources file has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The resources file could not be saved. Please, try again.'));
        }
        $resources = $this->ResourcesFiles->Resources->find('list', ['limit' => 200]);
        $files = $this->ResourcesFiles->Files->find('list', ['limit' => 200]);
        $this->set(compact('resourcesFile', 'resources', 'files'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Resources File id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $resourcesFile = $this->ResourcesFiles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $resourcesFile = $this->ResourcesFiles->patchEntity($resourcesFile, $this->request->getData());
            if ($this->ResourcesFiles->save($resourcesFile)) {
                $this->Flash->success(__('The resources file has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The resources file could not be saved. Please, try again.'));
        }
        $resources = $this->ResourcesFiles->Resources->find('list', ['limit' => 200]);
        $files = $this->ResourcesFiles->Files->find('list', ['limit' => 200]);
        $this->set(compact('resourcesFile', 'resources', 'files'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Resources File id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $resourcesFile = $this->ResourcesFiles->get($id);
        if ($this->ResourcesFiles->delete($resourcesFile)) {
            $this->Flash->success(__('The resources file has been deleted.'));
        } else {
            $this->Flash->error(__('The resources file could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
