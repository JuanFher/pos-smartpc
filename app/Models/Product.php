<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
    	'code', 'name', 'stock', 'image', 'buy_price', 'sell_price', 'status', 'category_id', 'provider_id', 'tax_id', 
    ];


    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

	public function provider()
    {
    	return $this->belongsTo(Provider::class);
    }    

    public function tax()
    {
    	return $this->belongsTo(Tax::class);
    }

    public function purchaseDetail()
    {
    	return $this->belongsTo(PurchaseDetail::class);
    }

    public function saleDetail()
    {
    	return $this->belongsTo(SaleDetail::class);
    }
}
