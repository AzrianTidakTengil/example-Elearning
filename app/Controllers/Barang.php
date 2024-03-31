<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Barang extends BaseController
{
    public function index()
    {
        $model = new BarangModel;
        $data['getBarang'] = $model->getBarang();

        echo view('barang', $data);
    }

    public function test(){
        echo "hallo";
    }
}
