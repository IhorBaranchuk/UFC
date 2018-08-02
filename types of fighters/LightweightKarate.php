<?php
/**
 * Created by PhpStorm.
 * User: ihorbaranchuk
 * Date: 02.08.18
 * Time: 16:00
 */

class LightweightKarate implements Karate
{
    public function Punch()
    {
        echo "Легковесовой Каратист наносит удар Рукой";
    }

    public function kick()
    {
        echo "Легковесовой Каратист наносит удар Ногой";
    }
}