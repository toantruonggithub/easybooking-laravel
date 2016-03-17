<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Store;

class StoreController extends Controller
{
    public function index() {
        $stores = Store::all();
        return response()->json(array('stores'=>$stores, 'response_code'=>200));
    }
}
