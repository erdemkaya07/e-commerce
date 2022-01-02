<?php

class basketController extends Controller
{
    public function indexAction()
    {
        $data = array();

        $this->RenderLayout("main", "basket", "index", $data);
    }

    public function step1Action()
    {
        $data = array();
        $basketModel = new basketModel();
        $data['products'] = $basketModel->getBasketProducts();
        $data['totalProduct'] = $basketModel->getTotalProduct();

        $this->RenderLayout("main", "basket", "step1", $data);

    }

    public function step2Action()
    {

    }

    public function addProductAction($id)
    {
        $basketModel = new basketModel();
        $basketModel->addProductModel($id);

        Controller::redirect("/product/detail/".$id);
    }

}