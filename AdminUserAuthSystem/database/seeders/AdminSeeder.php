<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $admin = [
            'name' => 'Admin',
            'email' => 'adminn@admin.com',
            'password' => bcrypt('12345')
        ];
        Admin::create($admin);
        
      
    }
}
