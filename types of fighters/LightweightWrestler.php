<?php
/**
 * Created by PhpStorm.
 * User: ihorbaranchuk
 * Date: 02.08.18
 * Time: 16:00
 */

class LightweightWrestler implements Wrestler
{

    public function stifle()
    {
        echo "Легковесовой Борец Проводит Удушающий";
    }
}
$HabibNurmamomedov = new LightweightWrestler();