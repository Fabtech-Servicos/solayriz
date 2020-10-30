<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Projects Controller
 *
 * @property \App\Model\Table\ProjectsTable $Projects
 *
 * @method \App\Model\Entity\Project[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjectsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories']
        ];
        $projects = $this->paginate($this->Projects);

        $this->set(compact('projects'));
    }

    /**
     * View method
     *
     * @param string|null $id Project id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $project = $this->Projects->get($id, [
            'contain' => ['Categories']
        ]);

        $this->set('project', $project);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $project = $this->Projects->newEntity();
        if ($this->request->is('post')) {
            $project = $this->Projects->patchEntity($project, $this->request->getData());
            if ($this->Projects->save($project)) {
                $this->Flash->success(__('The {0} has been saved.', 'Project'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Project'));
        }
        $categories = $this->Projects->Categories->find('list', ['limit' => 200]);
        $this->set(compact('project', 'categories'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Project id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $project = $this->Projects->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $project = $this->Projects->patchEntity($project, $this->request->getData());
            if ($this->Projects->save($project)) {
                $this->Flash->success(__('The {0} has been saved.', 'Project'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Project'));
        }
        $categories = $this->Projects->Categories->find('list', ['limit' => 200]);
        $this->set(compact('project', 'categories'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Project id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $project = $this->Projects->get($id);
        if ($this->Projects->delete($project)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Project'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Project'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function project($categoryId){
        $this->paginate = [
            'limit'=> 16,
        ];
        $this->viewBuilder()->setLayout('site');
        $project = $this->paginate( $this->Projects->find('all')->where([ 'category_id' => $categoryId ]) );
        $this->set(compact('project'));
        $this->loadModel('Categories');
        $categor = $this->Categories->find('all');
        $this->set(compact('categor'));

    }

    public function projectAll(){
        $this->paginate = [
            'limit'=> 16,
        ];
        $this->viewBuilder()->setLayout('site');
        $projects = $this->paginate($this->Projects);
        $this->set('projects', $projects);
    }


    public function projectSingle($id)
    {
     $this->viewBuilder()->setLayout('site');
     $projectSingle = $this->Projects->get($id);
     $this->set('projectSingle', $projectSingle);

    }

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['project','projectAll','projectSingle']);
    }


}
