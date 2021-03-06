<?php
	class AppController extends Controller {
		var $components = array(
			'Acl',
			'Auth',
			'Session',
			'DebugKit.Toolbar',
			'Access'
		
		);
		
		var $helpers = array(
			'Html',
			'Form',
			'Javascript',
			'Session',
			'Time',
			'Access'
		);

		function beforeFilter() {
        	//Configure AuthComponent

			$this->Auth->authorize = 'actions';
			$this->Auth->allowedActions = array('display');
			#$this->Auth->allowedActions = array('*');
			
/*
        	$this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
			$this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
		    $this->Auth->loginRedirect = array('controller' => 'announcements', 'action' => 'index');
			$this->Auth->loginError = "Sorry, you have wrong access credentials.";
*/
			
			#$this->set('username', $this->Auth->user('username'));



		}
	}
?>
