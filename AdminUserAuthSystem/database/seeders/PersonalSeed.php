<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Personal;
class PersonalSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $personal = [
            'name' => 'Personal',
            'email' => 'personal@personal.com',
            'password' => bcrypt('12345')
        ];
        Personal::create($personal);
    }
}
