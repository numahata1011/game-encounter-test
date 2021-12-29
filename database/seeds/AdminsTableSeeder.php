<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('admins')->insert([
        [
            // 'dept_id' => '1',
            'name' => 'saota',
            'email' => 'numahata.saori@gmail.com',
            'password' => Hash::make("1988"),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
         ],
        [
            // 'dept_id' => '2',
            'name' => 'numata',
            'email' => 'ynumahata@gmail.com',
            'password' => Hash::make("1981"),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
    ]);
    }
}
