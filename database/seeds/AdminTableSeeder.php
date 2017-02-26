<?php

use Illuminate\Database\Seeder;
use App\User as User;
  
class AdminTableSeeder extends Seeder {
  
    public function run() {
        User::truncate();
  
        User::create( [
            'email' => 'admin2@admin.com',
            'password' => bcrypt("admin"),
            'name' => 'Administrator2'
        ] );

        User::create( [
            'email' => 'admin3@admin.com',
            'password' => bcrypt("admin"),
            'name' => 'Administrator3'
        ] );
    }
}

?>