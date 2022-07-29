<?php

namespace Kiukishenkaec\Views\Console\Commands;

use Illuminate\Console\Command;

class RefreshViewsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'views:refresh';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Переписывает пути к вьюхам в роутах';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $asc = $this->ask('Начать переопределять пути к views?');

        dd($asc);
    }
}
