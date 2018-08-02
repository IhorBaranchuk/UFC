<?php
/**
 * Created by PhpStorm.
 * User: ihorbaranchuk
 * Date: 02.08.18
 * Time: 1:30
 */

class LightweightFactory extends AbstractFactoryWeight
{


    public function createBoxer()
    {
        return new LightweightBoxer();
    }


    public function createKarate()
    {
        return new LightweightKarate();
    }


    public function createWrestler()
    {
        return new LightweightWrestler();
    }
}