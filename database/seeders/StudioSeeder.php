<?php

namespace Database\Seeders;

use App\Models\Studio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                "name" => 'Studio 1',
            ],
            [
                "name" => 'Studio 2',
            ],
            [
                "name" => 'Studio 3',
            ],
            [
                "name" => 'Studio 4',
            ],
            [
                "name" => 'Studio 5',
            ],
            [
                "name" => 'Studio 6',
            ],
            [
                "name" => 'Studio 7',
            ],
            [
                "name" => 'Studio 8',
            ],
            [
                "name" => 'Studio 9',
            ],
        ];
        

        foreach($datas as $data)
        {
            Studio::create($data);
        }
    }
}
