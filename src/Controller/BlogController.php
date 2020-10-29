<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Blog Controller
 *
 * @property \App\Model\Table\BlogTable $Blog
 *
 * @method \App\Model\Entity\Blog[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BlogController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $blog = $this->paginate($this->Blog);

        $this->set(compact('blog'));
    }

    /**
     * View method
     *
     * @param string|null $id Blog id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $blog = $this->Blog->get($id, [
            'contain' => []
        ]);

        $this->set('blog', $blog);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $blog = $this->Blog->newEntity();
        if ($this->request->is('post')) {
            $blog = $this->Blog->patchEntity($blog, $this->request->getData());
            if ($this->Blog->save($blog)) {
                $this->Flash->success(__('The {0} has been saved.', 'Blog'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Blog'));
        }
        $this->set(compact('blog'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Blog id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $blog = $this->Blog->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $blog = $this->Blog->patchEntity($blog, $this->request->getData());
            if ($this->Blog->save($blog)) {
                $this->Flash->success(__('The {0} has been saved.', 'Blog'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Blog'));
        }
        $this->set(compact('blog'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Blog id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $blog = $this->Blog->get($id);
        if ($this->Blog->delete($blog)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Blog'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Blog'));
        }

        return $this->redirect(['action' => 'index']);
    }



    public function blog(){
        $this->paginate = [
            'limit'=> 9,
        ];
        $this->viewBuilder()->setLayout('site');
        $blog = $this->paginate($this->Blog);
        $this->set('blog', $blog);
    }


    public function post($id)
    {
        $this->viewBuilder()->setLayout('site');
        $post = $this->Blog->get($id);
        $this->set('post', $post);
        $this->loadModel('Blog');
    }


    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['post','blog']);
    }
}
