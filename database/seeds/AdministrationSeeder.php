<?php

use Illuminate\Database\Seeder;
use App\user;

class AdministrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new user;
        $administrator->username = "Admin";
        $administrator->name = "Administrator";
        $administrator->email = "admin@admin.com";
        $administrator->roles = json_encode(["ADMIN"]);
        $administrator->password = \Hash::make("123456");
        $administrator->avatar = "saat-ini-tidak-ada-file.png";
        $administrator->address = "Sarmili, Bintaro, Tangerang Selatan";
        $administrator->phone = "08888888888";
        $administrator->save();

        $this->command->info("User Admin berhasil diinsert");
    }
}
