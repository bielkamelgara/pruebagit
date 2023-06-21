<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Calendar
 *
 * @property $id_calendar
 * @property $fecha
 * @property $created_at
 * @property $updated_at
 *
 * @property Activity[] $activities
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Calendar extends Model
{
    
    static $rules = [
		'id_calendar' => 'required',
		'fecha' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_calendar','fecha'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activities()
    {
        return $this->hasMany('App\Models\Activity', 'id_calendar', 'id_calendar');
    }
    

}
