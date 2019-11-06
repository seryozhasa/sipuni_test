<?php

declare(strict_types=1);

namespace App\Sort;

/**
 *
 * @author sergey seryozhasafonov@gmail.com
 */
class Sort implements SortInterface
{
    public function sort(string $string): string
    {
        $words = \explode(' ', $string);

        $result = array_map(function (string $word) {
            return $this->sortWord($word);
        }, $words);

        return \implode(' ', $result);
    }

    private function sortWord(string $word): string
    {
        $letters = $this->wordToLetters($word);
        \sort($letters);
        return \implode('', $letters);
    }

    /**
     * @param string $string
     * @return array
     */
    private function wordToLetters(string $string): array
    {
        $strlen = mb_strlen($string);
        $letters = [];
        while ($strlen) {
            $letters[] = mb_substr($string, 0, 1, "UTF-8");
            $string = mb_substr($string, 1, $strlen, "UTF-8");
            $strlen = mb_strlen($string);
        }
        return $letters;
    }
}