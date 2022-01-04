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
        $data['totalProduct'] = $basketModel->getTotalRateModel();

        $this->RenderLayout("main", "basket", "step1", $data);

    }

    public function step2Action()
    {
        $data = array();
        $basketModel = new basketModel();
        $data['totalProduct'] = $basketModel->getTotalProduct();
        $data['totalRate'] = $basketModel->getTotalRateModel();
        $data['address'] = $basketModel->getAddress();

        $this->RenderLayout("main", "basket", "step1", $data);
    }

    public function step3Action()
    {
        $data = array();
        $basketModel = new basketModel();
        $data['totalRate'] = $basketModel->getTotalProduct();
        $data['totalProduct'] = $basketModel->getTotalRateModel();
        $data['teslimat_id'] = $_POST['teslimat_id'];
        $data['fatura_id'] = $_POST['fatura_id'];
        $this->RenderLayout("main", "basket", "step3", $data);
    }

    public function saveOrderAction()
    {
        var_dump($_POST);
    }

    public function addProductAction($id)
    {
        $basketModel = new basketModel();
        $basketModel->addProductModel($id);

        Controller::redirect("/product/detail/".$id);
    }

    public function newAddressAction()
    {
        $basketModel = new basketModel();
        $basketModel->saveNewAddress();

        Controller::redirect("/basket/step2");
    }

}