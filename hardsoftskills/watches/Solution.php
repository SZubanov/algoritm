<?php

namespace watches;

class Solution
{
    function solve($time)
    {
        list($hours, $minutes) = explode(':', $time);

        $hourAngle = fmod(0.5 * (60 * ($hours % 12)), 360);
        $minuteAngle = 6 * $minutes;

        $angleDiff = abs($hourAngle - $minuteAngle);
        $angleDiff = min($angleDiff, 360 - $angleDiff);

        return $angleDiff;
    }
}

$time = '12:17';
$angle = (new Solution())->solve($time);
echo "Угол между часовой и минутной стрелками в $time: $angle градусов";


