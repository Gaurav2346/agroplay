<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Reward extends Model {
    use HasFactory;
    protected $fillable = ['title','cost_points','description'];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class)->withPivot('redeemed_at')->withTimestamps();
    }
}
