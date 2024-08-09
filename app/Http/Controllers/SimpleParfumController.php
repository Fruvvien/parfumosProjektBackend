<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SimpleProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SimpleParfumController extends Controller
{

    public function getDataFromSimpleParfum(){

        $simpleProduct = new SimpleProduct();
        $tableName = $simpleProduct->getTable();
        return DB::table($tableName)->get();

    }
}
