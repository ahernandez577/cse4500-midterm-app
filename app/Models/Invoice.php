<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = ['purchase_date', 'customer_id', 'equipment_id'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function equipments()
    {
        return $this->hasMany(Equipment::class, 'customer_id', 'equipment_id');
    }

    public function number_of_items()
    {
        return count($this->equipments);
    }

    public function total_price()
    {
        $retval = 0;
        $equipments = $this->equipments;

        foreach($equipments AS $equipment)
        {
            $retval +=  $equipment->price;
        }

        return $retval;
    }

}
