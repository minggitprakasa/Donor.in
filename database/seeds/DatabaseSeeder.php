<?php

use Illuminate\Database\Seeder;
use app\user;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call("AdministrationSeeder");
    }
}
