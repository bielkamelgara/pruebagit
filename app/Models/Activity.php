<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Activity
 *
 * @property $id_activities
 * @property $date
 * @property $id_test
 * @property $id_media
 * @property $id_calendar
 * @property $id_exercises
 * @property $created_at
 * @property $updated_at
 *
 * @property Calendar $calendar
 * @property Exercise $exercise
 * @property Mediafile $mediafile
 * @property Subscription[] $subscriptions
 * @property Test $test
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Activity extends Model
{
    
    static $rules = [
		'id_activities' => 'required',
		'date' => 'required',
		'id_test' => 'required',
		'id_media' => 'required',
		'id_calendar' => 'required',
		'id_exercises' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_activities','date','id_test','id_media','id_calendar','id_exercises'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function calendar()
    {
        return $this->hasOne('App\Models\Calendar', 'id_calendar', 'id_calendar');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function exercise()
    {
        return $this->hasOne('App\Models\Exercise', 'id', 'id_exercises');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function mediafile()
    {
        return $this->hasOne('App\Models\Mediafile', 'id', 'id_media');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptions()
    {
        return $this->hasMany('App\Models\Subscription', 'id_activities', 'id_activities');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function test()
    {
        return $this->hasOne('App\Models\Test', 'id', 'id_test');
    }
    

}
