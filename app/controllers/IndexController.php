<?php

class IndexController extends ControllerBase
{

	public function initialize() 
	{
		$session = $this->session->has('user');
		if (!empty($session)) {
			return $this->response->redirect('home');
		}
	}


    public function indexAction()
    {

    }

}

