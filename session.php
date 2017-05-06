<?php
/**
 * Created by PhpStorm.
 * User: Steve
 * Date: 06/05/2017
 * Time: 06:05
 */

if(isset($_SESSION))
{
    print "Session has started!";
} else {
    print "Session has not started";
}