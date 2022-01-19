<?php

namespace zoparga\QrCodeStatistic\Commands;

use Illuminate\Console\Command;

class QrCodeStatisticCommand extends Command
{
    public $signature = 'laravel-qr-code-statistic';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
