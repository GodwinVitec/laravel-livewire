<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'is_archived'];

    public function archive()
    {
        $this->update(['is_archived' => true]);
    }

    public function restore()
    {
        $this->update(['is_archived' => false]);
    }
}
