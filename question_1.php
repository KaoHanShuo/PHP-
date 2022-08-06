<?php

/**
 * 兩者相同之處；
 * 都有油門發動、加速、煞車、熄火
 * 
 * 兩者相異之處：
 * 只有汽車有雨刷功能
 * 輪子數量也不一樣
 */
interface Car
{
    public function engineStar();
    public function accelerator();
    public function brake();
    public function engineOff();
}

interface OnlyVehicle
{
    public function wiperWipe();
}

class Motorcycle implements Car
{
    public $wheel = 2;

    public function engineStar()
    {
        echo "引擎發動";
    }

    public function accelerator()
    {
        echo "加速";
    }

    public function brake()
    {
        echo "煞車";
    }

    public function engineOff()
    {
        echo "熄火";
    }
}

class Vehicle implements Car, OnlyVehicle
{
    public $wheel = 4;
    public function engineStar()
    {
        echo "引擎發動";
    }

    public function accelerator()
    {
        echo "加速";
    }

    public function brake()
    {
        echo "煞車";
    }

    public function engineOff()
    {
        echo "熄火";
    }

    public function wiperWipe()
    {
        echo "雨刷刷擋風玻璃";
    }
}
?>