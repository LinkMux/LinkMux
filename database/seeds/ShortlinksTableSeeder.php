<?php

use Illuminate\Database\Seeder;

class ShortlinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Shortlink::class, 100)->create();
    }
}
