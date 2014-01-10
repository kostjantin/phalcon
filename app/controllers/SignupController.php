<?php

class SignupController extends ControllerBase
{

    public function indexAction()
    {
		$this->view->invite = rand(0, 100);
    }

	public function regAction()
	{
		$user = new Users();

		$success = $user->save($this->request->getPost(), array('email', 'first_name', 'last_name'));


		if ($success) {
			$this->view->res = 'Ok';
		} else {
			$this->view->res = 'Error: <br />';
			foreach ($user->getMessages() as $message) {
				$this->view->res .= $message->getMessage() . '<br />';
			}

		}

		$this->view->disable();
	}
}

