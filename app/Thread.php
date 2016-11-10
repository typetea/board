<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Thread
 *
 * @property integer $id
 * @property integer $member_id
 * @property string $title
 * @property string $commentary
 * @property string $type
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Thread whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Thread whereMemberId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Thread whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Thread whereCommentary($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Thread whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Thread whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Thread whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Member $member
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Ress[] $ress
 */
class Thread extends Model
{

    public $fillable = ["member_id","title","commentary","type"];
    public function member(){
        return $this->belongsTo('App\Member');
    }

    public function ress(){
        return $this->hasMany('App\Ress',"thread_id");
    }
}
