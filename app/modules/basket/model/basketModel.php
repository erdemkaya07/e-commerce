<?php

class basketModel extends Model
{
    public function addProductModel($id)
    {

        $this->db->Where("urun_id", $id);
        $product = $this->db->getOne("sepet");

        if (isset($product["urun_id"]))
        {
            $update = array();
            $update['urun_adet'] = $product['urun_adet'] + 1;

            $this->db->where("urun_id", $id);
            $this->db->update("sepet", $update);
        }else {
            $insert = array();
            $insert["urun_id"] = $id;
            $insert["kullanici_id"] = $_SESSION['kullanici']['kullanici_id'];
            $insert['urun_id'] = 1;

            $this->db->insert("sepet", $insert);
        }
    }

    public function getTotalProduct()
    {
        $totalProduct = 0;

        $this->db->where("kullanici_id", $_SESSION['kullanici']['kullanici_id']);
        $products = $this->db->get("sepet");

        foreach ($products as $product){
            $totalProduct += $product['urun_adet'];
        }
        return $totalProduct;
    }

    public function getTotalRateModel()
    {
        $totalRate = 0;

        $this->db->where("kullanici_id", $_SESSION['kullanici']['kullanici_id']);
        $this->db->join("urun", "urun.urun_id = sepet.urun_id");
        $products = $this->db->get("sepet");

        foreach ($products as $product){
            $totalRate += $product['urun_adet'] * $product['urun_fiyat'];
        }
        return $totalRate;
    }

    public function getBasketProducts()
    {
        $this->db->where("kullanici_id", $_SESSION['kullanici']['kullanici_id']);
        $this->db->join("urun", "urun.urun.id = sepet.urun_id");
        return $this->db->get("sepet");
    }

    public function saveNewAddress()
    {
        $insert = array();
        $insert['adres']            = $_POST['adres'];
        $insert['adres_il']         = $_POST['adres_il'];
        $insert['adres_ilce']       = $_POST['adres_ilce'];
        $insert['adres_postakodu']  = $_POST['adres_postakodu'];
        $insert['adres_telefon']    = $_POST['adres_telefon'];
        $insert['kullanic_id']      = $_SESSION['kullanici']['kullanici_id'];

        $this->db->insert("kullanici_adres", $insert);
    }

    public function getAddress()
    {
        $this->db->where("kullanici_id", $_SESSION['kullanici']['kullanici_id']);
        return $this->db->get("kullanici_adres");
    }

    public function saveNewOrder()
    {
        $insert = array();
        $insert['siparis_kullanici_id'] = $_SESSION['kullanici']['kullanici_id'];
        $insert['siparis_toplam']       = $_POST[''];
        $insert['teslimat_id']          = $_POST['teslimat_id'];
        $insert['fatura_id']            = $_POST['fatura_id'];
        $insert['siparis_tarih	']      = date("Y-m-d H:i:s");

        $this->db->insert('siparis', $insert);
    }


}