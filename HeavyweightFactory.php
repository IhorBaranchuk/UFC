<?php
/**
 * Created by PhpStorm.
 * User: ihorbaranchuk
 * Date: 02.08.18
 * Time: 1:35
 */

class HeavyweightFactory extends AbstractFactoryWeight
{

    public function createBoxer()
    {
        return new HeavyweightBoxer();
    }


    public function createKarate()
    {
        return new HeavyweightKarate();
    }


    public function createWrestler()
    {
        return new HeavyweightWrestler();
    }
}