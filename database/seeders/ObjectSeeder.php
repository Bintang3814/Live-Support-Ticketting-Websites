<?php

namespace Database\Seeders;

use App\Models\Objects;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ObjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Objects::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'Monitor', 'Printer', 'Proyektor'
        ];

        foreach ($data as $value) {
            Objects::insert([
                'name' => $value
            ]);
        }
    }
}
