<?php

namespace Database\Seeders;

use App\Models\Refund;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RefundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Refund::factory()->count(20)->create(); // Tạo 20 bản ghi
    }
}
