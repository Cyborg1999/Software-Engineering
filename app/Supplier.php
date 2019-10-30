<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = ['drug_name','drug_type','drug_state','price','availability','photo'];
}
