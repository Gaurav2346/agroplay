<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quest extends Model {
    use HasFactory;
    protected $fillable = ['title','description','reward_points','status'];

    public function users() {
        return $this->belongsToMany(User::class)->withPivot('completed_at')->withTimestamps();
    }
}
