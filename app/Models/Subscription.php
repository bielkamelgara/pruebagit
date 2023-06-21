<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Subscription
 *
 * @property $id_subscription
 * @property $duration
 * @property $price
 * @property $type
 * @property $id_pay
 * @property $id_activities
 * @property $id_user
 * @property $created_at
 * @property $updated_at
 *
 * @property Activity $activity
 * @property Pay $pay
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Subscription extends Model
{
    
    static $rules = [
		'id_subscription' => 'required',
		'duration' => 'required',
		'price' => 'required',
		'type' => 'required',
		'id_pay' => 'required',
		'id_activities' => 'required',
		'id_user' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_subscription','duration','price','type','id_pay','id_activities','id_user'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function activity()
    {
        return $this->hasOne('App\Models\Activity', 'id_activities', 'id_activities');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pay()
    {
        return $this->hasOne('App\Models\Pay', 'id_pay', 'id_pay');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id_user', 'id_user');
    }
    

}
