<?php

namespace App\Models;

use App\Repository\Transaction\TransactionRepo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    const STATUS_PENDING = 0;
    const STATUS_PROGRES = 1;
    const STATUS_DONE = 2;

    protected $guarded = [];


    protected static function booted()
    {
        static::creating(function ($query) {
            if(!isset($query->status)) $query->status = self::STATUS_PENDING;
        });
    }

    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    
}
