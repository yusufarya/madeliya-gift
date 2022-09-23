<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\User;
use App\Models\Customer;
use App\Models\Menu;
use App\Models\Submenu;
use App\Models\Kategori_submenu;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $admin = new \App\Models\User;
        $admin->name='Yusuf Aryadilla';
        $admin->company='ARLI FLOREST';
        $admin->address='Tangerang, Banten';
        $admin->phone='085888189008';
        $admin->email='yusufaryadilla29@gmail.com';
        $admin->username='yusuf_ad';
        $admin->password= bcrypt('123456');
        $admin->status='Y';
        $admin->level='1';
        $admin->save();

        DB::table('users')->insert([
            'name' => Str::random(10),
            'username' => Str::random(10),
            'company' => Str::random(10),
            'phone' => '08987654123',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'status' => 'N',
            'level' => 1
        ]);

        Customer::create([
            'firstname' => 'Yusuf', 
            'lastname' => 'Arya ', 
            'username' => 'yad',
            'email' => 'yad@gmail.com',
            'address' => 'Tangerang, Banten',
            'phone' => '098987654321',
            'password' => bcrypt('yyyyyy'),
            'status' => 'Y',
            'level' => '1'
        ]);

        Menu::create([ 
            'title' => 'Management Data',  
            'status' => 'Y',
            'level' => '1'
        ]); 

        Menu::create([
            'title' => 'Master Data',  
            'status' => 'Y',
            'level' => '1'
        ]);

        Submenu::create([ 
            'menu_id'=> '1',
            'name' => 'Customer', 
            'desc' => 'Cust classic',
            'url' => 'customList',
            'icon' => 'mdi-face',
            'category' => 'N',
            'status' => 'Y',
            'level' => '1'
        ]);
        
        Submenu::create([ 
            'menu_id'=> '2',
            'name' => 'Buckets', 
            'desc' => 'Bucket classic',
            'url' => '#',
            'icon' => 'mdi-flower',
            'category' => 'Y',
            'status' => 'Y',
            'level' => '1'
        ]);
        
        Kategori_submenu::create([ 
            'submenu_id'=> '2',
            'name' => 'Buckets Bunga',  
            'url' => 'bucketFlowersList',
            'status' => 'Y'
        ]);

        Kategori_submenu::create([ 
            'submenu_id'=> '2',
            'name' => 'Buckets Makanan',  
            'url' => 'bucketFoodList',  
            'status' => 'Y'
        ]);

        Kategori_submenu::create([ 
            'submenu_id'=> '2',
            'name' => 'Buckets Uang',  
            'url' => 'bucketMoneyList',  
            'status' => 'Y'
        ]);
    }
}
