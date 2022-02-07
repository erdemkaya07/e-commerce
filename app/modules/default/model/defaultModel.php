<?php

class defaultModel extends Model {

    public function registersaveModel()
    {

        if(strlen($_POST['kullanici_sifre']) < 6 || strlen($_POST['kullanici_sifre_tekrar']) < 6)
        {
            return "Şifre uzunluğu 6 karakterden Kısa olamaz";
        }

        if($_POST['kullanici_sifre'] != $_POST['kullanici_sifre_tekrar'])
        {
            return "Şifreler uyuşmuyor...";
        }

        $this->db->where("kullanici_mail", $_POST['kullanici_mail']);
        $kullanici = $this->db->getOne("kullanici");

        if(@count($kullanici)>0)
        {
            return "Bu mail adresiyle daha önce kayıt olunmuş!";
        }

        $insert = array();
        $insert['kullanici_adi']            = $_POST['kullanici_adi'];
        $insert['kullanici_adi_soyadi']     = $_POST['kullanici_adi_soyadi'];
        $insert['kullanici_mail']           = $_POST['kullanici_mail'];
        $insert['kullanici_sifre']          = md5($_POST['kullanici_sifre']);
        $insert['kullanici_kayit_tarihi']   = date("Y-m-d H:i:s");

        if($this->db->insert("kullanici", $insert)){
            return "Kayıt Başarılı";
        }

    }

    public function getLoginModel()
    {

        $this->db->where("(kullanici_mail = ? OR kullanici_adi = ?)", array($_POST['kullanici'], $_POST['kullanici']));
        $this->db->where("kullanici_sifre", md5($_POST['kullanici_sifre']));
        $kullanici = $this->db->getOne("kullanici");

        if(isset($kullanici['kullanici_id'])){

            $_SESSION['kullanici'] = $kullanici;

            return "OK";

        }

        return "Kullanıcı Bulunamadı!";

    }

    public function getProductModel()
    {
        $this->db->groupBy("urun.urun_id");
        $this->db->join("urun_resim", "urun_resim.urun_id = urun.urun_id");
        return $this->db->get("urun");
    }

}


?>