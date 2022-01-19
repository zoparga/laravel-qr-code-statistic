<?php

namespace zoparga\QrCodeStatistic\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \zoparga\QrCodeStatistic\QrCodeStatistic
 */
class QrCodeStatistic extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-qr-code-statistic';
    }
}
