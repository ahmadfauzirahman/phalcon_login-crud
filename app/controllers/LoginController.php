<?php

class LoginController extends \Phalcon\Mvc\Controller
{


    public function prosesAction()
    {
    	$this->view->disable();
    	if ($this->security->checkToken()) {
    		$post = $this->request->getPost();

    		$username = $post['username'];
    		$password = $post['password'];

    		$user = User::findFirst(["conditions" => "username = '$username'"]);

    		if ($password==$user->password) {
    			$this->session->set("user", "$user->name");

    			return $this->response->redirect('home');

    		} else {
    			return 'password salah';
    		}

    	} else {
    		return 'no token';
    	}
    }
    
    public function logoutAction() 
    {
    	$this->view->disable();
    	$this->session->destroy();
    	return $this->response->redirect();
    }

}

