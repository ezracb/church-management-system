<?php

namespace App\Models;

use App\Traits\HasMeta;
use App\Traits\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Church extends Model
{
    use HasFactory, Searchable, HasMeta;
    protected $fillable = ['user_id', 'church_id', 'name', 'email', 'code', 'country_id', 'state_id', 'city', 'address', 'currency_id'];
    protected $casts    = [];
    protected $searches = [];

    public function state(){
      return $this->belongsTo(State::class);
    }
    public function country(){
      return $this->belongsTo(Country::class);
    }
    public function currency(){
      return $this->belongsTo(Country::class, 'currency_id');
    }
    public function churches(){
      return $this->hasMany(Church::class);
    }
    public function services(){
      return $this->hasMany(Service::class);
    }
    public function groups(){
      return $this->hasMany(Group::class);
    }
    public function groupMembers(){
      return $this->hasManyThrough(GroupMember::class, Group::class);
    }
    public function givings(){
      return $this->hasMany(Giving::class);
    }
    public function members(){
      return $this->hasMany(Member::class);
    }
    public function church(){
      return $this->belongsTo(Church::class, 'church_id');
    }
    public function user(){
      return $this->belongsTo(User::class, 'user_id');
    }
}
