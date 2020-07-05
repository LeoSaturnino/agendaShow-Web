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

    function list() {
        $estabelecimentos = $this->Estabelecimentos->find('all');

        $resultJ = json_encode($estabelecimentos);
        $this->response->type('json');
        $this->response->body($resultJ);
        return $this->response;
    }

    public function listCidades()
    {
        $cidades = $this->Estabelecimentos->select('cidade');

        $resultJ = json_encode($cidades);
        $this->response->type('json');
        $this->response->body($resultJ);
        return $this->response;
    }

    public function listCategorias()
    {
        $categorias = $this->Estabelecimentos->select('categorias');

        $resultJ = json_encode($categorias);
        $this->response->type('json');
        $this->response->body($resultJ);
        return $this->response;
    }

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
