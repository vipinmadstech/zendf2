<?php

namespace Users\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class UsersController extends AbstractActionController {

    protected $usersTable;

    public function indexAction() {

        return new ViewModel(array(
            'users' => $this->getUsersTable()->fetchAll(),
        ));
    }

    public function addAction() {
        
    }

    public function editAction() {
        
    }

    public function deleteAction() {
        
    }

// module/Users/src/Users/Controller/UsersController.php:

    public function getUsersTable() {

        if (!$this->usersTable) {

            $sm = $this->getServiceLocator();

            $this->usersTable = $sm->get('Users\Model\UsersTable');
        }

        return $this->usersTable;
    }

}

