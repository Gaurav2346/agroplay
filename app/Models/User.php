<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
    use HasFactory;
    protected $fillable = ['name','district','email','password','points'];

    public function quests() {
        return $this->belongsToMany(Quest::class)->withPivot('completed_at')->withTimestamps();
    }

    public function rewards() {
        return $this->belongsToMany(Reward::class)->withPivot('redeemed_at')->withTimestamps();
    }
}
