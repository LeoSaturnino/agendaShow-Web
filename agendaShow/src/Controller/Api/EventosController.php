<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Eventos Controller
 *
 * @property \App\Model\Table\EventosTable $Eventos
 *
 * @method \App\Model\Entity\Evento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EventosController extends AppController
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
    function list($cidade = null) {
        if ($cidade != null) {
            $eventos = $this->Eventos->find('all')->contin(['Estabelecimentos'])->where(['Estabelecimentos.cidade' => $cidade]);

            $resultJ = json_encode($eventos);
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
            $evento = $this->Evento->get($id, [
                'contain' => ['Estabelecimentos'],
            ]);

            $resultJ = json_encode($evento);
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
