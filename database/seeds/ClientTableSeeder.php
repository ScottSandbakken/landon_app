<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('clients')->insert(
            [
            'title' => 'Mr',
            'name' => 'John',
            'last_name' => 'Doe',
            'address' => 'Street 123',
            'city' => 'Tulsa',
            'state' => 'OK',
            'zip_code' => '1234',
            'email' => 'john@example.com',
            ]
        );
        DB::table('clients')->insert(
            [
            'title' => 'Mrs',
            'name' => 'Jane',
            'last_name' => 'Doe',
            'address' => 'Another Street 456',
            'city' => 'Los Angeles',
            'state' => 'CA',
            'zip_code' => '1234',
            'email' => 'jane@example.com',
            ]
        );
    }
}
