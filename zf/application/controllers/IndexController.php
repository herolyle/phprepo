<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
        $this->registry = Zend_Registry::getInstance();
        $this->view = $this->registry['view'] ;
        $this->view->baseUrl = $this->_request->getBaseUrl();
    }

    public function indexAction()
    {
        // action body
        $this->view->bodyTitle = '<h1>hello</h1>';
        echo $this->view->render('index.phtml');//显示模版  
    }
}

