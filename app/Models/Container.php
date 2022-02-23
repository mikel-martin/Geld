<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Container extends Model {
    
    use HasFactory;

    protected $table = "containers";

    protected $fillable = ["name"];

    public function spendings() {
        return $this->hasMany(Spending::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

}
