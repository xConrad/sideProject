<?php
App::uses('AppController', 'Controller');
/**
 * Employes Controller
 *
 * @property Employe $Employe
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class EmployesController extends AppController {

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
		$this->Employe->recursive = 0;
		$this->set('employes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Employe->exists($id)) {
			throw new NotFoundException(__('Invalid employe'));
		}
		$options = array('conditions' => array('Employe.' . $this->Employe->primaryKey => $id));
		$this->set('employe', $this->Employe->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Employe->create();
			if ($this->Employe->save($this->request->data)) {
				$this->Session->setFlash(__('The employe has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employe could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$titles = $this->Employe->Titles->find('list');
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
        $this->Employe->id = $id;
		if (!$this->Employe->exists($id)) {
			throw new NotFoundException(__('Invalid employe'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Employe->save($this->request->data)) {
				$this->Session->setFlash(__('The employe has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employe could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Employe.' . $this->Employe->primaryKey => $id));
			$this->request->data = $this->Employe->find('first', $options);
		}
		$titles = $this->Employe->Titles->find('list');
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
		$this->Employe->id = $id;
		if (!$this->Employe->exists()) {
			throw new NotFoundException(__('Invalid employe'));
		}
		if ($this->Employe->delete()) {
			$this->Session->setFlash(__('Employe deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Employe was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
