<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spending extends Model {

    use HasFactory;

    protected $table = "spendings";

    protected $fillable = ["subject", "amount"];

    protected function container() {
        return $this->belongsTo(Container::class);
    }

}
