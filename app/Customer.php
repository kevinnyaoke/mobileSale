<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable=['name','phone','item','serial','buyingprice','sellingprice','amount','cash','change','seller'];
}
