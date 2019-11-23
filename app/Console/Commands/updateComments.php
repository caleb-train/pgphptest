<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\User;

class updateComments extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:comments {id} {comments*}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'update user comments';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $id = $this->argument('id');
        $comments = implode(' ', $this->argument('comments'));

        if (!is_numeric($id))
            return $this->error('Invalid id');

        try {
            $user = User::find($id);
        } catch (Exception $error) {
            return $this->error('Could not update database: ' . $error->getMessage());
        }

        if (is_null($user)) return $this->error('No such user (3)');

        $user->comments .= "\n" . htmlentities($comments);

        $user->save();

        return $this->info('OK');
    }
}
