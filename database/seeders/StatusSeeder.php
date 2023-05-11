<?php

namespace Database\Seeders;

use App\Models\Statu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Statu::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'On Going', 'On Review', 'Completed', 'Pending', 'Cancel'
        ];

        foreach ($data as $value) {
            Statu::insert([
                'sname' => $value
            ]);
        }
    }
}
