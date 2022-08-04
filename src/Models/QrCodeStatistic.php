<?php

namespace zoparga\QrCodeStatistic\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QrCodeStatistic extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'qr_code_statistics';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',

    ];

    protected $fillable = [
        'qr_code_source',
        'qr_code_description',
    ];
}
