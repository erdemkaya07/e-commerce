<?php

/**
 * Created by PhpStorm.
 * User: studyo
 * Date: 7.10.2018
 * Time: 18:56
 */
class basketModel extends Model
{
    public function AddProductModel($id)
    {


        $this->db->where("urun_id", $id);
        $this->db->where("renk_id", $_POST['urun_renk']);
        $this->db->where("beden_id", $_POST['urun_beden']);
        $product = $this->db->getOne("sepet");

        if(isset($product['urun_id']))
        {
            $update = array();
            $update['urun_adet'] = $product['urun_adet'] + $_POST['urun_adet'];

            $this->db->where("urun_id", $id);
            $this->db->update("sepet", $update);

        }else{
            $this->db->where("urun_id", $id);
            $product_info = $this->db->getOne("urun");

            $insert = array();
            $insert["kullanici_id"]  = $_SESSION['kullanici']['kullanici_id'];
            $insert["urun_id"]       = $id;
            $insert['renk_id']       = $_POST['urun_renk'];
            $insert['beden_id']      = $_POST['urun_beden'];
            $insert['urun_adet']     = $_POST['urun_adet'];
            $insert['urun_fiyat']    = $product_info['urun_fiyat'];

            $this->db->insert("sepet", $insert);


        }

    }

    public function GetTotalProductModel()
    {

        $totalProduct = 0;

        $this->db->where("kullanici_id", $_SESSION['kullanici']['kullanici_id']);
        $products = $this->db->get("sepet");

        foreach($products as $product){
            $totalProduct += $product['urun_adet'];
        }

        return $totalProduct;

    }

    public function GetTotalRateModel()
    {
        $totalRate = 0;

        $this->db->where("kullanici_id", $_SESSION['kullanici']['kullanici_id']);
        $this->db->join("urun", "urun.urun_id = sepet.urun_id");
        $products = $this->db->get("sepet");

        foreach($products as $product){
            $totalRate += $product['urun_adet'] * $product['urun_fiyat'];
        }

        return $totalRate;
    }

    public function GetBasketProductsModel()
    {
        $this->db->where("sepet.kullanici_id", $_SESSION['kullanici']['kullanici_id']);
        $this->db->join("renk", "renk.renk_id = sepet.renk_id");
        $this->db->join("beden", "beden.beden_id = sepet.beden_id");
        $this->db->join("urun", "urun.urun_id = sepet.urun_id");
        return $this->db->get("sepet");

    }

    public function SaveNewAddress()
    {

        $insert = array();
        $insert['adres']                = $_POST['adres'];
        $insert['adres_il']             = $_POST['adres_il'];
        $insert['adres_ilce']           = $_POST['adres_ilce'];
        $insert['adres_postakodu']      = $_POST['adres_postakodu'];
        $insert['adres_telefon']        = $_POST['adres_telefon'];
        $insert['kullanici_id']         = $_SESSION['kullanici']['kullanici_id'];

        $this->db->insert("kullanici_adres", $insert);

    }


    public function GetAddressModel()
    {
        $this->db->where("kullanici_id", $_SESSION['kullanici']['kullanici_id']);
        return $this->db->get("kullanici_adres");
    }

    public function SaveNewOrderModel()
    {

        $insert = array();
        $insert['siparis_kullanici_id']     = $_SESSION['kullanici']['kullanici_id'];
        $insert['siparis_toplam']           = 0;
        $insert['fatura_id']                = $_POST['fatura_id'];
        $insert['teslimat_id']              = $_POST['teslimat_id'];
        $insert['siparis_tarih']            = date("Y-m-d H:i:s");
        $this->db->insert("siparis", $insert);
        $last_id = $this->db->getInsertId();

        $this->db->where("kullanici_id", $_SESSION['kullanici']['kullanici_id']);
        $products = $this->db->get("sepet");

        $totalRate = 0;
        foreach($products as $product){

            $insert1 = array();
            $insert1['siparis_id']      = $last_id;
            $insert1['urun_id']         = $product['urun_id'];
            $insert1['renk_id']         = $product['renk_id'];
            $insert1['beden_id']        = $product['beden_id'];
            $insert1['urun_adet']       = $product['urun_adet'];
            $insert1['urun_fiyat']      = $product['urun_fiyat'];
            $this->db->insert("siparis_detay", $insert1);

            $totalRate += $product['urun_fiyat'] * $product['urun_adet'];

            $this->UpdateStockModel($product['urun_id'], $product['renk_id'], $product['beden_id'], $product['urun_adet']);

        }

        $update = array();
        $update['siparis_toplam'] = $totalRate;

        $this->db->where("siparis_id", $last_id);
        $this->db->update("siparis", $update);

        $this->db->where("kullanici_id", $_SESSION['kullanici']['kullanici_id']);
        if($this->db->delete("sepet")){
            Controller::redirect("/basket/preview/$last_id");
        }

    }

    public function GetOrderModel($id)
    {
        $this->db->where("siparis_id", $id);
        $this->db->join("kullanici", "kullanici.kullanici_id = siparis.siparis_kullanici_id");
        return $this->db->getOne("siparis");
    }

    public function GetOneAddressModel($id)
    {
        $this->db->where("adres_id", $id);
        return $this->db->getOne("kullanici_adres");
    }

    public function GetOrderDetailModel($id)
    {
        $this->db->where("siparis_id", $id);
        $this->db->join("beden", "beden.beden_id = siparis_detay.beden_id");
        $this->db->join("renk", "renk.renk_id = siparis_detay.renk_id");
        $this->db->join("urun", "urun.urun_id = siparis_detay.urun_id");
        return $this->db->get("siparis_detay");
    }

    public function UpdateStockModel($uid, $rid, $bid, $adet){

        $this->db->where("urun_id", $uid);
        $this->db->where("renk_id", $rid);
        $this->db->where("beden_id", $bid);
        $stok = $this->db->getOne("urun_stok");

        $update = array();
        $update['stok_adedi'] = $stok['stok_adedi'] - $adet;

        $this->db->where("urun_id", $uid);
        $this->db->where("renk_id", $rid);
        $this->db->where("beden_id", $bid);
        $this->db->update("urun_stok", $update);

    }

}