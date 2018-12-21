<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Resources Controller
 *
 * @property \App\Model\Table\ResourcesTable $Resources
 *
 * @method \App\Model\Entity\Resource[] paginate($object = null, array $settings = [])
 */
class ResourcesController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $resources = $this->paginate($this->Resources, ['contain' => ['Files', 'Users']]);

        $this->set(compact('resources'));
        $this->set('_serialize', ['resources']);
    }

    /**
     * View method
     *
     * @param string|null $id Resource id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $resource = $this->Resources->get($id, [
            'contain' => ['Files', 'Users', 'Subcategories']
        ]);

        $this->set('resource', $resource);
        $this->set('_serialize', ['resource']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $resource = $this->Resources->newEntity();
        if ($this->request->is('post')) {
            $resource = $this->Resources->patchEntity($resource, $this->request->getData());
            // Ajout de cette ligne
            $resource->user_id = $this->Auth->user('id');
            if ($this->Resources->save($resource)) {
                $this->Flash->success(__('The resource has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The resource could not be saved. Please, try again.'));
        }
        $files = $this->Resources->Files->find('list', ['limit' => 200]);

        // Bâtir la liste des catégories  
        $this->loadModel('Categories');
        $categories = $this->Categories->find('list', ['limit' => 200]);

        // Extraire le id de la première catégorie
        $categories = $categories->toArray();
        reset($categories);
        $category_id = key($categories);

        // Bâtir la liste des sous-catégories reliées à cette catégorie
        $subcategories = $this->Resources->Subcategories->find('list', [
            'conditions' => ['Subcategories.category_id' => $category_id],
        ]);

        $this->set(compact('resource', 'subcategories', 'categories', 'files'));
        $this->set('_serialize', ['resource', 'subcategories', 'categories', 'files']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Resource id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $resource = $this->Resources->get($id, [
            'contain' => ['Files', 'Subcategories']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $resource = $this->Resources->patchEntity($resource, $this->request->getData());
            // Ajout de cette ligne
            $resource->user_id = $this->Auth->user('id');
            if ($this->Resources->save($resource)) {
                $this->Flash->success(__('The resource has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The resource could not be saved. Please, try again.'));
        }
        $files = $this->Resources->Files->find('list', ['limit' => 200]);
        $this->set(compact('resource', 'files'));
        $this->set('_serialize', ['resource']);
    }
    public function editLast($id = null) {
        $resources =  $this->Resources->find('all')->all();
        $lastResource = $resources->last();
        return $this->redirect(['action' => 'edit', $lastResource->id]);
    }
    /**
     * Delete method
     *
     * @param string|null $id Resource id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $resource = $this->Resources->get($id);
        if ($this->Resources->delete($resource)) {
            $this->Flash->success(__('The resource has been deleted.'));
        } else {
            $this->Flash->error(__('The resource could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function isAuthorized($user) {
        // All registered users can add resources
        if ($this->request->getParam('action') === 'add') {
            return true;
        }

        // The owner of an resource can edit and delete it
        if (in_array($this->request->getParam('action'), ['edit', 'delete'])) {
            $resource_id = (int) $this->request->getParam('pass.0');
            if ($this->Resources->isOwnedBy($resource_id, $user['id'])) {
                return true;
            }
        }

        return parent::isAuthorized($user);
    }

}
