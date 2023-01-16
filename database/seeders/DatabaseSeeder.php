<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        Listing::create([
          'title' => 'Laravel Senior Developer',
          'tags' => 'laravel, javascript',
          'company' => 'Acme Corp',
          'location' => 'Boston, MA',
          'email' => 'email1@email.com',
          'website' => 'https://www.acme.com',
          'description' => 'Beatae reiciendis natus cum nostrum fugit. Nisi nobis expedita voluptatibus culpa nisi!'
        ]);

        Listing::create([
          'title' => 'Full-Stack Engineer',
          'tags' => 'laravel, backend, api',
          'company' => 'Stark Industries',
          'location' => 'New York, NY',
          'email' => 'email2@email.com',
          'website' => 'https://www.starkindustries.com',
          'description' => 'Lorem optio nesciunt quaerat nostrum nostrum quasi.'
        ]);
    }
}
