<?php
/**
 * Created by PhpStorm.
 * User: Hasak
 * Date: 19.05.2016.
 * Time: 21:09
 */
$c=mysqli_connect("localhost","hasakba_tesanj","opcina231","hasakba_tesanj");
if(mysqli_errno($c)){
    die("Error".mysqli_error($c));
}