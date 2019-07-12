<?php

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
        // $this->call(UsersTableSeeder::class);
        App\User::create(
            [
                'name' => 'Dev Raga',
                'email' => 'whary11@gmail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ]
        );
        factory(App\User::class, 2)->create();
        factory(App\Ticket::class, 50)->create();
        factory(App\Conversation::class, 1000)->create();
    }
}
