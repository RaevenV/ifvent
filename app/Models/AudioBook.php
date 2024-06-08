<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AudioBook extends Model
{
    use HasFactory;

    protected $fillable = ['title','type', 'category_id', 'description', 'alt', 'file_path','link', 'status'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function userProgress()
    {
        return $this->hasMany(Resource::class, 'resource_id')->where('resource_type', 'audio_books');
    }
}
