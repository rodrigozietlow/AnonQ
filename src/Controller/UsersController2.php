<?php
// src/Controller/ArticlesController.php

namespace App\Controller;

class UsersController extends AppController
{
	public function initialize()
	{
		parent::initialize();

		$this->loadComponent("Paginator");
		$this->loadComponent("Flash");
	}

	public function index()
    {
        $users = $this->Paginator->paginate($this->Users->find());
        $this->set(compact('users'));
    }

	public function view($id = null)
	{
	    $user = $this->Users->findById($id)->firstOrFail();
	    $this->set(compact('user'));
	}

	public function add()
	{
		$user = $this->Users->newEntity();
		if($this->request->is('post')){
			$user = $this->Users->patchEntity($user, $this->request->getData());

			if($this->Users->save($user)){
				$this->Flash->success(__("Your user have been saved."));
				return $this->redirect(["action" => "index"]);
			}

			$this->Flash->error(__("Unable to sabe your user."));
		}
		$this->set("user", $user);
	}
}
