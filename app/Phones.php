<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phones extends Model
{
    protected $fillable=['name','serial','buyingprice','sellingprice'];
}
