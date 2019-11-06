<?php

declare(strict_types=1);

namespace Tests\Sort;

use PHPUnit\Framework\TestCase;
use App\Sort\Sort;

/**
 *
 * @author sergey seryozhasafonov@gmail.com
 */
class SortTest extends TestCase
{
    public function testSort(): void
    {
        $sort = new Sort();

        self::assertEquals('elmno aegnor aaabnn aelpp', $sort->sort('lemon orange banana apple'));
        self::assertEquals('илмно аеилнпсь аабнн бклооя', $sort->sort('лимон апельсин банан яблоко'));
        self::assertEquals('ααββγγ αααβββγγγ', $sort->sort('αβγαβγ αβγαβγαβγ'));
    }
}