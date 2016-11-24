<?php

use App\Group;
use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $group = new Group;
        $group->name = 'Colegas';
        $group->save();

        $group = new Group;
        $group->name = 'Amigos';
        $group->save();

        $group = new Group;
        $group->name = 'Familia';
        $group->save();
    }
}
