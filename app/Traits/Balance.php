<?php

namespace App\Traits;

trait Balance {

    public function updateBalance($container) {
        $balance = 0;
        foreach($container->spendings as $spending)
            $balance += $spending->amount;
        return $balance;
        
    }

}