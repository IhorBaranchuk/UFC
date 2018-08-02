<?php
/**
 * Created by PhpStorm.
 * User: ihorbaranchuk
 * Date: 02.08.18
 * Time: 16:13
 */

class HeavyweightKarate implements Karate
{
    public function Punch()
    {
        echo "Тяжеловесовой Каратист наносит удар Рукой";
    }

    public function kick()
    {
        echo "Тяжеловесовой Каратист наносит удар Ногой";
    }
}