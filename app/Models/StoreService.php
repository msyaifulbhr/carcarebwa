<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreService extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'store_service';

    protected $fillable = [
      'car_service_id',
      'car_store_id',
    ];

    public function store(): BelongsTo
    {
        return $this->belongsTo(CarStore::class, 'car_store_id');
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(CarService::class, 'car_service_id');
    }
}
