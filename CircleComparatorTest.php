<?php
/**
 * Created by PhpStorm.
 * User: thienhmp
 * Date: 28/01/2019
 * Time: 15:14
 */

include "CircleComparator.php";

$circleOne = new Circle(10,"circleOne");
$circleTwo = new Circle(6,"circleTwo");
$circleComparator = new CircleComparator();
var_dump($circleComparator->compare($circleOne, $circleTwo));