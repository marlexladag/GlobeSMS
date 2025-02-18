<?php

namespace MarlexLadag\GlobeSMS\Commands;

use Illuminate\Console\Command;

class GlobeSMSCommand extends Command
{
    public $signature = 'globesms';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
