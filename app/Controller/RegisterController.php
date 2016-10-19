<?php

class RegisterController extends AppController {

    public $helpers = array('Html','Form');

    function index() {
        $this->set('registers',$this->Register->find('all'));
    }
    
    function view($id = null){
        $this->set('registers', $this->Register->findById($id));
    }
    function add(){
        if($this->request->is('post')){
            if($this->Register->save($this->request->data)){
                $this->Session->setFlash('Your register has been saved.');
                $this->redirect(array('action'=>'index'));
            }
        }
    }
    function edit($id = null){
        if(!$id){
            throw new NotFoundException(__('Invalid Post'));
        }
        $register = $this->Register->findById($id);
        if(!$register){
            throw new NotFoundException(__('Invalid Post'));
        }
        if($this->request->is(array('post','put'))){
            $this->Register->id = $id;
            if($this->Register->save($this->request->data)){
                $this->Session->setFlash(__('Your register has been updated'));
                return $this->redirect(array('action'=>'index'));
            }
            $this->Flash->error(__('Unable to update your register'));
        }
        if(!$this->request->data){
            $this->request->data = $register;
        }
    }
    function delete($id){
        if(!$this->request->is('post')){
            throw new MethodNotAllowedException();
        }
        if($this->Register->delete($id)){
            $this->Session->setFlash("The register with id: {$id}, has been deleted.");
            $this->redirect(array('action'=>'index'));
        }
    }

}
