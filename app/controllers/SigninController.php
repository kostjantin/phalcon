<?php

class SigninController extends ControllerBase
{
	private function _registerSession($user)
	{
		$this->session->set('auth', array(
			'id' => $user->id,
			'name' => $user->first_name . ' ' . $user->last_name
		));
	}

	public function indexAction()
	{

	}

	public function loginAction()
	{
		$login = $this->request->getPost('email', 'email');
		$pass = $this->request->getPost('password');

//		$pass = sha1($pass);

		$user = Users::findFirst(array(
			'email = :email: AND password = :password:',
			'bind' => array('email' => $login, 'password' => $pass)
		));

		if ($user) {
			$this->_registerSession($user);

			$this->flash->success('Welcome to hell :). ' .$user->first_name . ' ' . $user->last_name);

			return $this->dispatcher->forward(array(
				'controller' => 'backend',
				'action' => 'index'
			));
		}

		return $this->dispatcher->forward(array(
			'controller' => 'signin',
			'action' => 'index'
		));
	}

}

