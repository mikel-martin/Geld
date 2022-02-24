<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Container;
use Illuminate\Support\Facades\Auth;

class ContainerController extends Controller {
    
    function store(Request $request) {

        $request->validate([
            "name" => "required|max:255"
        ]);

        $container = new Container();
        $container->name = $request->name;
        $container->user_id = Auth::user()->id;
        $container->save();

        return redirect("/geld");

    }

    function delete($id) {

        $spending = Container::findOrFail($id);
        $spending->delete();

        return redirect("/geld");
    
    }

}
