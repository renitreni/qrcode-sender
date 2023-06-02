<?php

namespace App\Actions;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeGenerate
{
    public static function execute()
    {
        $path = time().'.png';
        QrCode::format('png')->size(100)->generate(request()->url(), $path);

        return $path;
    }
}
