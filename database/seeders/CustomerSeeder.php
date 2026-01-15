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
                'name' => 'Aung Min',
                'year' => 1995,
                'phone' => '0910000001',
                'email' => 'aungmin@gmail.com',
                'township' => 'Hlaing',
                'state_division' => 'Yangon',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kyaw Kyaw',
                'year' => 1990,
                'phone' => '0910000002',
                'email' => 'kyawkyaw@gmail.com',
                'township' => 'Insein',
                'state_division' => 'Yangon',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Su Su',
                'year' => 1998,
                'phone' => '0910000003',
                'email' => 'susu@gmail.com',
                'township' => 'Tamwe',
                'state_division' => 'Yangon',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mg Mg',
                'year' => 1988,
                'phone' => '0910000004',
                'email' => null,
                'township' => 'Bahan',
                'state_division' => 'Yangon',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Thazin',
                'year' => 1997,
                'phone' => '0910000005',
                'email' => 'thazin@gmail.com',
                'township' => 'Ahlone',
                'state_division' => 'Yangon',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nandar',
                'year' => 1996,
                'phone' => '0910000006',
                'email' => 'nandar@gmail.com',
                'township' => 'Kamayut',
                'state_division' => 'Yangon',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ko Lin',
                'year' => 1985,
                'phone' => '0910000007',
                'email' => null,
                'township' => 'Mingalar Taung Nyunt',
                'state_division' => 'Yangon',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hnin Pwint',
                'year' => 1999,
                'phone' => '0910000008',
                'email' => 'hninp@gmail.com',
                'township' => 'Sanchaung',
                'state_division' => 'Yangon',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Zaw Zaw',
                'year' => 1992,
                'phone' => '0910000009',
                'email' => 'zawzaw@gmail.com',
                'township' => 'Thanlyin',
                'state_division' => 'Yangon',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'May Thu',
                'year' => 2000,
                'phone' => '0910000010',
                'email' => 'maythu@gmail.com',
                'township' => 'Shwepyithar',
                'state_division' => 'Yangon',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Aye Aye',
                'year' => 1989,
                'phone' => '0910000011',
                'email' => null,
                'township' => 'Pathein',
                'state_division' => 'Ayeyarwady',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tun Tun',
                'year' => 1993,
                'phone' => '0910000012',
                'email' => 'tuntun@gmail.com',
                'township' => 'Pyay',
                'state_division' => 'Bago',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Phyo',
                'year' => 1994,
                'phone' => '0910000013',
                'email' => 'phyo@gmail.com',
                'township' => 'Monywa',
                'state_division' => 'Sagaing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ei Ei',
                'year' => 2001,
                'phone' => '0910000014',
                'email' => 'eiei@gmail.com',
                'township' => 'Taunggyi',
                'state_division' => 'Shan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ko Ko',
                'year' => 1987,
                'phone' => '0910000015',
                'email' => null,
                'township' => 'Mandalay',
                'state_division' => 'Mandalay',
                'created_at' => now(),
                'updated_at' => now(),
            ],
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
