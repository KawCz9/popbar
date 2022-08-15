<?php

namespace Database\Seeders;

use App\Models\Bartables;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateBarTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bar=[
            [
                'table_name' => 'A01',
                'table_status' => '1',
            ],
            [
                'table_name' => 'A02',
                'table_status' => '0',
            ],
            [
                'table_name' => 'A03',
                'table_status' => '0',
            ],
            [
                'table_name' => 'A04',
                'table_status' => '0',
            ],
            [
                'table_name' => 'A05',
                'table_status' => '0',
            ],
            [
                'table_name' => 'B01',
                'table_status' => '0',
            ],
            [
                'table_name' => 'B02',
                'table_status' => '0',
            ],
            [
                'table_name' => 'B03',
                'table_status' => '0',
            ],
            [
                'table_name' => 'B04',
                'table_status' => '0',
            ],
            [
                'table_name' => 'B05',
                'table_status' => '0',
            ],
        ];

        foreach($bar as $key => $value){
            Bartables::create($value);
        }
    }
}
