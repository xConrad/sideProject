<?php
App::uses('AppController', 'Controller');
/**
 * Titles Controller
 *
 * @property Title $Title
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TitlesController extends AppController {

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
		$this->Title->recursive = 0;
		$this->set('titles', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Title->exists($id)) {
			throw new NotFoundException(__('Invalid title'));
		}
		$options = array('conditions' => array('Title.' . $this->Title->primaryKey => $id));
		$this->set('title', $this->Title->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
	$this->loadModel('Category');
		if ($this->request->is('post')) {
			$this->Title->create();
			if ($this->Title->save($this->request->data)) {
				$this->Session->setFlash(__('The title has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The title could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$categories = $this->Title->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Title->id = $id;
		if (!$this->Title->exists($id)) {
			throw new NotFoundException(__('Invalid title'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Title->save($this->request->data)) {
				$this->Session->setFlash(__('The title has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The title could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Title.' . $this->Title->primaryKey => $id));
			$this->request->data = $this->Title->find('first', $options);
		}
		$categories = $this->Title->Category->find('list');
		$this->set(compact('categories'));
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
		$this->Title->id = $id;
		if (!$this->Title->exists()) {
			throw new NotFoundException(__('Invalid title'));
		}
		if ($this->Title->delete()) {
			$this->Session->setFlash(__('Title deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Title was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
