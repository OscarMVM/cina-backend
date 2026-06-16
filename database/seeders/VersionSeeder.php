<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Version;

class VersionSeeder extends Seeder
{
    public function run(): void
    {
        Version::upsert(
            [
                ['recurso' => 'pastos', 'fecha_actualizacion' => '2026-06-15'],
            ],
            ['recurso'],
            ['fecha_actualizacion']
        );
    }
}
