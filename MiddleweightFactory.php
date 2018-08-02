<?php
/**
 * Created by PhpStorm.
 * User: ihorbaranchuk
 * Date: 02.08.18
 * Time: 1:33
 */

class MiddleweightFactory extends AbstractFactoryWeight
{


    public function createBoxer()
    {
        return new MiddleweightBoxer();
    }


    public function createKarate()
    {
        return new MiddleweightKarate();
    }


    public function createWrestler()
    {
        return new MiddleweightWrestler();
    }
}