<?php

/**
 * Created by PhpStorm.
 * User: studyo
 * Date: 7.10.2018
 * Time: 17:45
 */
class productModel extends Model
{

    public function getProductDetailModel($id)
    {
        $this->db->where("urun_id", $id);
        return $this->db->getOne("urun");
    }

    public function getProductColorModel($id)
    {
        $this->db->groupBy("urun_renk.renk_id");
        $this->db->where("urun_renk.urun_id", $id);
        $this->db->join("renk","renk.renk_id = urun_renk.renk_id");
        return $this->db->get("urun_renk");
    }

    public function getProductFeatureModel(){

        $this->db->where("urun_stok.urun_id", $_POST['uid']);
        $this->db->where("urun_stok.renk_id", $_POST['rid']);
        $this->db->join("renk","renk.renk_id = urun_stok.renk_id");
        $this->db->join("beden","beden.beden_id = urun_stok.beden_id");
        return $this->db->get("urun_stok");
    }

    public function getProductFeaturesModel($id){

        $this->db->where("urun_id", $id);
        $this->db->join("renk","renk.renk_id = urun_stok.renk_id");
        $this->db->join("beden","beden.beden_id = urun_stok.beden_id");
        return $this->db->get("urun_stok");
    }

    public function getProductImageModel($id)
    {
        $this->db->where("urun_id", $id);
        return $this->db->get("urun_resim");
    }

}