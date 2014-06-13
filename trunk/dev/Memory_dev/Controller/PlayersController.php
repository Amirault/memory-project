<?php
App::uses('AppController', 'Controller');
/**
 * Players Controller
 *
 * @property Player $Player
 * @property PaginatorComponent $Paginator
 */
class PlayersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Player->recursive = 0;
		$this->set('players', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Player->exists($id)) {
			throw new NotFoundException(__('Invalid player'));
		}
		$options = array('conditions' => array('Player.' . $this->Player->primaryKey => $id));
		$this->set('player', $this->Player->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Player->create();
			if ($this->Player->save($this->request->data)) {
				$this->Session->setFlash(__('The player has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The player could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Player->exists($id)) {
			throw new NotFoundException(__('Invalid player'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Player->save($this->request->data)) {
				$this->Session->setFlash(__('The player has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The player could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Player.' . $this->Player->primaryKey => $id));
			$this->request->data = $this->Player->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Player->id = $id;
		if (!$this->Player->exists()) {
			throw new NotFoundException(__('Invalid player'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Player->delete()) {
			$this->Session->setFlash(__('The player has been deleted.'));
		} else {
			$this->Session->setFlash(__('The player could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
/**
 * signIn method
 *
 * @return void
 */
	public function signIn()
	{
	
		$this->autoRender = false;
		if ($this->request->is('ajax'))
		{
			$stt = false;
			$login = $this->request->data['login'];
			
			$options = array('conditions' => array('Player.login' => $login));
			$nbLogin = $this->Player->find('count', $options);
			
			if ($nbLogin == 1)
			{
				$password = $this->request->data['password'];
				$options = array('conditions' => array('Player.login' => $login, 'Player.password' => $password));
				$nbLoginPassword = $this->Player->find('count', $options);
				$player = $this->Player->find('first', $options);
				if ($nbLoginPassword == 1)
				{
					session_start();
					$_SESSION["login"] = $login;
					$_SESSION["id_player"] = $player['Player']['id'];
					$stt = true;
					$message = "Bienvenue ".$login." !";
				}
				else
				{
					$message = "Mot de passe incorrect";
				}
			}
			else
			{
				$message = $login." n'est pas encore inscrit !";
			}
			
			echo json_encode(array('status' => $stt,'message'=> $message));
		}
	}
	
/**
 * signUp method
 *
 * @return void
 */
	public function signUp()
	{
		$this->autoRender = false;
		if ($this->request->is('ajax'))
		{
			$stt = false;
			$login = $this->request->data['login'];
			$options = array('conditions' => array('Player.login' => $login));
			$nbLogin = $this->Player->find('count', $options);
			
			if ($nbLogin == 0)
			{
				$password = $this->request->data['password'];
				$this->Player->create(array('Player.login' => $login,'Player.password'=> $password));
				$this->Player->save($this->request->data);
				
				$options = array('conditions' => array('Player.login' => $login, 'Player.password' => $password));
				$player = $this->Player->find('first', $options);
				session_start();
				$_SESSION["login"] = $login;
				$_SESSION["id_player"] = $player['Player']['id'];
				$stt = true;
				$message = "Bienvenue ".$login." !";
			}
			else
			{
				$message = "Pseudo ".$login." est déjà choisi !";
			}
			
			echo json_encode(array('status' => $stt,'message'=> $message));
		}
	}
}
