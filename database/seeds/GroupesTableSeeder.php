<?php

use App\User;
use Illuminate\Database\Seeder;

class GroupesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Groupe::class)->create([
            'name'=> 'Admin'
        ]);

        factory(App\Groupe::class)->create([
            'name' => 'User'
        ]);

        User::find(1)->groupes()->sync([1,2]);
        User::find(2)->groupes()->sync([2]);



    }
}
