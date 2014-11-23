<?php
App::uses('AppController', 'Controller');
/**
 * Usines Controller
 *
 * @property Usine $Usine
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsinesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Usine->recursive = 0;
		$this->set('usines', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Usine->exists($id)) {
			throw new NotFoundException(__('Invalid usine'));
		}
		$options = array('conditions' => array('Usine.' . $this->Usine->primaryKey => $id));
		$this->set('usine', $this->Usine->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Usine->create();
			if ($this->Usine->save($this->request->data)) {
				$this->Session->setFlash(__('The usine has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usine could not be saved. Please, try again.'), 'flash/error');
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
        $this->Usine->id = $id;
		if (!$this->Usine->exists($id)) {
			throw new NotFoundException(__('Invalid usine'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Usine->save($this->request->data)) {
				$this->Session->setFlash(__('The usine has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usine could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Usine.' . $this->Usine->primaryKey => $id));
			$this->request->data = $this->Usine->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Usine->id = $id;
		if (!$this->Usine->exists()) {
			throw new NotFoundException(__('Invalid usine'));
		}
		if ($this->Usine->delete()) {
			$this->Session->setFlash(__('Usine deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Usine was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
