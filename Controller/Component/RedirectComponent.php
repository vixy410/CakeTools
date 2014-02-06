<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('Component','Controller');

//use Cake\Controller\Component;

/**
 * CakePHP RedirectComponent
 * @author Vikas Choudhary
 */
class RedirectComponent extends Component {
    var $controller = null;
    public $components = array('Session');
    public function initialize(Controller $controller) {
        parent::initialize($controller);
        $this->controller = $controller;
    }
    
    function flashSuccess( $msg, $url = NULL ){
        $this->Session->setFlash($msg,'alert',array(
                                                 'plugin' => 'BoostCake',
                                                  'class' => 'alert-success'
                                ));
      if( !empty($url) ){
      $this->controller->redirect($url);
      }
      
    }
    function flashWarning( $msg, $url = NULL ){
         $this->Session->setFlash($msg,'alert',array(
                                                 'plugin' => 'BoostCake',
                                                  'class' => 'alert-danger'
                                ));
      if( !empty($url) ){
      $this->controller->redirect($url);
      }
    }
   

}
