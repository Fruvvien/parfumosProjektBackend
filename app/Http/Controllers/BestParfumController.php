<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BestProduct;
use Illuminate\Http\Request;

class BestParfumController extends Controller
{
    public function getData(){
        return BestProduct::all();

    }
}
