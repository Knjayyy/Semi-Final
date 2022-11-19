<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryItem extends Model
{
    protected $fillable=['name', 'description', 'values','status'];

    use HasFactory;
}
