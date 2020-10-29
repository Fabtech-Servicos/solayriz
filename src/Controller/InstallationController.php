<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Installation Controller
 *
 * @property \App\Model\Table\InstallationTable $Installation
 *
 * @method \App\Model\Entity\Installation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InstallationController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $installation = $this->paginate($this->Installation);

        $this->set(compact('installation'));
    }

    /**
     * View method
     *
     * @param string|null $id Installation id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $installation = $this->Installation->get($id, [
            'contain' => []
        ]);

        $this->set('installation', $installation);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $installation = $this->Installation->newEntity();
        if ($this->request->is('post')) {
            $installation = $this->Installation->patchEntity($installation, $this->request->getData());
            if ($this->Installation->save($installation)) {
                $this->Flash->success(__('The {0} has been saved.', 'Installation'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Installation'));
        }
        $this->set(compact('installation'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Installation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $installation = $this->Installation->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $installation = $this->Installation->patchEntity($installation, $this->request->getData());
            if ($this->Installation->save($installation)) {
                $this->Flash->success(__('The {0} has been saved.', 'Installation'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Installation'));
        }
        $this->set(compact('installation'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Installation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $installation = $this->Installation->get($id);
        if ($this->Installation->delete($installation)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Installation'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Installation'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
