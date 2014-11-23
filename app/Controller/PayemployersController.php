<?php
App::uses('AppController', 'Controller');
/**
 * Payemployers Controller
 *
 * @property Payemployer $Payemployer
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PayemployersController extends AppController {

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
		$this->Payemployer->recursive = 0;
		$this->set('payemployers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Payemployer->exists($id)) {
			throw new NotFoundException(__('Invalid payemployer'));
		}
		$options = array('conditions' => array('Payemployer.' . $this->Payemployer->primaryKey => $id));
		$this->set('payemployer', $this->Payemployer->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Payemployer->create();
			if ($this->Payemployer->save($this->request->data)) {
				$this->Session->setFlash(__('The payemployer has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The payemployer could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$titles = $this->Payemployer->Title->find('list');
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
        $this->Payemployer->id = $id;
		if (!$this->Payemployer->exists($id)) {
			throw new NotFoundException(__('Invalid payemployer'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Payemployer->save($this->request->data)) {
				$this->Session->setFlash(__('The payemployer has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The payemployer could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Payemployer.' . $this->Payemployer->primaryKey => $id));
			$this->request->data = $this->Payemployer->find('first', $options);
		}
		$titles = $this->Payemployer->Title->find('list');
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
		$this->Payemployer->id = $id;
		if (!$this->Payemployer->exists()) {
			throw new NotFoundException(__('Invalid payemployer'));
		}
		if ($this->Payemployer->delete()) {
			$this->Session->setFlash(__('Payemployer deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Payemployer was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
