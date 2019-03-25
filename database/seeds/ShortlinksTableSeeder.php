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
        factory(App\Models\Shortlink::class, 100)->create();
    }
}
