<?php

namespace Database\Seeders;

use Bouncer;
use Illuminate\Database\Seeder;
use app\Models\User;
use app\Models\ParticipantUser;

class BouncerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bouncer::allow('superadmin')->everything();

        Bouncer::allow('admin')->everything();
        Bouncer::forbid('admin')->toManage(User::class);
        Bouncer::forbid('admin')->to('create', User::class);

        Bouncer::allow('participant')->to('create', ParticipantUser::class);

    }
}
