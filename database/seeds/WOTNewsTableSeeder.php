<?php

use Illuminate\Database\Seeder;
use App\Models\WOTNew;


class WOTNewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(WOTNew::class, 3)->create();
    }
}
