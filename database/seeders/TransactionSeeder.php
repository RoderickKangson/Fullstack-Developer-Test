<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('data/viewData.json'));
        $data = json_decode($json, true)['data'];

        foreach ($data as $item) {
            $item['amount'] = (int) $item['amount'];
            Transaction::create($item);
        }

    }
}
