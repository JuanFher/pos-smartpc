<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleDetail extends Model
{
    use HasFactory;

    protected $table = 'sale_details';

    protected $fillable = [
    	'sale_id', 'product_id', 'tax_id', 'sale_price', 'quantity', 'discount'
    ];

    public function tax()
    {
    	return $this->belongsTo(Tax::class);
    }

    public function products()
    {
    	return $this->hasMany(Product::class);
    }

    public function sale()
    {
    	return $this->belongsTo(Sale::class);
    }
}
