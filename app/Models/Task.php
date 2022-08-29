<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'id',
        'name',
        'tag_id'
    ];

    public function getDetail()
    {
        $tasks = 'ID:'.$this->id.'　'. 'タグ名:'.$this->tag_id.'　'. 'タスク名'.$this->name;
        return $tasks;
    }

    public function getTitle(){
        return 'ID'.$this->id . ':' . $this->tag_id.'タグ名:'.optional($this->tag)->tag_name;
    }

        public function tag()
    {
		return $this->belongsTo(Tag::class);
    }
}