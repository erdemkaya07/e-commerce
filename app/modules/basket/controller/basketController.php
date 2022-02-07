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
        $data['products'] = $basketModel->GetBasketProductsModel();
        $data['totalProduct'] = $basketModel->GetTotalProductModel();
        $data['totalRate'] = $basketModel->GetTotalRateModel();

        $this->RenderLayout("main", "basket", "step1", $data);

    }

    public function step2Action()
    {
        $data = array();
        $basketModel = new basketModel();
        $data['totalProduct'] = $basketModel->GetTotalProductModel();
        $data['totalRate'] = $basketModel->GetTotalRateModel();
        $data['address'] = $basketModel->GetAddressModel();

        $this->RenderLayout("main", "basket", "step2", $data);
    }

    public function step3Action()
    {
        $data = array();
        $basketModel = new basketModel();
        $data['totalProduct'] = $basketModel->GetTotalProductModel();
        $data['totalRate'] = $basketModel->GetTotalRateModel();
        $data['teslimat_id'] = $_POST['teslimat_id'];
        $data['fatura_id'] = $_POST['fatura_id'];

        $this->RenderLayout("main", "basket", "step3", $data);
    }

    public function saveorderAction()
    {

        $basketModel = new basketModel();
        $basketModel->SaveNewOrderModel();

    }

    public function addproductAction($id)
    {
        $basketModel = new basketModel();
        $basketModel->AddProductModel($id);

        Controller::redirect("/product/detail/".$id);

    }

    public function newAddressAction()
    {
        $basketModel = new basketModel();
        $basketModel->SaveNewAddress();

        Controller::redirect("/basket/step2");
    }

    public function previewAction($id)
    {
        $data = array();
        $basketModel = new basketModel();
        $data['siparis'] = $basketModel->GetOrderModel($id);
        $data['detay'] = $basketModel->GetOrderDetailModel($id);
        $data['fatura'] = $basketModel->GetOneAddressModel($data['siparis']['fatura_id']);
        $data['teslimat'] = $basketModel->GetOneAddressModel($data['siparis']['teslimat_id']);

        $this->renderLayout("main", "basket", "preview", $data);
    }

}