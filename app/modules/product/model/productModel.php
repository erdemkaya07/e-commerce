<?php

class productModel extends Model
{
    public function getProductDetailModel($id)
    {
        $this->db->where("urun_id", $id);
        return $this->db->getOne("urun");
    }
}