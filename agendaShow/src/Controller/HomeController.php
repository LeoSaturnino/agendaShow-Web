<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Home Controller
 *
 *
 * @method \App\Model\Entity\Home[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HomeController extends AppController
{

    public function initialize()
    {
        parent::initialize();

        $this->Authentication->allowUnauthenticated(['index']);
    }

    public function index()
    {
        $this->layout = false;
    }
}
