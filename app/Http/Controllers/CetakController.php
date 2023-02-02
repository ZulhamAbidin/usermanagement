<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\dataDataTable;

class CetakController extends Controller
{
    public function index(dataDataTable $dataTable)
    {
        return $dataTable->render('/cetak/index');
    }
}
