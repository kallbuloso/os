<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
// use Modules\Customers\Models\Customers;
use Carbon\Carbon;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->truncate();
        $customer = new \Modules\Customers\Models\Customers();
        $cAddress = new \Modules\Customers\Models\CustomersAddress();
        $date = Carbon::parse('now');
        $faker =  Faker::create('pt_BR');
        $randInt = 78;
        for ($i=0; $i <$randInt ; $i++) {
            $tamps = $date->subDays($i);
            $customer->create([
                'tipe' => rand(0,1),
                'status' => rand(0,3) ,
                'name' => $faker->name,
                'nickname' => $faker->userName,
                'contact' => $faker->userName,
                'gender' => rand(0,2),
                'birtday_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'cpf_cnpj' => $faker->cpf,
                'rg_insc_est' => $faker->rg,
                'insc_mun' => $faker->rg,
                'telephone' => $faker->phoneNumber,
                'cell_phone' => $faker->cellphone(true, true),
                'whatsapp' => rand(0,1),
                'email' => $faker->email,
                'newsletter' => rand(0,1),
                'email_nfe' => $faker->email,
                'site' => $faker->domainName,
                'group' => rand(0,3),
                'limit_purc' => '20.30',
                'note_purchase' => $faker->text($maxNbChars = 50),
                'note' => $faker->text($maxNbChars = 50),
                'attendant_id' => rand(1,20),
                'created_at' => $tamps,
                'updated_at' => $tamps
            ]);

            $cAddress->create([
                'cep' => $faker->postcode,
                'customer_id' => rand(1,$randInt),
                'address' => $faker->streetName,
                'number' => $faker->buildingNumber,
                'complement' => $faker->secondaryAddress,
                'district' => $faker->state,
                'city' => $faker->city,
                'uf' => $faker->stateAbbr,
                'country' => 'Brazil',
            ]);
        }
    }
}
