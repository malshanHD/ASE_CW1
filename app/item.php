<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    protected $fillable = [ 'itemCode', 'itemName', 'itemDescription', 'itemPrice', 'itemWarrenty', 'itemQTY', 'itemDiscount', 'itemMainCat', 'itemSubCat', 'mainImage'];

}
