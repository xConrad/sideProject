<?php
App::uses('AppController', 'Controller');
/**
 * Salairies Controller
 *
 * @property Salairy $Salairy
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SalairiesController extends AppController {

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
		$this->Salairy->recursive = 0;
		$this->set('salairies', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Salairy->exists($id)) {
			throw new NotFoundException(__('Invalid salairy'));
		}
		$options = array('conditions' => array('Salairy.' . $this->Salairy->primaryKey => $id));
		$this->set('salairy', $this->Salairy->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Salairy->create();
			if ($this->Salairy->save($this->request->data)) {
				$this->Session->setFlash(__('The salairy has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The salairy could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$titles = $this->Salairy->Title->find('list');
		$this->set(compact('titles'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Salairy->id = $id;
		if (!$this->Salairy->exists($id)) {
			throw new NotFoundException(__('Invalid salairy'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Salairy->save($this->request->data)) {
				$this->Session->setFlash(__('The salairy has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The salairy could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Salairy.' . $this->Salairy->primaryKey => $id));
			$this->request->data = $this->Salairy->find('first', $options);
		}
		$titles = $this->Salairy->Title->find('list');
		$this->set(compact('titles'));
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
		$this->Salairy->id = $id;
		if (!$this->Salairy->exists()) {
			throw new NotFoundException(__('Invalid salairy'));
		}
		if ($this->Salairy->delete()) {
			$this->Session->setFlash(__('Salairy deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Salairy was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
