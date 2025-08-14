<?php

function msToMinutes($ms)
{
    $seconds = floor($ms / 1000);

    $minutes = str_pad(floor((int) ($seconds / 60) % 60), 2, 0, STR_PAD_LEFT);
    $seconds = str_pad($seconds % 60, 2, 0, STR_PAD_LEFT);

    return "{$minutes}:{$seconds}";
}

function normalizeString(?string $s): string
{
    $s = $s ?? '';
    $s = preg_replace('/\s+/', ' ', $s);
    $s = trim($s);

    return mb_strtolower($s);
};
