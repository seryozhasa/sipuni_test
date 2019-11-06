<?php

declare(strict_types=1);

namespace App\Sort;

/**
 *
 * @author sergey seryozhasafonov@gmail.com
 */
interface SortInterface
{
    public function sort(string $string): string;
}