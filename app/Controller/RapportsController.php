<?php
App::uses('AppController', 'Controller');
/**
 * Rapports Controller
 *
 * @property Rapport $Rapport
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class RapportsController extends AppController {

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
		$this->Rapport->recursive = 0;
		$this->set('rapports', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Rapport->exists($id)) {
			throw new NotFoundException(__('Invalid rapport'));
		}
		$options = array('conditions' => array('Rapport.' . $this->Rapport->primaryKey => $id));
		$this->set('rapport', $this->Rapport->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Rapport->create();
			if ($this->Rapport->save($this->request->data)) {
				$this->Session->setFlash(__('The rapport has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rapport could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$avenants = $this->Rapport->Avenants->find('list');
		$clients = $this->Rapport->Clients->find('list');
		$projects = $this->Rapport->Projects->find('list');
		$this->set(compact('avenants', 'clients', 'projects'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Rapport->id = $id;
		if (!$this->Rapport->exists($id)) {
			throw new NotFoundException(__('Invalid rapport'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Rapport->save($this->request->data)) {
				$this->Session->setFlash(__('The rapport has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rapport could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Rapport.' . $this->Rapport->primaryKey => $id));
			$this->request->data = $this->Rapport->find('first', $options);
		}
		$avenants = $this->Rapport->Avenants->find('list');
		$clients = $this->Rapport->Clients->find('list');
		$projects = $this->Rapport->Projects->find('list');
		$this->set(compact('avenants', 'clients', 'projects'));
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
		$this->Rapport->id = $id;
		if (!$this->Rapport->exists()) {
			throw new NotFoundException(__('Invalid rapport'));
		}
		if ($this->Rapport->delete()) {
			$this->Session->setFlash(__('Rapport deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Rapport was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
