<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category_name'
    ];

    protected $guarded = array('id');

    public function getTitle(){
        return 'category'.$this->category_name;
    }
}
