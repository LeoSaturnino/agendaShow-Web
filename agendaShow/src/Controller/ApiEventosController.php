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
class ApiEventosController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->Authentication->allowUnauthenticated(['*']);
        $this->loadModel('Eventos');
    }

    function list() {
        $eventos = $this->Eventos->find('all')->toList();
        if (!empty($eventos)) {

            $resultJ = json_encode($eventos);
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        } else {
            $resultJ = json_encode([]);
            $this->response->type('json');
            $this->response->body($resultJ);
            return $this->response;
        }

    }

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
