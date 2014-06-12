<?php
App::uses('AppController', 'Controller');
/**
 * Gametypes Controller
 *
 * @property Gametype $Gametype
 * @property PaginatorComponent $Paginator
 */
class GametypesController extends AppController {

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
		$this->Gametype->recursive = 0;
		$this->set('gametypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Gametype->exists($id)) {
			throw new NotFoundException(__('Invalid gametype'));
		}
		$options = array('conditions' => array('Gametype.' . $this->Gametype->primaryKey => $id));
		$this->set('gametype', $this->Gametype->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Gametype->create();
			if ($this->Gametype->save($this->request->data)) {
				$this->Session->setFlash(__('The gametype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The gametype could not be saved. Please, try again.'));
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
		if (!$this->Gametype->exists($id)) {
			throw new NotFoundException(__('Invalid gametype'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Gametype->save($this->request->data)) {
				$this->Session->setFlash(__('The gametype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The gametype could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Gametype.' . $this->Gametype->primaryKey => $id));
			$this->request->data = $this->Gametype->find('first', $options);
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
		$this->Gametype->id = $id;
		if (!$this->Gametype->exists()) {
			throw new NotFoundException(__('Invalid gametype'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Gametype->delete()) {
			$this->Session->setFlash(__('The gametype has been deleted.'));
		} else {
			$this->Session->setFlash(__('The gametype could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
