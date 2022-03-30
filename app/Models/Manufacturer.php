<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'sales_email', 
        'sales_phone', 
        'tech_email', 
        'tech_phone'];

    public function equipments()
    {
        return $this->hasMany(Equipment::class);
    }
    
}