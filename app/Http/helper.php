<?php

if (!function_exists('createNotification')) {
    function createNotification($alertType, $message) {
        return [
            'message' => $message,
            'alert-type' => $alertType
        ];
    }
}

function formatNumber($number)
{
    if ($number >= 1000000000) {
        return round($number / 1000000000, 1) . ' B';
    } elseif ($number >= 1000000) {
        return round($number / 1000000, 1) . ' M';
    } elseif ($number >= 1000) {
        return round($number / 1000, 1) . ' k';
    } else {
        return $number;
    }
}


