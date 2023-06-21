<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Exercise
 *
 * @property $id
 * @property $exercises
 * @property $type
 * @property $created_at
 * @property $updated_at
 *
 * @property Activity[] $activities
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Exercise extends Model
{
    
    static $rules = [
		'exercises' => 'required',
		'type' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['exercises','type'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activities()
    {
        return $this->hasMany('App\Models\Activity', 'id_exercises', 'id');
    }
    

}
