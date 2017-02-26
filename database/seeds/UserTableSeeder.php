<?php

use Illuminate\Database\Seeder;
use App\User as User;
  
class UserTableSeeder extends Seeder {
  
    public function run() {
        User::truncate();
  
        User::create( [
            'email' => 'admin2@admin.com',
            'password' => bcrypt("password"),
            'name' => 'Administrator2'
        ] );

        User::create( [
            'email' => 'admin3@admin.com',
            'password' => bcrypt("password"),
            'name' => 'Administrator3'
        ] );
    }
}

?>