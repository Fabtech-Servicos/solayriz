<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * SolarEnergy Controller
 *
 * @property \App\Model\Table\SolarEnergyTable $SolarEnergy
 *
 * @method \App\Model\Entity\SolarEnergy[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SolarEnergyController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $solarEnergy = $this->paginate($this->SolarEnergy);

        $this->set(compact('solarEnergy'));
    }

    /**
     * View method
     *
     * @param string|null $id Solar Energy id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $solarEnergy = $this->SolarEnergy->get($id, [
            'contain' => []
        ]);

        $this->set('solarEnergy', $solarEnergy);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $solarEnergy = $this->SolarEnergy->newEntity();
        if ($this->request->is('post')) {
            $solarEnergy = $this->SolarEnergy->patchEntity($solarEnergy, $this->request->getData());
            if ($this->SolarEnergy->save($solarEnergy)) {
                $this->Flash->success(__('The {0} has been saved.', 'Solar Energy'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Solar Energy'));
        }
        $this->set(compact('solarEnergy'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Solar Energy id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $solarEnergy = $this->SolarEnergy->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $solarEnergy = $this->SolarEnergy->patchEntity($solarEnergy, $this->request->getData());
            if ($this->SolarEnergy->save($solarEnergy)) {
                $this->Flash->success(__('The {0} has been saved.', 'Solar Energy'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Solar Energy'));
        }
        $this->set(compact('solarEnergy'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Solar Energy id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $solarEnergy = $this->SolarEnergy->get($id);
        if ($this->SolarEnergy->delete($solarEnergy)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Solar Energy'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Solar Energy'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function solarEnergy($id)
    {
        $this->viewBuilder()->setLayout('site');
        $solar = $this->SolarEnergy->get($id);
        $this->set('solar', $solar);
    }

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow('solarEnergy');
    }

}
