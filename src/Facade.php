<?php
/*
 * Copyright (c) 2021 NobiDev
 */

declare(strict_types=1);

namespace NobiDev\AppUpdater;

use Illuminate\Support\Facades\Facade as BaseFacade;

/**
 * @package NobiDev\AppUpdater
 */
class Facade extends BaseFacade
{
    /**
     * @noinspection PhpMissingParentCallCommonInspection
     */
    protected static function getFacadeAccessor(): string
    {
        // parent::getFacadeAccessor();
        return Constant::getName();
    }
}
