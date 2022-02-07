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

        $data['color'] = $productModel->getProductColorModel($id);
        $data['image'] = $productModel->getProductImageModel($id);
        $data['product'] = $productModel->getProductDetailModel($id);
        $data['features'] = $productModel->getProductFeaturesModel($id);

        $this->renderLayout("main", "product", "detail", $data);

    }

    public function featureAction()
    {
        $data = array();
        $productModel = new productModel();

        $data['feature'] = $productModel->getProductFeatureModel();

        $this->renderView("product", "feature", $data);

    }

}