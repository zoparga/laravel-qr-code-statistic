<?php

namespace zoparga\QrCodeStatistic\Http\Middleware;

use Closure;
use zoparga\QrCodeStatistic\Models\QrCodeStatistic as ModelsQrCodeStatistic;

class GetQrCodeStatistic
{
    public function handle($request, Closure $next)
    {
        if (request('qr_code_source') || request('qr_code_description')) {
            $qrCodeStatistic = ModelsQrCodeStatistic::create([
                'qr_code_source' => request('qr_code_source'),
                'qr_code_description' => request('qr_code_description'),
            ]);
        }

        return $next($request);
    }
}
