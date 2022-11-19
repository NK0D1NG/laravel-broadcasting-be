<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;
use Illuminate\Support\Str;

class CreateStreamingSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('streaming.pgm_secret', Str::random(40));
    }
    public function down(): void
    {
        $this->migrator->delete('streaming.pgm_secret');
    }
}
