<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Contact::factory(10)->create();

        \App\Models\Contact::factory()->create([
            'name' => 'Test User',
            'contact_no' => '8555-55-55'
        ]);
    }
}
