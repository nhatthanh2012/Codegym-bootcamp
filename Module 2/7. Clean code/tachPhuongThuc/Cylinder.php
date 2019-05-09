<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 26/10/2018
 * Time: 22:50
 */
class Cylinder
{
    public function getBaseArea()
    {
        $baseArea = pi() * $radius * $radius;
        return $baseArea;
    }
    public function getPerimeter()
    {
        $perimeter = 2 * pi() * $radius;
        return $perimeter;
    }
    public function getVolume($radius, $height)
    {               
        $perimeter = $this->getPerimeter();
        $baseArea = $this->getBaseArea();
        $volume = $perimeter * $height + 2 * $this->baseArea;
        return $volume;
    }
}