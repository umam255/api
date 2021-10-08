<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'nama_menu' => 'Reservation',
            'icon' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRngdTKUc8b24IT3uIhN5BZV5uSBXjU5N5SfA&usqp=CAU',
        ]);
    }
}
