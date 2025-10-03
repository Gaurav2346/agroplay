<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder {
    public function run() {
        User::truncate();
        $farmers = [
            ['name'=>'Ramu Kumar','district'=>'Alappuzha','email'=>'ramu@example.com','password'=>null,'points'=>450],
            ['name'=>'Sita Devi','district'=>'Thrissur','email'=>'sita@example.com','password'=>null,'points'=>820],
            ['name'=>'Mohan Patel','district'=>'Kozhikode','email'=>'mohan@example.com','password'=>null,'points'=>200],
            ['name'=>'Asha R','district'=>'Ernakulam','email'=>'asha@example.com','password'=>null,'points'=>120],
        ];
        foreach($farmers as $f) User::create($f);
    }
}
