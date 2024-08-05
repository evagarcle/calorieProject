<?php

namespace Database\Seeders;

use App\Models\Record;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $record = new Record();
        $record->user_id = User::find(1)->id;
        $record->date = '2024-08-04';
        $record->total_calories = 2500;
        $record->carbs = 400;
        $record->proteins = 120;
        $record->fats = 50;
        $record->save();
    }
}


