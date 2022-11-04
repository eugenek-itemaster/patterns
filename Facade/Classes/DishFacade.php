<?php
namespace Facade\Classes;
class DishFacade
{
    public static function prepareBorsch()
    {
        static::buy();

        static::narezaat();

        static::varka();
    }

    private static function buy()
    {
        $shop = new Shop();
        $shop->buyProducts();
    }

    private static function narezaat()
    {
        $shop = new Nozh();
        $shop->cutProducts();
    }

    private static function varka()
    {
        $shop = new Plita();
        $shop->svaritProducts();
    }
}