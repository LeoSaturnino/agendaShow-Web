<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Clientes Controller
 *
 * @property \App\Model\Table\ClientesTable $Clientes
 *
 * @method \App\Model\Entity\Cliente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClientesController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['add']);
    }

    public function view($id = null)
    {
        if ($id != null) {
            $cliente = $this->Clientes->get($id, [
                'contain' => ['Users'],
            ]);

            $resultJ = json_encode($cliente);
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        }

        $resultJ = json_encode(['error' => 'Requisição inadequada']);
        $this->response->type('json');
        $this->response->body($resultJ);
        return $this->response;
    }

    public function add()
    {
        $cliente = $this->Clientes->newEntity();
        if ($this->request->is('post')) {
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->getData());
            if ($this->Clientes->save($cliente)) {
                $resultJ = json_encode($cliente);
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

    public function edit($id = null)
    {
        $cliente = $this->Clientes->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->getData());
            if ($this->Clientes->save($cliente)) {
                $resultJ = json_encode($cliente);
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

}
