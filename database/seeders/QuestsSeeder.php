<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quest;

class QuestsSeeder extends Seeder {
    public function run() {
        Quest::truncate();
        $quests = [
            ['title'=>'Soil Test Before Sowing','description'=>'Collect soil sample and perform soil test at nearest lab.','reward_points'=>150],
            ['title'=>'Use Organic Fertilizer','description'=>'Replace 30% chemical fertilizer with organic compost.','reward_points'=>120],
            ['title'=>'Install Drip Irrigation','description'=>'Set up drip irrigation for water saving.','reward_points'=>300],
            ['title'=>'Plant Cover Crop','description'=>'Sow cover crops to reduce erosion.','reward_points'=>100],
            ['title'=>'Record Weather Observations','description'=>'Record daily weather for a week.','reward_points'=>60],
        ];
        foreach($quests as $q) Quest::create($q);
    }
}
