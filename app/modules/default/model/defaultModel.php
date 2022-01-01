<?php 

class defaultModel extends model {

	public function registerSaveModel()
    {
        if(strlen($_POST['kullanici_sifre']) < 6 || strlen($_POST['kullanici_sifre_tekrar']) <6)
        {
            return "Minimum 6 chahcter!";
        }

        if($_POST['kullanici_sifre'] != $_POST['kullanici_sifre_tekrar'])
        {
            return "Not same password!";
        }

        $this->db->where("kullanici_mail", $_POST['kullanici_mail']);
        $userDb = $this->db->getOne("kullanici");

        if(@count($userDb)>0)
        {
            return "Try another e-mail";
        }

        $insert = array();
        $insert['kullanici_adi']            = $_POST['kullanici_adi'];
        $insert['kullanici_adi_soyadi']     = $_POST['kullanici_adi_soyadi'];
        $insert['kullanici_mail']           = $_POST['kullanici_mail'];
        $insert['kullanici_sifre']          = md5($_POST['kullanici_sifre']);
        $insert['kullanici_kayit_tarihi']   = date("Y-m-d H:i:s");

        if ($this->db->insert("kullanici", $insert)){
            return "Success!";
        }
    }

    public function getLoginModel()
    {
        $this->db->where("(kullanici_mail = ? OR kullanici_adi = ?)", array($_POST['kullanici'], $_POST['kullanici']));
        $this->db->where("kullanici_sifre", md5($_POST['kullanici_sifre']));
        $userDb = $this->db->getOne("kullanici");

        if (isset($userDb['kullanici_id'])) {
            $_SESSION['kullanici'] = $userDb;
            return "OK";
        }
        return "Not found user";
    }

    public function getProductModel()
    {
        return $this->db-get("urun");
    }



}

 ?>