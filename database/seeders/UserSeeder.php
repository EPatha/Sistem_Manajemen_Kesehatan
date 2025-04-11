<?php


namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
        [
            'name' => ‘Isna',
            'alamat' => 'Jl ini',
            'no_hp' => '081234567',
            'role' => 'dokter',
            'email' => 'isna@gmail.com',
            'password' => 'password'
        ],
[
            'name' => ‘Isul',
            'alamat' => 'Jl itu',
            'no_hp' => '087654321',
            'role' => ‘pasien',
            'email' => 'isul@gmail.com',
            'password' => 'password'
        ],
        ];
        foreach($data as $d){
            User::create([
                'name' => $d['name'],
                'alamat' => $d['alamat'],
                'no_hp' => $d['no_hp'],
                'role' => $d['role'],
                'email' => $d['email'],
                'password' => $d['password'],
            ]);
        }
    }
}
