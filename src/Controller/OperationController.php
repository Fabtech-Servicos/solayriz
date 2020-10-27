<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Operation Controller
 *
 * @property \App\Model\Table\OperationTable $Operation
 *
 * @method \App\Model\Entity\Operation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OperationController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $operation = $this->paginate($this->Operation);

        $this->set(compact('operation'));
    }

    /**
     * View method
     *
     * @param string|null $id Operation id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $operation = $this->Operation->get($id, [
            'contain' => []
        ]);

        $this->set('operation', $operation);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $operation = $this->Operation->newEntity();
        if ($this->request->is('post')) {
            $operation = $this->Operation->patchEntity($operation, $this->request->getData());
            if ($this->Operation->save($operation)) {
                $this->Flash->success(__('The {0} has been saved.', 'Operation'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Operation'));
        }
        $this->set(compact('operation'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Operation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $operation = $this->Operation->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $operation = $this->Operation->patchEntity($operation, $this->request->getData());
            if ($this->Operation->save($operation)) {
                $this->Flash->success(__('The {0} has been saved.', 'Operation'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Operation'));
        }
        $this->set(compact('operation'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Operation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $operation = $this->Operation->get($id);
        if ($this->Operation->delete($operation)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Operation'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Operation'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function operation($id)
    {
        $this->viewBuilder()->setLayout('site');
        $operation = $this->Operation->get($id);
        $this->set('operation', $operation);
    }

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow('operation');
    }

}
