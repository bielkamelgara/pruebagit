<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pay
 *
 * @property $id_pay
 * @property $paymennt
 * @property $credit_card_number
 * @property $type_payment
 * @property $created_at
 * @property $updated_at
 *
 * @property Subscription[] $subscriptions
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pay extends Model
{
    
    static $rules = [
		'id_pay' => 'required',
		'paymennt' => 'required',
		'credit_card_number' => 'required',
		'type_payment' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_pay','paymennt','credit_card_number','type_payment'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptions()
    {
        return $this->hasMany('App\Models\Subscription', 'id_pay', 'id_pay');
    }
    

}
