<?php

    class defaultController extends Controller implements FrontController {

        public function indexAction($param = null)
        {
            $data = array();
            $defaultModel = new defaultModel();
            $data['products'] = $defaultModel->getProductModel();

            $this->renderLayout("main", "default", "index", $data);

        }

        public function detailAction()
        {
            $data = array();
            $this->RenderLayout("main", "default", "detail", $data);
        }

        public function loginAction()
        {
            $data = array();
            if(isset($_POST['kullanici']) && isset($_POST['kullanici_sifre'])) {
                $defaultModel = new defaultModel();
                $result = $defaultModel->getLoginModel();

                if($result == "OK"){
                    Controller::redirect("/default/index");
                } else {
                    $data['msg'] = $result;
                }
            }
            $this->RenderLayout("main", "default", "login", $data);
        }

        public function logOutAction()
        {
            session_destroy();
            Controller::redirect("/default/index");
        }

        public function registerAction()
        {
            $data = array();
            $this->RenderLayout("main", "default", "register", $data);
        }

        public function registerSaveAction()
        {
            $data = array();
            $defaultModel = new defaultModel();
            $data['msg'] = $defaultModel->registerSaveModel();
            $this->RenderLayout("main", "default", "register", $data);
        }

    }

?>