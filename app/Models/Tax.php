<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    use HasFactory;

    protected $table = 'taxes';

    protected $fillable = ['name', 'value'];

    public function products()
    {
    	return $this->hasMany(Product::class);
    }

    public function puchaseDetails()
    {
    	return $this->hasMany(PurchaseDetail::class);
    }

    public function saleDetails()
    {
    	return $this->hasMany(SaleDetail::class);
    }
}
