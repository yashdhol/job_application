<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateDetails extends Model {

    use HasFactory;

    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $table = 'candidate_details';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'address', 'gender', 'contact'];

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
    public function educationDetails() {
        return $this->hasMany(EducationDetails::class, 'bd_id', 'id');
    }

    public function workExperienceDetails() {
        return $this->hasMany(WorkExperience::class, 'bd_id', 'id');
    }

}
