<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Salas Controller
 *
 * @property \App\Model\Table\SalasTable $Salas
 *
 * @method \App\Model\Entity\Sala[] paginate($object = null, array $settings = [])
 */
class SalasController extends AppController
{
	public function isAuthorized($user)
	{
		if($this->Auth->user('id')){
			return true;
		}

		return parent::isAuthorized($user);
	}

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {


        $query = $this->Salas->find("all")
			->leftJoinWith("Users")
			->where([
				'OR' => [
					'Salas.user_id' => $this->Auth->user('id'),
					'SalasUsers.user_id' => $this->Auth->user('id')
				]
			])
			->distinct([]);
		//debug($query);
		$salas = $this->paginate($query);
        $this->set(compact('salas'));
        $this->set('_serialize', ['salas']);
    }

    /**
     * View method
     *
     * @param string|null $id Sala id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sala = $this->Salas->get($id, [
            'contain' => [
				"Users",
				"Perguntas" => ["Users", "Tags", "sort" => ['Perguntas.created' => 'ASC']],
				"Tags"
			]
        ]);
		$this->set('tags', $sala->tags);
        $this->set('sala', $sala);
        $this->set('_serialize', ['sala']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sala = $this->Salas->newEntity();
        if ($this->request->is('post')) {
            $sala = $this->Salas->patchEntity($sala, $this->request->getData());
            if ($this->Salas->save($sala)) {
                $this->Flash->success(__('The sala has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sala could not be saved. Please, try again.'));
        }
        $this->set(compact('sala'));
        $this->set('_serialize', ['sala']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Sala id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sala = $this->Salas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sala = $this->Salas->patchEntity($sala, $this->request->getData());
            if ($this->Salas->save($sala)) {
                $this->Flash->success(__('The sala has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sala could not be saved. Please, try again.'));
        }
        $this->set(compact('sala'));
        $this->set('_serialize', ['sala']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sala id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sala = $this->Salas->get($id);
        if ($this->Salas->delete($sala)) {
            $this->Flash->success(__('The sala has been deleted.'));
        } else {
            $this->Flash->error(__('The sala could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

	public function acessar($link)
	{
		$salasTable = TableRegistry::get('Salas');

		$this->request->allowMethod(['get']);
		$sala = $this->Salas->find('all', [
			"conditions" => [
				"link" => $link
			]
		])
			->firstOrFail();
		$user = TableRegistry::get("Users")->find("all", [
			'conditions' => ['id' => $this->Auth->user('id')]
		])->firstOrFail();

		$salasTable->Users->link($sala, [$user]);

		$this->redirect(['controller' => 'salas', 'action' => 'view', $sala->id]);
	}
}
