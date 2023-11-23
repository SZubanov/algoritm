<?php

namespace zodiac;

use DateTime;

class Solution
{
    private static array $zodiacIntervals = [
        'Водолей' => ['21.01', '19.02'],
        'Рыбы' => ['20.02', '20.03'],
        'Овен' => ['21.03', '20.04'],
        'Телец' => ['21.04', '21.05'],
        'Близнецы' => ['22.05', '21.06'],
        'Рак' => ['22.06', '22.07'],
        'Лев' => ['23.07', '21.08'],
        'Дева' => ['22.08', '23.09'],
        'Весы' => ['24.09', '23.10'],
        'Скорпион' => ['24.10', '22.11'],
        'Стрелец' => ['23.11', '22.12'],
        'Козерог' => ['23.12', '20.01'],
    ];

    public function solve($date)
    {
        $dateTime = DateTime::createFromFormat('d.m', substr($date, 0, 5));

        if (!$dateTime) {
            return 'Некорректная дата';
        }


        foreach (self::$zodiacIntervals as $sign => $interval) {
            $start = DateTime::createFromFormat('d.m', $interval[0]);
            $end = DateTime::createFromFormat('d.m', $interval[1]);

            if ($dateTime >= $start && $dateTime <= $end) {
                return $sign;
            }
        }

        return 'Не удалось определить знак зодиака';
    }
}


// Пример использования
$date = '15.08.1452';
$zodiacSign = (new Solution())->solve($date);
echo "Знак зодиака для даты $date: $zodiacSign".PHP_EOL;