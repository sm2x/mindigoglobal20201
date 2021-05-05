<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\User;

use App\BinaryTree;

use App\MatchingBonus;

use App\DirectReferral;

use App\Order;

use App\Notification;

use App\UserWallet;

class CalculateMatchingBonus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'matching_bonus:calculate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Calculate matching bonus for due users';

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
     * @return int
     */
    public function handle()
    {
        return 0;
    }
}
