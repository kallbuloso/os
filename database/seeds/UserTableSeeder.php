<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\VerifyUser;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();
        $user = new \App\Models\User();
        $date = Carbon::create(2018, 11, 10, 9);
        $faker =  Faker::create('pt_BR');
        
        $user->create([
            'name'      => 'admin',
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
			'status' => '1',
			'verified' => '1',
            'email'     => 'admin@admin.com',
            'password'  => bcrypt('123456'),
        ]);

        $user->create([
            'name'      => 'adm',
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
			'status' => '1',
			'verified' => '1',
            'email'     => 'adm@adm.com',
            'password'  => bcrypt('123456'),
        ]);

    	// foreach (range(1,30) as $index) {
        // $populator = new Faker\ORM\Propel\Populator($faker);
        // $populator->addEntity('1');
        // $populator->addEntity('0');


        for ($i=1; $i <50 ; $i++) {
            //$tamps = Carbon::now()->subDays(100)->addDays($i);
            $tamps = $date->addDays($i);
            $user->create([
	            'name' => $faker->userName,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'status' => $faker->boolean,
                'verified' => $faker->boolean,
	            'email' => $faker->email,
                'password' => bcrypt('123456'),
                'created_at' => $tamps,
                'updated_at' => $tamps
            ]);
            // $verifyUser->create([
            DB::table('verify_users')->insert([
                'user_id' => "{$i}",
                'token' => str_random(40),
                'created_at' => $tamps,
                'updated_at' => $tamps,
            ]);
        }
            

    	// foreach (range(1,30) as $index) {
        //     $tamps = now();
	    //     DB::table('users')->insert([
	    //         'name' => $faker->userName,
        //         'first_name' => $faker->firstName,
        //         'last_name' => $faker->lastName,
        //         'status' => '1',
        //         'verified' => '1',
	    //         'email' => $faker->email,
        //         'password' => bcrypt('123456'),
        //         'created_at' => $tamps,
        //         'updated_at' => $tamps,
        //     ]);
        // }
            
        // $user->create([
        //     'name'      => $faker->name,
		// 	'first_name' => str_random(10),
		// 	'last_name' => str_random(10),
		// 	'status' => '1',
		// 	'verified' => '1',
        //     'email'     => 'admin@admin.com',
        //     'password'  => bcrypt('123456'),
        // ]);

        // for ($i=0; $i <8 ; $i++) {             
        //     $user->create([
        //         'name'      => "user {$i}",
        //         'first_name' => str_random(10),
        //         'last_name' => str_random(10),
        //         'status' => '1',
        //         'verified' => '1',
        //         'email'     => str_random(10).'@mail.com',
        //         'password'  => bcrypt('123456'),
        //     ]);
        // }
        
    }
}
