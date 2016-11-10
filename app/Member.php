<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;


/**
 * App\Member
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $place
 * @property mixed $thum
 * @property string $active
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Member whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Member whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Member whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Member wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Member wherePlace($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Member whereThum($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Member whereActive($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Member whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Member whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Member whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Thread[] $threads
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Ress[] $ress
 */
class Member extends Authenticatable{
    //

    public $fillable = ["name","email","password","place","thum","active"];

    public function threads(){
        return $this->hasMany('App\Thread',"member_id");
    }

    public function ress(){
        return $this->hasMany('App\Ress',"member_id","id");
    }
}
