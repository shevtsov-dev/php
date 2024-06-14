<?php
// functions.php

function merge_intervals($intervals) {
    if (empty($intervals)) {
        return [];
    }

    usort($intervals, function($a, $b) {
        return $a[0] <=> $b[0];
    });

    return merge_recursive([$intervals[0]], array_slice($intervals, 1));
}

function merge_recursive($merged, $intervals) {
    if (empty($intervals)) {
        return $merged;
    }

    $last = $merged[count($merged) - 1];
    $current = $intervals[0];

    if ($current[0] <= $last[1]) {
        $merged[count($merged) - 1] = [$last[0], max($last[1], $current[1])];
    } else {
        $merged[] = $current;
    }

    return merge_recursive($merged, array_slice($intervals, 1));
}
?>