<?php
/**
 * Created by PhpStorm.
 * User: bruno.duran
 * Date: 17/06/2017
 * Time: 17:24
 */

namespace varun\falebella;


class Main
{
    public  function executeChallenge(){

        for($i =1; $i <=100;$i++)
        {
            $calcForm = new Calculate();
            $result = new Result();
            $result -> number = $i;
            $result -> remainder3  = $calcForm->calcRemainder($i,3);
            $result -> remainder5  = $calcForm->calcRemainder($i,5);
            $result -> remainder35 = $calcForm->addRemainder($result->remainder3,$result->remainder5);
            $write = new Writer();
            $write->writeAnswer($result);


        }
    }

}
