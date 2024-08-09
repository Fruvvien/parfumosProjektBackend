<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SimpleProduct extends Model
{
    protected $table = 'simpleproducts';
    public function getTableName()
   {
       return $this->table;
   }
}
