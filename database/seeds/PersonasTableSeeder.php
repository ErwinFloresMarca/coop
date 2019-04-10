<?php

use Illuminate\Database\Seeder;

class PersonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personas')->insert([
          'ci'=>'12345678',
          'nombres'=>'juan',
          'paterno'=>'Mamani',
          'materno'=>'Mamani',
          'telefono'=>'71812345',
          'email'=>'juan@gmail.com',
          'password'=>'juan@gmail.com',
          'created_at'=>date('Y-m-d H:i:s'),
          'updated_at'=>date('Y-m-d H:i:s')
        ]);
    }
}
