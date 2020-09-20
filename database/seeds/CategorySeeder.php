<?php

use Illuminate\Database\Seeder;
use App\Topic;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $topics =array(
            array('id' => '2','title' => 'Intimate and Connected','created_at' => '2020-05-09 01:22:02','updated_at' => '2020-05-09 01:22:02','deleted_at' => NULL),
            array('id' => '3','title' => 'Buddy..','created_at' => '2020-05-09 01:25:02','updated_at' => '2020-05-09 01:51:19','deleted_at' => NULL),
            array('id' => '4','title' => 'Loml','created_at' => '2020-05-09 01:25:23','updated_at' => '2020-05-09 01:25:23','deleted_at' => NULL),
            array('id' => '5','title' => 'Best play mate','created_at' => '2020-05-09 01:26:05','updated_at' => '2020-05-09 01:26:05','deleted_at' => NULL),
            array('id' => '6','title' => 'This or that??','created_at' => '2020-05-09 01:26:33','updated_at' => '2020-05-09 01:26:33','deleted_at' => NULL)
        );
        foreach ($topics as $topic=> $value ) {
          Topic::create([
              'id'=>$value['id'],
              'title'=> $value['title']
          ]);

        }
    }
}
