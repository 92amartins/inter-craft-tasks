<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
    
    /**
     * Get the user to which the task belongs.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
