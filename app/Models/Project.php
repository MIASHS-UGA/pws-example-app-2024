<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    // Get the user the project.
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function save(array $options = array())
    {
        $this->user_id = auth()->id();
        parent::save($options);
    }
}
