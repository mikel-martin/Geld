<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Container;

class ContainerController extends Controller {
    
    function store(Request $request) {

        $request->validate([
            "name" => "required|max:255"
        ]);

        $container = new Container();
        $container->name = $request->name;
        $container->save();

        return redirect("/geld");

    }

    function delete($id) {

        $spending = Container::findOrFail($id);
        $spending->delete();

        return redirect("/geld");
    
    }

}
