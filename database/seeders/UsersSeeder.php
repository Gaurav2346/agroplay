<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder {
    public function run() {
        User::truncate();
        $farmers = [
            ['name'=>'Gaurav Bhoir','district'=>'Thane','email'=>'garv@example.com','password'=>null,'points'=>450],
            ['name'=>'Chirag patil','district'=>'Mumbai','email'=>'chirag@example.com','password'=>null,'points'=>820],
            ['name'=>'Atharva Thakare','district'=>'Palghar','email'=>'thakre@example.com','password'=>null,'points'=>200],
            ['name'=>'Dhruv surve','district'=>'Vasai','email'=>'surve@example.com','password'=>null,'points'=>120],
            ['name'=>'Bhanushai','district'=>'Bhayander','email'=>'Bh@example.com','password'=>null,'points'=>120],
            ['name'=>'Aryan','district'=>'Vasai','email'=>'shenoy@example.com','password'=>null,'points'=>120],
            ['name'=>'Malik','district'=>'Mumbai','email'=>'dhruv@example.com','password'=>null,'points'=>120],
            ['name'=>'Sujal','district'=>'Mumbai','email'=>'hatkar@example.com','password'=>null,'points'=>120],
        ];
        foreach($farmers as $f) User::create($f);
    }
}
