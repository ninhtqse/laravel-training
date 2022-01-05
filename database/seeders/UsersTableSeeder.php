<?php

    namespace Database\Seeders;

    use Illuminate\Database\Seeder;
    use Module\Users\Models\User;

    class UsersTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {

            $user = new User();
            $user->id = 2;
            $user->email = 'admin@gmail.com';
            $user->name = 'Admin';
            $user->password = bcrypt(123456);
            $user->is_admin = 1;
            $user->save();

        }
    }
