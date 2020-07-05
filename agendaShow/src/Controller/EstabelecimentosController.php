<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Estabelecimentos Controller
 *
 * @property \App\Model\Table\EstabelecimentosTable $Estabelecimentos
 *
 * @method \App\Model\Entity\Estabelecimento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EstabelecimentosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $estabelecimentos = $this->paginate($this->Estabelecimentos);

        $this->set(compact('estabelecimentos'));
    }

    /**
     * View method
     *
     * @param string|null $id Estabelecimento id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estabelecimento = $this->Estabelecimentos->get($id, [
            'contain' => ['Users'],
        ]);

        $this->loadModel('Eventos');

        $eventos = $this->Eventos->find('all')->where(['estabelecimentos_id' => $id])->toList();
        
        $this->set(compact('estabelecimento', 'user', 'eventos'));
        // $this->set('estabelecimento', $estabelecimento);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {

        $estabelecimento = $this->Estabelecimentos->newEntity();
        if ($this->request->is('post')) {
            $estabelecimento = $this->Estabelecimentos->patchEntity($estabelecimento, $this->request->getData());
            if ($this->Estabelecimentos->save($estabelecimento)) {
                $this->Flash->success(__('The estabelecimento has been saved.'));

                return $this->redirect(['action' => 'view', $estabelecimento->id]);
            }
            $this->Flash->error(__('The estabelecimento could not be saved. Please, try again.'));
        }
        $user = $this->Estabelecimentos->Users->get($id);
        $this->set(compact('estabelecimento', 'user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Estabelecimento id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estabelecimento = $this->Estabelecimentos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estabelecimento = $this->Estabelecimentos->patchEntity($estabelecimento, $this->request->getData());
            if ($this->Estabelecimentos->save($estabelecimento)) {
                $this->Flash->success(__('The estabelecimento has been saved.'));

                return $this->redirect(['action' => 'view', $estabelecimento->id]);
            }
            $this->Flash->error(__('The estabelecimento could not be saved. Please, try again.'));
        }
        $user = $this->Estabelecimentos->Users->get($estabelecimento->users_id);
        $this->set(compact('estabelecimento', 'user'));
    }

}
