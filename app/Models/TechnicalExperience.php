<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnicalExperience extends Model {

    use HasFactory;

    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $table = 'technical_experiences';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['bd_id', 'technology', 'skill'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
}
