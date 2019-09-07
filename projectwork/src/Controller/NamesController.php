<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Names Controller
 *
 * @property \App\Model\Table\NamesTable $Names
 *
 * @method \App\Model\Entity\Name[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NamesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $names = $this->paginate($this->Names);

        $this->set(compact('names'));
    }

    /**
     * View method
     *
     * @param string|null $id Name id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $name = $this->Names->get($id, [
            'contain' => []
        ]);

        $this->set('name', $name);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $name = $this->Names->newEntity();
        if ($this->request->is('post')) {
            $name = $this->Names->patchEntity($name, $this->request->getData());
            if ($this->Names->save($name)) {
                $this->Flash->success(__('The name has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The name could not be saved. Please, try again.'));
        }
        $this->set(compact('name'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Name id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $name = $this->Names->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $name = $this->Names->patchEntity($name, $this->request->getData());
            if ($this->Names->save($name)) {
                $this->Flash->success(__('The name has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The name could not be saved. Please, try again.'));
        }
        $this->set(compact('name'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Name id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $name = $this->Names->get($id);
        if ($this->Names->delete($name)) {
            $this->Flash->success(__('The name has been deleted.'));
        } else {
            $this->Flash->error(__('The name could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function home()
    {
        $this->paginate = [
            'contain' => ['Categories', 'Works']
        ];
        $names = $this->paginate($this->Names);

        $this->set(compact('names'));
    }
}
