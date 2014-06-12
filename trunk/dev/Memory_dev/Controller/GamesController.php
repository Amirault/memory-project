<?php
App::uses('AppController', 'Controller');
/**
 * Games Controller
 *
 * @property Game $Game
 * @property PaginatorComponent $Paginator
 */
class GamesController extends AppController {

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
		$this->Game->recursive = 0;
		$this->set('games', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Game->exists($id)) {
			throw new NotFoundException(__('Invalid game'));
		}
		$options = array('conditions' => array('Game.' . $this->Game->primaryKey => $id));
		$this->set('game', $this->Game->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Game->create();
			if ($this->Game->save($this->request->data)) {
				$this->Session->setFlash(__('The game has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The game could not be saved. Please, try again.'));
			}
		}
		$difficulties = $this->Game->Difficulty->find('list');
		$gameTypes = $this->Game->GameType->find('list');
		$players = $this->Game->Player->find('list');
		$this->set(compact('difficulties', 'gameTypes', 'players'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Game->exists($id)) {
			throw new NotFoundException(__('Invalid game'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Game->save($this->request->data)) {
				$this->Session->setFlash(__('The game has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The game could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Game.' . $this->Game->primaryKey => $id));
			$this->request->data = $this->Game->find('first', $options);
		}
		$difficulties = $this->Game->Difficulty->find('list');
		$gameTypes = $this->Game->GameType->find('list');
		$players = $this->Game->Player->find('list');
		$this->set(compact('difficulties', 'gameTypes', 'players'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Game->id = $id;
		if (!$this->Game->exists()) {
			throw new NotFoundException(__('Invalid game'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Game->delete()) {
			$this->Session->setFlash(__('The game has been deleted.'));
		} else {
			$this->Session->setFlash(__('The game could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * gameCreate method
 * @return void
 */
	public function gameCreate() {
		$this->autoRender = false;
		if ($this->request->is('ajax'))
		{
			$gameType = $this->request->data['gameType'];
			$gameName = $this->request->data['gameName'];
			$nbPlayers = $this->request->data['nbPlayers'];
			$nbPairs = $this->request->data['nbPairs'];
			session_start();
			
 			$options = array('conditions' => array('Difficulty.numberOfPairs' => $nbPairs));
			$difficulty = $this->Game->Difficulty->find('first', $options);
			$options = array('conditions' => array('GameType.name' => $gameType));
			$gameType = $this->Game->GameType->find('first', $options);
			$options = array('conditions' => array('Player.login' => $_SESSION["login"]));
			$hostPlayer = $this->Game->Player->find('first', $options);

			$this->Game->create();
			$this->Game->save(array('difficulty_id' => $difficulty['Difficulty']['id'], 'name'=> $gameName, 'gameType_id'=> $gameType["GameType"]["id"],
			'numberMaximumOfPlayers'=> $nbPlayers, 'player_id'=> $hostPlayer["Player"]["id"]));
			$gameId = $this->Game->getInsertID();
			
			$this->Game->GamePlayer->create();
			$this->Game->GamePlayer->save(array('player_id' =>  $hostPlayer["Player"]["id"], 'game_id'=> $gameId));

			$message =  "La partie ".$gameName." a été créée !";
			echo json_encode(array('message'=> $message));
		}
	}
	
/**
 * gameFindAll method
 * @return void
 */
	public function gameFindAll() {
		$this->autoRender = false;
		if ($this->request->is('ajax'))
		{
			$options = array('conditions' => array('Game.gameType_id' => 2, 'Game.isPending' => 1));
			$games = $this->Game->find('all', $options);

			echo json_encode($games);
		}
	}
}