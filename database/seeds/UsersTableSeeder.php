<?php


use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([
            'name'=> 'Faycal',
            'first_name' => 'Hasbellaoui',
            'email'=>'hasbellaoui@gmail.com'
        ]);

        factory(App\User::class)->create([
            'name' => 'jhon',
            'first_name' => 'Doe',
            'email' => 'jhon@doe.com'
        ]);

        // factory(App\User::class)->create([
        //     'name' => 'Hasbellaoui Melissa',
        //     'email' => 'melissa@gmail.com'
        // ]);

        // \DB::table('roles')->insert([
        //     'name'=> 'Super Admin',
        //     'guard_name'=>'web'
        // ]);

        // \App\User::find(1)->assignRole('Super Admin');

    }
}
