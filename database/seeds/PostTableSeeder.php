<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->delete();

        DB::table('posts')->insert([
            'title' => 'We Are Starting',
            'published_at' => Carbon::now()->toDateTimeString(),
            'body' => 'Today we are starting out this blog. We will try updating it everyday.',
        ]);

        DB::table('posts')->insert([
            'title' => 'Laravel web framework',
            'url' => 'laravel.com',
            'body' => 'Laravel is the best php web framework.',
        ]);

        DB::table('posts')->insert([
            'title' => 'Bootstrap framework',
            'published_at' => Carbon::now()->addDays(10)->toDateTimeString(),
            'url' => 'https://getbootstrap.com',
            'body' => 'Bootstraps is really powerful tool for builing websites quickly.',
        ]);

        DB::table('posts')->insert([
            'title' => 'Sass framework',
            'published_at' => Carbon::now()->toDateTimeString(),
            'url' => 'http://sass-lang.com',
            'body' => 'Sass is another great css language. It includes a lot of great features',
        ]);
    }
}
