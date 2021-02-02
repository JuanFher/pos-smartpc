<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $table = 'purchases';

    protected $fillable = [
    	'provider_id', 'user_id', 'type', 'fact_number', 'purchase_date', 'total_purchase', 'image', 'status'
    ];

    public function provider()
    {
    	return $this->belongsTo(Provider::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function purchaseDetails()
    {
    	return $this->hasMany(PurchaseDetail::class);
    }

}
