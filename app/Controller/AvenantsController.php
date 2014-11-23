<?php
App::uses('AppController', 'Controller');
/**
 * Avenants Controller
 *
 * @property Avenant $Avenant
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class AvenantsController extends AppController {

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
		$this->Avenant->recursive = 0;
		$this->set('avenants', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Avenant->exists($id)) {
			throw new NotFoundException(__('Invalid avenant'));
		}
		$options = array('conditions' => array('Avenant.' . $this->Avenant->primaryKey => $id));
		$this->set('avenant', $this->Avenant->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Avenant->create();
			if ($this->Avenant->save($this->request->data)) {
				$this->Session->setFlash(__('The avenant has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The avenant could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$projects = $this->Avenant->Projects->find('list');
		$statuses = $this->Avenant->Status->find('list');
		$this->set(compact('projects', 'statuses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Avenant->id = $id;
		if (!$this->Avenant->exists($id)) {
			throw new NotFoundException(__('Invalid avenant'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Avenant->save($this->request->data)) {
				$this->Session->setFlash(__('The avenant has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The avenant could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Avenant.' . $this->Avenant->primaryKey => $id));
			$this->request->data = $this->Avenant->find('first', $options);
		}
		$projects = $this->Avenant->Projects->find('list');
		$statuses = $this->Avenant->Status->find('list');
		$this->set(compact('projects', 'statuses'));
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
		$this->Avenant->id = $id;
		if (!$this->Avenant->exists()) {
			throw new NotFoundException(__('Invalid avenant'));
		}
		if ($this->Avenant->delete()) {
			$this->Session->setFlash(__('Avenant deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Avenant was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
