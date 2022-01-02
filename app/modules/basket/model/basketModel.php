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

    public function getBasketProducts()
    {
        $this->db->where("kullanici_id", $_SESSION['kullanici']['kullanici_id']);
        $this->db->join("urun", "urun.urun.id = sepet.urun_id");
        return $this->db->get("sepet");
    }




}