<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
  
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $users = [
            [
               'name'=>'ishaq',
               'email'=>'ishaq@gmail.com',
               'type'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
              'name'=>'nauman',
               'email'=>'nauman@gmail.com',
               'type'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
              'name'=>'ishaq1',
               'email'=>'ishaq1@gmail.com',
               'type'=>0,
               'password'=> bcrypt('123456'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}