<?php

namespace Database\Seeders;

use App\Models\ProjectType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ProjectTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now('utc')->toIso8601String();
        $data = [
            [
                'name' => 'New Site',
                'created_at'=> $now,
                'updated_at'=> $now
            ],
            [
                'name' => 'Support',
                'created_at'=> $now,
                'updated_at'=> $now
            ],
            [
                'name' => 'Internal',
                'created_at'=> $now,
                'updated_at'=> $now
            ]
        ];

        \DB::table('project_types')->insert($data);
    }
}
