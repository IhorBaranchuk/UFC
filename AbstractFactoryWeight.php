<?php
/**
 * Created by PhpStorm.
 * User: ihorbaranchuk
 * Date: 02.08.18
 * Time: 1:02
 */


abstract class AbstractFactoryWeight
{
    abstract public function createBoxer();

    abstract public function createKarate();

    abstract public function createWrestler();
}
