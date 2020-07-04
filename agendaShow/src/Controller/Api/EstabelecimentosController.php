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
    
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['*']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    function list($cidade = null) 
    {
        if ($cidade != null) {
            $estabelecimentos = $this->Estabelecimentos->find('all')->where(['cidade' => $cidade]);

            $resultJ = json_encode($estabelecimentos);
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
     * View method
     *
     * @param string|null $id Estabelecimento id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        if ($id != null) {
            $estabelecimento = $this->Estabelecimentos->get($id);

            $resultJ = json_encode($estabelecimento);
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
