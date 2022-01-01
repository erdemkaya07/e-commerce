<?php

class basketController extends Controller
{
    public function indexAction()
    {
        $data = array();

        $this->RenderLayout("main", "basket", "index", $data);
    }

}