<?php
/**
 * Created by PhpStorm.
 * User: ihorbaranchuk
 * Date: 02.08.18
 * Time: 16:13
 */

class HeavyweightBoxer implements Boxer
{
    public function Punch()
    {
        echo "Тяжеловесовой Боксер наносит удар Рукой";

    }
}
$IronMike = new HeavyweightBoxer();
