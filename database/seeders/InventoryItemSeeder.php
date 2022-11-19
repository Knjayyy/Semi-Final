<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InventoryItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\InventoryItem::factory(20)->create();
    }
}
