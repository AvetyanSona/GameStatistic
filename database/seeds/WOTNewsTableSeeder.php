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
        $new = factory(WOTNew::create());
        $news = factory(WOTNew::class, 3)->create();
    }
}
