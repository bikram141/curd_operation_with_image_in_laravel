<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Http\Models\User;
use Hash;
use Carbon\Carbon;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'bkkk',
            'email'=>'bk@gmail.com',
            'email_verified_at'=>Carbon::now(),
            'password'=>Hash::make('password'),

        ]);
    }
}
