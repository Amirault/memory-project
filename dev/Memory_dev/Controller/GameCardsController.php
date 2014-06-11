<?php
App::uses('AppController', 'Controller');
/**
 * GameCards Controller
 *
 * @property GameCard $GameCard
 * @property PaginatorComponent $Paginator
 */
class GameCardsController extends AppController {

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
		$this->GameCard->recursive = 0;
		$this->set('gameCards', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->GameCard->exists($id)) {
			throw new NotFoundException(__('Invalid game card'));
		}
		$options = array('conditions' => array('GameCard.' . $this->GameCard->primaryKey => $id));
		$this->set('gameCard', $this->GameCard->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GameCard->create();
			if ($this->GameCard->save($this->request->data)) {
				$this->Session->setFlash(__('The game card has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The game card could not be saved. Please, try again.'));
			}
		}
		$games = $this->GameCard->Game->find('list');
		$cards = $this->GameCard->Card->find('list');
		$this->set(compact('games', 'cards'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->GameCard->exists($id)) {
			throw new NotFoundException(__('Invalid game card'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->GameCard->save($this->request->data)) {
				$this->Session->setFlash(__('The game card has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The game card could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('GameCard.' . $this->GameCard->primaryKey => $id));
			$this->request->data = $this->GameCard->find('first', $options);
		}
		$games = $this->GameCard->Game->find('list');
		$cards = $this->GameCard->Card->find('list');
		$this->set(compact('games', 'cards'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->GameCard->id = $id;
		if (!$this->GameCard->exists()) {
			throw new NotFoundException(__('Invalid game card'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->GameCard->delete()) {
			$this->Session->setFlash(__('The game card has been deleted.'));
		} else {
			$this->Session->setFlash(__('The game card could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
