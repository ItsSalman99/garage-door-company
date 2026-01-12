<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuotationOrder extends Model
{
    protected $table = 'quotation_orders';

    protected $fillable = [
        'company_id',
        'technician_id',
        'product_id',
        'service_id',
        'price',
        'quantity',
        'total',
        'customer_name',
        'customer_email',
        'customer_phone',
        'customer_address',
        'note',
        'status',
    ];

    // relationships
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function company()
    {
        return $this->belongsTo(User::class, 'company_id', 'id');
    }

    public function technician()
    {
        return $this->belongsTo(User::class, 'technician_id', 'id');
    }

}
