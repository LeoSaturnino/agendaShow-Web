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
    public function index($id = null)
    {
        $this->paginate = [
            'contain' => ['Clientes', 'Estabelecimentos'],
            'conditions' => ['Estabelecimentos.id' => $id],
            'group' => 'Clientes.id',
        ];
        $avaliacoes = $this->paginate($this->Avaliacoes);
        $estabelecimento = $this->Avaliacoes->Estabelecimentos->get($id, [
            'contain' => ['Users'],
        ]);


        $this->set(compact('avaliacoes', 'estabelecimento'));
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

}
