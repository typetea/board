<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Ress
 *
 * @property-read \App\Ress $thread
 * @property-read \App\Member $member
 * @mixin \Eloquent
 */
class Ress extends Model
{
    protected $table = "ress";
    protected $primaryKey = ['thread_id', 'member_id'];

    public $incrementing = false;
    public $fillable = ["ress_id","thread_id","member_id","title","body","active"];
    public function thread(){
        return $this->belongsTo('App\Thread',"thread_id","id");
    }

    public function member(){
        return $this->belongsTo('App\Member');
    }
}
