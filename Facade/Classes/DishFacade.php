<?php
namespace Facade\Classes;

class DishFacade
{
    public static function prepare(string $dish)
    {
        switch ($dish) {
            case 'borsch' :
                $borsch = new Borsch();
                $borsch->prepare();
                break;
            case 'plow' :
                $borsch = new Plow();
                $borsch->prepare();
                break;
            case 'ragu' :
                $borsch = new Ragu();
                $borsch->prepare();
                break;
            case 'blini' :
                $borsch = new Blini();
                $borsch->prepare();
                break;
            default:
                echo "Sorry! We don't prepare this dish!";
        }
    }
}