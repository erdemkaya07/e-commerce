<?php

class panelModel extends Model {

    public function getLoginModel()
    {

        $this->db->where("admin_kullanici_adi", $_POST['admin_adi']);
        $this->db->where("admin_sifre", $_POST['admin_sifre']);
        $kullanici = $this->db->getOne("admin");

        if(isset($kullanici['admin_id'])){

            $_SESSION['admin'] = $kullanici;

            return "OK";

        }

        return "Kullanıcı Bulunamadı!";

    }

    public function getColorModel()
    {
        return $this->db->get("renk");
    }

    public function getColorOneModel($id)
    {
        $this->db->where("renk_id", $id);
        return $this->db->getOne("renk");
    }

    public function addColorModel()
    {
        $insert = array();
        $insert['renk_adi'] = $_POST['renk_adi'];
        $insert['renk_kodu'] = $_POST['renk_kodu'];

        if($this->db->insert("renk", $insert)){
            return "Renk Eklendi";
        }
    }

    public function updateColorModel($id)
    {
        $update = array();
        $update['renk_adi'] = $_POST['renk_adi'];
        $update['renk_kodu'] = $_POST['renk_kodu'];

        $this->db->where("renk_id", $id);
        $this->db->update("renk", $update);
    }

    public function deleteColorModel($id)
    {
        $this->db->where("renk_id", $id);
        return $this->db->delete("renk");
    }

    public function getSizeModel()
    {
        return $this->db->get("beden");
    }

    public function getSizeOneModel($id)
    {
        $this->db->where("beden_id", $id);
        return $this->db->getOne("beden");
    }

    public function addSizeModel()
    {
        $insert = array();
        $insert['beden_adi'] = $_POST['beden_adi'];

        $this->db->insert("beden", $insert);
    }

    public function updateSizeModel($id)
    {
        $update = array();
        $update['beden_adi'] = $_POST['beden_adi'];

        $this->db->where("beden_id", $id);
        $this->db->update("beden", $update);
    }

    public function deleteSizeModel($id)
    {
        $this->db->where("beden_id", $id);
        return $this->db->delete("beden");
    }

    public function getCategoryModel()
    {
        return $this->db->get("kategori");
    }

    public function getCategoryOneModel($id)
    {
        $this->db->where("kategori_id", $id);
        return $this->db->getOne("kategori");
    }

    public function addCategoryModel()
    {
        $insert = array();
        $insert['kategori_adi'] = $_POST['kategori_adi'];

        $this->db->insert("kategori", $insert);
    }

    public function updateCategoryModel($id)
    {
        $update = array();
        $update['kategori_adi'] = $_POST['kategori_adi'];

        $this->db->where("kategori_id", $id);
        $this->db->update("kategori", $update);
    }

    public function deleteCategoryModel($id)
    {
        $this->db->where("kategori_id", $id);
        return $this->db->delete("kategori");
    }

    public function getProductModel()
    {
        return $this->db->get("urun");
    }

    public function addProductModel()
    {
        $insert = array();
        $insert['urun_adi']      = $_POST['urun_adi'];
        $insert['urun_kategori'] = $_POST['urun_kategori'];
        $insert['urun_fiyat']    = $_POST['urun_fiyat'];
        $insert['urun_aciklama'] = $_POST['urun_aciklama'];

        $this->db->insert("urun", $insert);

        $lastID = $this->db->getInsertId();

        foreach($_FILES['urun_resim']['tmp_name'] as $key => $val){

            $ext = pathinfo($_FILES['urun_resim']['name'][$key], PATHINFO_EXTENSION);
            $resim = md5(time().$key).".".$ext;

            $insert = array();
            $insert['urun_id']   = $lastID;
            $insert['resim_adi'] = $resim;

            $this->db->insert("urun_resim", $insert);

            move_uploaded_file($_FILES['urun_resim']['tmp_name'][$key], "/Applications/XAMPP/xamppfiles/htdocs/eticaret/web/images/product/".$resim);

        }

        $insert = array();
        $insert['urun_id'] = $lastID;
        $insert['renk_id'] = $_POST['urun_renk'];
        $this->db->insert("urun_renk", $insert);

        $insert = array();
        $insert['urun_id'] = $lastID;
        $insert['beden_id'] = $_POST['urun_beden'];
        $this->db->insert("urun_beden", $insert);

        $insert = array();
        $insert['urun_id'] = $lastID;
        $insert['renk_id'] = $_POST['urun_renk'];
        $insert['beden_id'] = $_POST['urun_beden'];
        $insert['stok_adedi'] = $_POST['urun_stok'];
        $this->db->insert("urun_stok", $insert);

    }

    public function updateProductModel($id)
    {
        $update = array();
        $update['urun_adi']      = $_POST['urun_adi'];
        $update['urun_kategori'] = $_POST['urun_kategori'];
        $update['urun_fiyat']    = $_POST['urun_fiyat'];
        $update['urun_aciklama'] = $_POST['urun_aciklama'];

        $this->db->where("urun_id", $id);
        $this->db->update("urun", $update);
    }


    public function getProductOneModel($id)
    {
        $this->db->where("urun_id", $id);
        return $this->db->getOne("urun");
    }

    public function getProductImageModel($id)
    {
        $this->db->where("urun_id", $id);
        return $this->db->get("urun_resim");
    }

    public function deleteProductModel($id)
    {
        $this->db->where("urun_id", $id);
        return $this->db->delete("urun");
    }

    public function addFeaturesModel($id){
        $insert = array();
        $insert['urun_id'] = $id;
        $insert['renk_id'] = $_POST['urun_renk'];
        $this->db->insert("urun_renk", $insert);

        $insert = array();
        $insert['urun_id'] = $id;
        $insert['beden_id'] = $_POST['urun_beden'];
        $this->db->insert("urun_beden", $insert);

        $insert = array();
        $insert['urun_id'] = $id;
        $insert['renk_id'] = $_POST['urun_renk'];
        $insert['beden_id'] = $_POST['urun_beden'];
        $insert['stok_adedi'] = $_POST['urun_stok'];
        $this->db->insert("urun_stok", $insert);
    }

    public function getFeaturesModel($id){

        $this->db->where("urun_id", $id);
        $this->db->join("renk","renk.renk_id = urun_stok.renk_id");
        $this->db->join("beden","beden.beden_id = urun_stok.beden_id");
        return $this->db->get("urun_stok");

    }

    public function addProductImageModel($id){

        foreach($_FILES['urun_resim']['tmp_name'] as $key => $val){

            $ext = pathinfo($_FILES['urun_resim']['name'][$key], PATHINFO_EXTENSION);
            $resim = md5(time().$key).".".$ext;

            $insert = array();
            $insert['urun_id']   = $id;
            $insert['resim_adi'] = $resim;

            $this->db->insert("urun_resim", $insert);

            move_uploaded_file($_FILES['urun_resim']['tmp_name'][$key], "/Applications/XAMPP/xamppfiles/htdocs/eticaret/web/images/product/".$resim);

        }
    }

}


?>