<?php

namespace App\Http\Controllers;

use App\Models\Spending;
use App\Models\Container;
use Illuminate\Http\Request;
use App\Traits\Balance;

class SpendingController extends Controller {
    
    use Balance;

    function store(Request $request) {

        $request->validate([
            "subject" => "required|max:255",
            "amount" => "required|max:100",
            "container_id" => "required|max:10"
        ]);

        $spending = new Spending();
        $spending->subject = $request->subject;
        $spending->amount = $request->amount;
        $spending->container_id = $request->container_id;
        $spending->save();

        $spending->container->balance = $this->updateBalance($spending->container);
        $spending->container->save();

        return redirect("/geld");
    
    }
    
    function delete($id) {

        $spending = Spending::findOrFail($id);
        $container = $spending->container; 
        $spending->delete();
        
        $container->balance = $this->updateBalance($container);
        $container->save();

        return redirect("/geld");
    
    }

}
