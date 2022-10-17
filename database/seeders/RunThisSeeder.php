<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RunThisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'project_id' => '1',
            'project_name' => 'WMS',
            'client_id' => '1',
            'project_start' => '2022-07-28',
            'project_end' => '2022-08-28',
            'project_status' => 'OPEN'
        ]);

        Project::create([
            'project_id' => '2',
            'project_name' => 'FILMS',
            'client_id' => '2',
            'project_start' => '2022-06-01',
            'project_end' => '2022-08-31',
            'project_status' => 'DOING'
        ]);

        Project::create([
            'project_id' => '3',
            'project_name' => 'DOC',
            'client_id' => '2',
            'project_start' => '2022-01-01',
            'project_end' => '2022-04-30',
            'project_status' => 'DONE'
        ]);

        Project::create([
            'project_id' => '4',
            'project_name' => 'POS',
            'client_id' => '3',
            'project_start' => '2022-05-01',
            'project_end' => '2022-08-31',
            'project_status' => 'DOING'
        ]);

        Client::create([
            'client_id' => '1',
            'client_name' => 'NEC',
            'client_address' => 'Jakarta'
        ]);

        Client::create([
            'client_id' => '2',
            'client_name' => 'TAM',
            'client_address' => 'Jakarta'
        ]);

        Client::create([
            'client_id' => '3',
            'client_name' => 'TUA',
            'client_address' => 'Bandung'
        ]);
    }
}
