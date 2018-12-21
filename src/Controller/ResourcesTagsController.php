<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ResourcesTags Controller
 *
 * @property \App\Model\Table\ResourcesTagsTable $ResourcesTags
 *
 * @method \App\Model\Entity\ResourcesTag[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ResourcesTagsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Resources', 'Tags']
        ];
        $resourcesTags = $this->paginate($this->ResourcesTags);

        $this->set(compact('resourcesTags'));
    }

    /**
     * View method
     *
     * @param string|null $id Resources Tag id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $resourcesTag = $this->ResourcesTags->get($id, [
            'contain' => ['Resources', 'Tags']
        ]);

        $this->set('resourcesTag', $resourcesTag);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $resourcesTag = $this->ResourcesTags->newEntity();
        if ($this->request->is('post')) {
            $resourcesTag = $this->ResourcesTags->patchEntity($resourcesTag, $this->request->getData());
            if ($this->ResourcesTags->save($resourcesTag)) {
                $this->Flash->success(__('The resources tag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The resources tag could not be saved. Please, try again.'));
        }
        $resources = $this->ResourcesTags->Resources->find('list', ['limit' => 200]);
        $tags = $this->ResourcesTags->Tags->find('list', ['limit' => 200]);
        $this->set(compact('resourcesTag', 'resources', 'tags'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Resources Tag id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $resourcesTag = $this->ResourcesTags->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $resourcesTag = $this->ResourcesTags->patchEntity($resourcesTag, $this->request->getData());
            if ($this->ResourcesTags->save($resourcesTag)) {
                $this->Flash->success(__('The resources tag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The resources tag could not be saved. Please, try again.'));
        }
        $resources = $this->ResourcesTags->Resources->find('list', ['limit' => 200]);
        $tags = $this->ResourcesTags->Tags->find('list', ['limit' => 200]);
        $this->set(compact('resourcesTag', 'resources', 'tags'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Resources Tag id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $resourcesTag = $this->ResourcesTags->get($id);
        if ($this->ResourcesTags->delete($resourcesTag)) {
            $this->Flash->success(__('The resources tag has been deleted.'));
        } else {
            $this->Flash->error(__('The resources tag could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
