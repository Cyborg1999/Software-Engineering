<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharmacist extends Model
{
    protected $fillable = ['drug_name','drug_type','drug_state','drug_quantity','manufacture_date','expiration_date','delivery_date','price'];
}
