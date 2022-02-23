<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Container;
use Illuminate\Support\Facades\Auth;

class GeldController extends Controller {
    
    function index() {
        $containers = Container::where("id", Auth::user()->id)->get();
        return view("geld", ["containers" => $containers]);
    }

}
