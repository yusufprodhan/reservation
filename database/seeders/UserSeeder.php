<?php

namespace Database\Seeders;


use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run()
    {

        // Default password
        $defaultPassword = app()->environment('production') ? Str::random() : '12345678';
//        $this->command->getOutput()->writeln("<info>Default password:</info>".$defaultPassword);

        // Create super admin user
        $user = new User();
        $role = new Role();

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $user->truncate();
        $role->truncate();
        DB::table('role_user')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        /*
         * Create roles
         */

        $superAdminRole = $role->create([
            'name' => 'administrator',
            'slug' => 'administrator',
            'description' => 'This is administrator role',
            'status' => true,
        ]);

        foreach (
            [
                'access backend',
                'view user',
                'create user',
                'edit user',
                'delete user',
                'view order',
                'edit order',
                'create order',
            ] as $name) {
            $superAdminRole->permissions()->create(['name' => $name]);
        }

        $superAdmin = $user->create([
            'name' => 'Shahriar Sujan',
            'avatar' => null,
            'email' => 'clippingxpress@gmail.com',
            'password' => bcrypt($defaultPassword),
            'status' => true,
            'is_admin' => true,
            'is_user' => false,
            'phone'=>'+31 6-86135136',
            'address'=>'Burgemeester Van Leeuwenlaan',
            'post_code'=>'112c',
            'city'=>'North Holland',
            'state'=>'Amsterdam',
            'country_id'=>'155',
            'locale' => app()->getLocale(),
            'timezone' => config('app.timezone'),
            'email_verified_at' => now(),
        ]);
        $superAdmin->uid = 'PIXU-' . date('ym') . '-' . sprintf('%04d', $superAdmin->id);
        $superAdmin->save();
        $superAdmin->roles()->save($superAdminRole);


//        $supervisorRole = $role->create([
//            'name'          => 'Supervisor',
//            'slug'          => 'supervisor',
//            'description'   => 'This is supervisor role',
//            'status'        => true,
//        ]);
//        $supervisor = $user->create([
//                'name'              => 'Supervisor Rahman',
//                'avatar'             => null,
//                'email'             => 'supervisor@gmail.com',
//                'password'          => bcrypt($defaultPassword),
//                'status'            => true,
//                'is_admin'          => false,
//                'locale'            => app()->getLocale(),
//                'timezone'          => config('app.timezone'),
//                'email_verified_at' => now(),
//        ]);
//        $supervisor->save();
//        $supervisor->roles()->save($supervisorRole);

        $userRole = $role->create([
            'name' => 'user',
            'slug' => 'user',
            'description' => 'This is user role',
            'status' => true,
        ]);
        $customers = $user->create([
            'name' => 'Pix clipping user',
            'avatar' => null,
            'email' => 'sales@pixclipping.com',
            'password' => bcrypt($defaultPassword),
            'status' => true,
            'is_admin' => false,
            'is_user' => true,
            'phone'=>'+31 6-86135136',
            'address'=>'Burgemeester Van Leeuwenlaan',
            'post_code'=>'112c',
            'city'=>'North Holland',
            'state'=>'Amsterdam',
            'country_id'=>'155',
            'billing_address_id'=>1,
            'locale' => app()->getLocale(),
            'timezone' => config('app.timezone'),
            'email_verified_at' => now(),
        ]);
        $customers->uid = 'PIXU-' . date('ym') . '-' . sprintf('%04d', $customers->id);
        $customers->save();
        $customers->roles()->save($userRole);

    }

}
