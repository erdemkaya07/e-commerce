<?php 


class userController extends Controller implements FrontController {

public function indexAction()
{
	$data = array();
	$this->renderLayout("main", "user", "index", $data);
}

}



 ?>