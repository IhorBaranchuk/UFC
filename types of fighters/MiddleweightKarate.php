<?php
/**
 * Created by PhpStorm.
 * User: ihorbaranchuk
 * Date: 02.08.18
 * Time: 16:11
 */

class MiddleweightKarate implements Karate
{
    public function Punch()
    {
        echo "Средневесовой Каратист наносит удар Рукой";
    }

    public function kick()
    {
        echo "Средневесовой Каратист наносит удар Ногой";
    }
}
$Pashka = new MiddleweightKarate();