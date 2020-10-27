<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Upload Controller
 *
 * @property \App\Model\Table\UploadTable $Upload
 *
 * @method \App\Model\Entity\Upload[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UploadController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $upload = $this->paginate($this->Upload);

        $this->set(compact('upload'));
    }

    /**
     * View method
     *
     * @param string|null $id Upload id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $upload = $this->Upload->get($id, [
            'contain' => []
        ]);

        $this->set('upload', $upload);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $upload = $this->Upload->newEntity();
        if ($this->request->is('post')) {
            $upload = $this->Upload->patchEntity($upload, $this->request->getData());
            if ($this->Upload->save($upload)) {
                $this->Flash->success(__('The {0} has been saved.', 'Upload'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Upload'));
        }
        $this->set(compact('upload'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Upload id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $upload = $this->Upload->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $upload = $this->Upload->patchEntity($upload, $this->request->getData());
            if ($this->Upload->save($upload)) {
                $this->Flash->success(__('The {0} has been saved.', 'Upload'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Upload'));
        }
        $this->set(compact('upload'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Upload id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $upload = $this->Upload->get($id);
        if ($this->Upload->delete($upload)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Upload'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Upload'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
