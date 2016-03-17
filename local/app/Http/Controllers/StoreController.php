<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StoreController extends Controller
{
    public function index() {
        $stores = Store::where('user_id', '=', Auth::user()->id)->get();
    }
}
