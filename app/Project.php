<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public function owner()
    {
    	return $this->belongsTo(User::class, 'owner');
    }

    public function users()
    {
    	return $this->belongsToMany(User::class);
    }
}
