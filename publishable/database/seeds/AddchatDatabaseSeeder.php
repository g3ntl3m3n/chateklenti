<?php

use Illuminate\Database\Seeder;
use g3ntl3m3n\Addchat\Traits\Seedable;

class AddchatDatabaseSeeder extends Seeder
{
    use Seedable;

    protected $seedersPath = __DIR__.'/';

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->seed('AcSettingsTableSeeder');
    }
}
