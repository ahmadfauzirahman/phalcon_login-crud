<?php

class HomeController extends \Phalcon\Mvc\Controller
{


	public function initialize() 
	{	
		$session = $this->session->has('user');
		if (empty($session)) {
			return $this->response->redirect();
		}
	}

    public function indexAction()
    {
        $user = User::find();
        $this->view->data = $user;
    }

    public function tambahAction()
    {
        
    }

    public function tambahprosesAction() 
    {
    	$model = new User();

    	$array = array(
    		'username' => $this->request->getPost('username'),
    		'name' 	   => $this->request->getPost('name'),
    		'password' => $this->request->getPost('password')
    		);
    	$model->assign($array);

    	$model->save();

    	$this->response->redirect('home');
    }

    public function editAction($id)
    {
        $user = User::findFirst($id);
        $this->view->data = $user;
    }

    public function editprosesAction()
    {
        $array = $this->request->getPost();
        // $array = array(
        //     'username' => $this->request->getPost('username'),
        //     'name'     => $this->request->getPost('name'),
        //     'password' => $this->request->getPost('password')
        //     );
        $data = User::findFirst($array['id']);
        $data->assign($array);
        $data->save();
        $this->response->redirect('home');
       
    }

    public function deleteAction($id)
    {
        $data = User::findFirst('id');
        $data->delete();
        $this->response->redirect('home');

    }

}

