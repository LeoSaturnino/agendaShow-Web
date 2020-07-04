<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Avaliacoes Controller
 *
 * @property \App\Model\Table\AvaliacoesTable $Avaliacoes
 *
 * @method \App\Model\Entity\Avaliaco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AvaliacoesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clientes', 'Estabelecimentos'],
        ];
        $avaliacoes = $this->paginate($this->Avaliacoes);

        $this->set(compact('avaliacoes'));
    }

    /**
     * View method
     *
     * @param string|null $id Avaliaco id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $avaliaco = $this->Avaliacoes->get($id, [
            'contain' => ['Clientes', 'Estabelecimentos'],
        ]);

        $this->set('avaliaco', $avaliaco);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $avaliaco = $this->Avaliacoes->newEntity();
        if ($this->request->is('post')) {
            $avaliaco = $this->Avaliacoes->patchEntity($avaliaco, $this->request->getData());
            if ($this->Avaliacoes->save($avaliaco)) {
                $this->Flash->success(__('The avaliaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The avaliaco could not be saved. Please, try again.'));
        }
        $clientes = $this->Avaliacoes->Clientes->find('list', ['limit' => 200]);
        $estabelecimentos = $this->Avaliacoes->Estabelecimentos->find('list', ['limit' => 200]);
        $this->set(compact('avaliaco', 'clientes', 'estabelecimentos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Avaliaco id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $avaliaco = $this->Avaliacoes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $avaliaco = $this->Avaliacoes->patchEntity($avaliaco, $this->request->getData());
            if ($this->Avaliacoes->save($avaliaco)) {
                $this->Flash->success(__('The avaliaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The avaliaco could not be saved. Please, try again.'));
        }
        $clientes = $this->Avaliacoes->Clientes->find('list', ['limit' => 200]);
        $estabelecimentos = $this->Avaliacoes->Estabelecimentos->find('list', ['limit' => 200]);
        $this->set(compact('avaliaco', 'clientes', 'estabelecimentos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Avaliaco id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $avaliaco = $this->Avaliacoes->get($id);
        if ($this->Avaliacoes->delete($avaliaco)) {
            $this->Flash->success(__('The avaliaco has been deleted.'));
        } else {
            $this->Flash->error(__('The avaliaco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
