<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{

    protected $searchableColumns = ['name'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
}
