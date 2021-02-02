<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseDetail extends Model
{
    use HasFactory;

    protected $table = 'purchase_details';

    protected $fillable = [
    	'purchase_id', 'product_id', 'tax_id', 'buy_price', 'sell_price', 'quantity'
    ];

    public function purchase()
    {
    	return $this->belongsTo(Purchase::class);
    }

    public function tax()
    {
    	return $this->belongsTo(Tax::class);
    }

    public function products()
    {
    	return $this->hasMany(Product::class);
    }
}
