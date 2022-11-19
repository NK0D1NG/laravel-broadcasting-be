<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use App\Models\Client;
use Illuminate\Database\QueryException;
use Illuminate\Support\Str;

class CreateClient extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'client:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a client user using the provided credentials.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $username = $this->ask('Client Username');
        $email = $this->ask('Client Email');
        $password = $this->ask('Client Password');
        $uuid = Str::uuid()->toString();
        $client = new Client();
        $client->password = Hash::make($password);
        $client->name = $username;
        $client->email = $email;
        $client->id = $uuid;
        try {
            $client->save();
        } catch(QueryException $e) {
            $this->error('Client could not be created.');
            $this->error('A client with the same email already exists in the database.');
            return;
        }
        $this->info('Client successfully created.');
    }
}
