<?php

class panelController extends Controller {

    public function indexAction()
    {
        $data = array();

        $this->RenderLayout("panel", "panel", "index", $data);
    }

    public function loginAction()
    {
        $data = array();

        if(isset($_POST['admin_adi']) && isset($_POST['admin_sifre']))
        {
            $panelModel = new panelModel();
            $result = $panelModel->getLoginModel();

            if($result == "OK"){
                Controller::redirect("/panel/index");
            }
            else{
                $data['msg'] = $result;
            }
        }

        $this->RenderLayout("panel", "panel", "login", $data);
    }

    public function logoutAction()
    {
        session_destroy();

        Controller::redirect("/panel/login");

    }

    public function ColorAction()
    {
        $panelModel = new panelModel();

        $data = array();
        $data['renk'] = $panelModel->getColorModel();

        $this->RenderLayout("panel", "panel", "product/color", $data);
    }

    public function AddColorAction()
    {
        $panelModel = new panelModel();
        $panelModel->addColorModel();

        Controller::redirect("/panel/color");
    }

    public function EditColorAction($id)
    {
        $panelModel = new panelModel();

        $data = array();
        $data['renk'] = $panelModel->getColorOneModel($id);

        $this->RenderLayout("panel", "panel", "product/editcolor", $data);
    }

    public function UpdateColorAction($id)
    {
        $panelModel = new panelModel();
        $panelModel->updateColorModel($id);

        Controller::redirect("/panel/color");
    }

    public function DeleteColorAction($id)
    {
        $panelModel = new panelModel();
        $panelModel->deleteColorModel($id);

        Controller::redirect("/panel/color");
    }

    public function SizeAction()
    {
        $panelModel = new panelModel();

        $data = array();
        $data['beden'] = $panelModel->getSizeModel();

        $this->RenderLayout("panel", "panel", "product/size", $data);
    }

    public function AddSizeAction()
    {
        $panelModel = new panelModel();
        $panelModel->addSizeModel();

        Controller::redirect("/panel/size");
    }

    public function EditSizeAction($id)
    {
        $panelModel = new panelModel();

        $data = array();
        $data['beden'] = $panelModel->getSizeOneModel($id);

        $this->RenderLayout("panel", "panel", "product/editsize", $data);
    }

    public function UpdateSizeAction($id)
    {
        $panelModel = new panelModel();
        $panelModel->updateSizeModel($id);

        Controller::redirect("/panel/size");
    }

    public function DeleteSizeAction($id)
    {
        $panelModel = new panelModel();
        $panelModel->deleteSizeModel($id);

        Controller::redirect("/panel/size");
    }

    public function CategoryAction()
    {
        $data = array();

        $panelModel = new panelModel();
        $data['kategori'] = $panelModel->getCategoryModel();

        $this->RenderLayout("panel", "panel", "product/category", $data);

    }

    public function AddCategoryAction()
    {
        $panelModel = new panelModel();
        $panelModel->addCategoryModel();

        Controller::redirect("/panel/category");
    }

    public function EditCategoryAction($id)
    {
        $data = array();

        $panelModel = new panelModel();
        $data['kategori'] = $panelModel->getCategoryOneModel($id);

        $this->RenderLayout("panel", "panel", "product/editcategory", $data);
    }

    public function UpdateCategoryAction($id)
    {
        $panelModel = new panelModel();
        $panelModel->updateCategoryModel($id);

        Controller::redirect("/panel/category");
    }

    public function DeleteCategoryAction($id)
    {
        $panelModel = new panelModel();
        $panelModel->deleteCategoryModel($id);

        Controller::redirect("/panel/category");
    }

    public function ProductAction()
    {
        $data = array();

        $panelModel = new panelModel();
        $data['kategori'] = $panelModel->getCategoryModel();
        $data['renk'] = $panelModel->getColorModel();
        $data['beden'] = $panelModel->getSizeModel();
        $data['urun'] = $panelModel->getProductModel();

        $this->RenderLayout("panel", "panel", "product/product", $data);
    }

    public function AddProductAction()
    {
        $panelModel = new panelModel();
        $panelModel->addProductModel();

        Controller::redirect("/panel/product");
    }

    public function EditProductAction($id)
    {
        $data = array();

        $panelModel = new panelModel();
        $data['kategori'] = $panelModel->getCategoryModel();
        $data['renk'] = $panelModel->getColorModel();
        $data['beden'] = $panelModel->getSizeModel();
        $data['urun'] = $panelModel->getProductOneModel($id);
        $data['resim'] = $panelModel->getProductImageModel($id);
        $data['ozellik'] = $panelModel->getFeaturesModel($id);

        $this->RenderLayout("panel", "panel", "product/editproduct", $data);
    }

    public function UpdateProductAction($id)
    {
        $panelModel = new panelModel();
        $panelModel->updateProductModel($id);

        Controller::redirect("/panel/editproduct/".$id);
    }

    public function AddFeaturesAction($id)
    {
        $panelModel = new panelModel();
        $panelModel->addFeaturesModel($id);

        Controller::redirect("/panel/editproduct/".$id);
    }

    public function AddProductImageAction($id)
    {
        $panelModel = new panelModel();
        $panelModel->addProductImageModel($id);

        Controller::redirect("/panel/editproduct/".$id);
    }

    public function DeleteProductAction($id)
    {
        $panelModel = new panelModel();
        $panelModel->deleteProductModel($id);

        Controller::redirect("/panel/product");
    }

}

?>