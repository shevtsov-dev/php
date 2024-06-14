<?php

function test_merge_intervals() {
    assert(merge_intervals([[1, 4], [3, 6], [8, 10]]) == [[1, 6], [8, 10]]);
    assert(merge_intervals([[1, 3], [2, 4], [5, 7], [6, 8]]) == [[1, 4], [5, 8]]);
    assert(merge_intervals([[1, 2], [2, 3], [3, 4]]) == [[1, 4]]);
    assert(merge_intervals([[1, 5], [6, 10]]) == [[1, 5], [6, 10]]);
    assert(merge_intervals([]) == []);
    assert(merge_intervals([[1, 4]]) == [[1, 4]]);
    assert(merge_intervals([[1, 10], [2, 6], [8, 10]]) == [[1, 10]]);

echo "Все тесты пройдены!";
}
