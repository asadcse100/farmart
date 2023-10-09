<?php

namespace Botble\AuditLog\Facades;

use Botble\AuditLog\AuditLog as BaseAuditLog;
use Illuminate\Support\Facades\Facade;

class AuditLog extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return BaseAuditLog::class;
    }
}
