<?php

declare(strict_types=1);

namespace UmiTop\UmiCore\Key;

interface KeyInterface
{
    const VERSION_BASIC = 0;
    const VERSION_HD = 1;

    public function toBytes(): string;
}
