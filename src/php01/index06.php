<?php
function getSquareArea($base, $height) {
    return $base * $height;
}
function getTriangleArea($base, $height) {
    return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height) {
    return ($upperBase + $lowerBase ) * $height / 2;
}
echo "四角形＝" . getSquareArea(5, 5) . "<br />";
echo "三角形＝" . getTriangleArea(7, 8) . "<br />";
echo "台形＝" . getTrapezoidArea(4, 5, 4);