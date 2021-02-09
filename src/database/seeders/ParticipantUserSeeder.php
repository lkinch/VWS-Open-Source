<?php

namespace Database\Seeders;

use App\Models\ParticipantUser;
use Illuminate\Database\Seeder;

class ParticipantUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ParticipantUser::factory()
            ->times(5)
            ->create();
    }
}
