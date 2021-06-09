<?php

namespace App\Models;

use App\Helpers\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'address_1', 'address_2', 'suburb', 'state', 'postcode', 'current_balance'];

    public function getCurrentBalanceAmountAttribute()
    {
        return Helper::money($this->attributes['current_balance'] / 100);
    }

    public function getOverdueBalanceAmountAttribute()
    {
        return Helper::money($this->attributes['overdue_balance'] / 100);
    }
}
