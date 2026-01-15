<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = [
            [
                'name' => 'Aung Aung',
                'year' => 1992,
                'phone' => '09420123456',
                'email' => 'aungaung@gmail.com',
                'township' => 'Hlaing',
                'state_division' => 'Yangon',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Su Su Hlaing',
                'year' => 1995,
                'phone' => '09420123457',
                'email' => 'susu@gmail.com',
                'township' => 'Kamayut',
                'state_division' => 'Yangon',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Kyaw Kyaw',
                'year' => 1988,
                'phone' => '09420123458',
                'email' => 'kyawkyaw@gmail.com',
                'township' => 'Aungmyaythazan',
                'state_division' => 'Mandalay',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Thandar Oo',
                'year' => 1997,
                'phone' => '09420123459',
                'email' => 'thandar@gmail.com',
                'township' => 'Chanmyathazi',
                'state_division' => 'Mandalay',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Min Min Lwin',
                'year' => 1990,
                'phone' => '09420123460',
                'email' => 'minmin@gmail.com',
                'township' => 'Mawlamyine',
                'state_division' => 'Mon State',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ei Ei Phyo',
                'year' => 1998,
                'phone' => '09420123461',
                'email' => 'eiei@gmail.com',
                'township' => 'Pathein',
                'state_division' => 'Ayeyarwady',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Zaw Zaw Htun',
                'year' => 1985,
                'phone' => '09420123462',
                'email' => 'zawzaw@gmail.com',
                'township' => 'Monywa',
                'state_division' => 'Sagaing',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'May Myint',
                'year' => 1993,
                'phone' => '09420123463',
                'email' => 'maymyint@gmail.com',
                'township' => 'Taunggyi',
                'state_division' => 'Shan State',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Htet Naing',
                'year' => 1991,
                'phone' => '09420123464',
                'email' => 'htetnaing@gmail.com',
                'township' => 'Pyay',
                'state_division' => 'Bago',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Nandar Win',
                'year' => 1996,
                'phone' => '09420123465',
                'email' => 'nandar@gmail.com',
                'township' => 'Sittwe',
                'state_division' => 'Rakhine State',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        Customer::insert($customers);
    }
}
