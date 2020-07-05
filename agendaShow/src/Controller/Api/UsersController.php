<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    public function initialize()
    {
        parent::initialize();

        $this->Authentication->allowUnauthenticated(['login', 'add']);
    }

    public function loginapp()
    {
        $result = $this->Authentication->getResult();
        if ($result->isValid()) {

            $token = 'covid2020';
            $user = $result->getData();

            $resultJ = json_encode(['token' => $token, 'usuario' => $user]);
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
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $cliente = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $resultJ = json_encode($user);
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
