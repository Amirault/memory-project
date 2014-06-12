<?php
App::uses('AppController', 'Controller');
/**
 * GamePlayers Controller
 *
 * @property GamePlayer $GamePlayer
 * @property PaginatorComponent $Paginator
 */
class GamePlayersController extends AppController {

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
		$this->GamePlayer->recursive = 0;
		$this->set('gamePlayers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->GamePlayer->exists($id)) {
			throw new NotFoundException(__('Invalid game player'));
		}
		$options = array('conditions' => array('GamePlayer.' . $this->GamePlayer->primaryKey => $id));
		$this->set('gamePlayer', $this->GamePlayer->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GamePlayer->create();
			if ($this->GamePlayer->save($this->request->data)) {
				$this->Session->setFlash(__('The game player has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The game player could not be saved. Please, try again.'));
			}
		}
		$players = $this->GamePlayer->Player->find('list');
		$games = $this->GamePlayer->Game->find('list');
		$cards = $this->GamePlayer->Card->find('list');
		$this->set(compact('players', 'games', 'cards'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->GamePlayer->exists($id)) {
			throw new NotFoundException(__('Invalid game player'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->GamePlayer->save($this->request->data)) {
				$this->Session->setFlash(__('The game player has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The game player could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('GamePlayer.' . $this->GamePlayer->primaryKey => $id));
			$this->request->data = $this->GamePlayer->find('first', $options);
		}
		$players = $this->GamePlayer->Player->find('list');
		$games = $this->GamePlayer->Game->find('list');
		$cards = $this->GamePlayer->Card->find('list');
		$this->set(compact('players', 'games', 'cards'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->GamePlayer->id = $id;
		if (!$this->GamePlayer->exists()) {
			throw new NotFoundException(__('Invalid game player'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->GamePlayer->delete()) {
			$this->Session->setFlash(__('The game player has been deleted.'));
		} else {
			$this->Session->setFlash(__('The game player could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
/**
 * gameJoin method
 * @return void
 */
	public function gameJoin() {
		$this->autoRender = false;
		if ($this->request->is('ajax'))
		{
			$gameId = $this->request->data['gameId'];
			session_start();
			
			$options = array('conditions' => array('Player.login' => $_SESSION["login"]));
			$player = $this->GamePlayer->Player->find('first', $options);
			
			$this->GamePlayer->create();
			$this->GamePlayer->save(array('player_id' =>  $player["Player"]["id"], 'game_id' => $gameId));
		}
	}
	
	/**
 * getPlayers method
 * @return void
 */
	public function getGame() {
		$this->autoRender = false;
		if ($this->request->is('ajax'))
		{
			$gameId = $this->request->data['gameId'];
			$options = array('conditions' => array('GamePlayer.game_id' =>$gameId ));
			$game = $this->GamePlayer->find('all', $options);
			
			echo json_encode($game);
		}
	}
}

	