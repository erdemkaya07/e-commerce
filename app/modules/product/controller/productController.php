<?php

class productController extends Controller
{
    public function indexAction()
    {

    }

    public function detailAction($id)
    {
        $data = array();
        $productModel = new productModel();
        $data['product'] = $productModel->getProductDetailModel($id);

        $this->renderLayout("main", "product", "detail", $data);
    }
}