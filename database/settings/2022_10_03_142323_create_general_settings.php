<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateGeneralSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.frontend_version', '1.0.0');
        $this->migrator->add('general.backend_version', '1.0.0');
    }
    public function down(): void
    {
        $this->migrator->delete('general.frontend_version');
        $this->migrator->delete('general.backend_version');
    }
}
