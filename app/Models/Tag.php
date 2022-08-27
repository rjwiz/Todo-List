<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = array('id');
    protected $fillable = [
        'id',
        'tag_name'
    ];

    public function tasks(){
        return $this->hasMany(Task::class);
    }

    public function getTag()
    {
        return $this->tag_name;
    }


}
