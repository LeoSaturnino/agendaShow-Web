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

    public function initialize()
    {
        parent::initialize();
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
        if ($id != null) {
            $avaliaco = $this->Avaliacoes->get($id, [
                'contain' => ['Clientes', 'Estabelecimentos'],
            ]);
            $resultJ = json_encode($avaliaco);
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        }

        $resultJ = json_encode(['error' => 'Requisição inadequada']);
        $this->response->type('json');
        $this->response->body($resultJ);
        return $this->response;
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
                $resultJ = json_encode($avaliaco);
                $this->response->type('json');
                $this->response->body($resultJ);
                return $this->response;
            }
            $resultJ = json_encode(['error' => 'Requisição inadequada']);
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        }
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
        $avaliaco = $this->Avaliacoes->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $avaliaco = $this->Avaliacoes->patchEntity($avaliaco, $this->request->getData());
            if ($this->Avaliacoes->save($avaliaco)) {
                $resultJ = json_encode($avaliaco);
                $this->response->type('json');
                $this->response->body($resultJ);
                return $this->response;
            }
            $resultJ = json_encode(['error' => 'Requisição inadequada']);
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        }
    }

    public function list($id = null) {
        if ($id != null) {
            $avaliacoes = $this->Avaliacoes->find('all')->where(['cliente_id' => $id]);

            $resultJ = json_encode($avaliacoes);
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;

        }

        $resultJ = json_encode(['error' => 'Requisição inadequada']);
        $this->response->type('json');
        $this->response->body($resultJ);
        return $this->response;
    }
}