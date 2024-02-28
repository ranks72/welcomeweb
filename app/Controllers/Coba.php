<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo "Masuk Ke index";
    }

    public function about($nama, $umur = 0)
    {
        echo " nama saya $nama, umur saya $umur";
        # echo " nama saya $this->nama";
    }
}
