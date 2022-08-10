<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;

class CreateUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'CreateUserCommand:create {id} {comments}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to create new user with command console';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Validate argument 

        $comments = $this->argument('comments');

        $validator = Validator::make([
            'comments' => $comments,
        ], [
            'comments' => 'required|string|not_in:0'
        ]);

        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                $this->error($error);
            }

            return 1;
        }

        $user = User::find($this->argument('id'));
        if ($user === null) {
            $this->error("Invalid ID. Exiting...");
            return 1;
        }

        // Append users id to comment
        $user->comments .= $this->argument('comments');
        $user->save();
        $this->info('The comment was added successful!');
    }
}
