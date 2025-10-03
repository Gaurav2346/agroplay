<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reward;

class RewardsSeeder extends Seeder {
    public function run() {
        Reward::truncate();
        $rewards = [
            ['title'=>'Fertilizer Discount Voucher','cost_points'=>1000,'description'=>'Get 10% discount on fertilizer at partner stores.'],
            ['title'=>'Seed Pack','cost_points'=>600,'description'=>'Certified seed pack.'],
            ['title'=>'Soil Testing Coupon','cost_points'=>400,'description'=>'Free soil test at govt lab.'],
            ['title'=>'Water Saver Kit','cost_points'=>1200,'description'=>'Basic drip irrigation starter kit.'],
        ];
        foreach($rewards as $r) Reward::create($r);
    }
}
