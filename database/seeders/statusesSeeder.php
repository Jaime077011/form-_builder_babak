<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class statusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $status = array(
            array('id' => '1', 'name' => 'task in crm', 'created_at' => '2021-04-01 02:47:01', 'updated_at' => '2021-04-03 04:49:31'),
            array('id' => '2', 'name' => 'following', 'created_at' => '2021-04-01 02:47:01', 'updated_at' => '2021-04-03 04:49:31'),
            array('id' => '3', 'name' => 'processing', 'created_at' => '2021-04-03 02:47:01', 'updated_at' => '2021-04-03 04:49:31'),
            array('id' => '4', 'name' => 'done', 'created_at' => '2021-04-04 02:47:01', 'updated_at' => '2021-04-03 04:49:31'),

        );
        DB::table('statuses')->insert($status); 
    }
}
