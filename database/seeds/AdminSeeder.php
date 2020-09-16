<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\AdminModel as Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $admin = new Admin();
      $admin->user = "admin@admin.com";
      $admin->password = Hash::make("admin");
      while(Hash::needsRehash($admin->password)){$admin->password = Hash::make("admin");}
      $admin->save();
    }
}
