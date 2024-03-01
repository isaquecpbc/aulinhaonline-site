<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EnrollmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Enrollment::create([
            'name'          => 'Bojack Herseman',
            'course'        => 'guitar',
            'phone'         => '(47) 99910-5588',
            'email'         => 'bojack@horse.men',
            'birthday'      => '2023-03-10',
            'rg'            => '1.234.567',
            'cpf'           => '101.202.303-45',
            'address'       => 'Rua Coripós, N 777',
            'neighborhood'  => 'Escola Agrícola',
            'state'         => 'Blumenau - SC',
            'responsible'   => 'Maior de 16',
            'accordingly'   => true,
        ]);
    }
}