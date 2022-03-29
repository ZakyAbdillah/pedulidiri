<?php

use Illuminate\Database\Seeder;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nik' => '088239876654',
            'name' => 'Zaky Abdillah',
            'telp' => '0895413155090',
            'username' => 'Jekjon',
            'alamat' => 'Jl.kemiri 6 RT 002 RW 011',
            'email' => 'zakyabdillah344@gmail.com',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(10),
            'role'=>'admin'
        ]);
    }
}
