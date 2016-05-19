<?php
/**
 * Created by PhpStorm.
 * User: Hasak
 * Date: 19.05.2016.
 * Time: 21:09
 */

include ("db.php");
mysqli_set_charset($c,"utf8");
date_default_timezone_set("europe/sarajevo");

function bosrep($str){
    $str=str_ireplace("š","s",$str);
    $str=str_ireplace("đ","dj",$str);
    $str=str_ireplace("č","c",$str);
    $str=str_ireplace("ć","c",$str);
    $str=str_ireplace("ž","z",$str);

    $str=str_ireplace("Š","s",$str);
    $str=str_ireplace("Đ","dj",$str);
    $str=str_ireplace("Č","c",$str);
    $str=str_ireplace("Ć","c",$str);
    $str=str_ireplace("Ž","z",$str);
    return $str;
}

function ulink($str){
    $str=strtolower($str);
    $str=bosrep($str);
    $str=str_ireplace(" ","-",$str);
    $str=str_ireplace("\"","-",$str);
    $str=preg_replace("/(-)+/","-",$str);
    return $str;
}

//echo $_GET['nav']." ". $_GET['subnav'];
if(isset($_GET['article']) and $_GET['article']!=""){
    $nameart="Prijem najboljih učenika";

}

if(isset($_GET['subnav']) and $_GET['subnav']!=""){
    $nesto=true;
    $linksub=substr($_GET['subnav'],1,strlen($_GET['subnav'])-1);
    $q=mysqli_query($c,"select * from subnav");
    while($b=mysqli_fetch_array($q)){
        if(ulink($b['Name'])==$linksub){
            $namesub=$b['Name'];
            $idsub=$b['ID'];
            break;
        }
    }
}
else if(isset($_GET['nav'])){
    $nesto=true;
    $linknav=$_GET['nav'];
    $q=mysqli_query($c,"select * from nav");
    while($b=mysqli_fetch_array($q)){
        if(ulink($b['Name'])==$linknav){
            $namenav=$b['Name'];
            $idnav=$b['ID'];
            break;
        }
    }
}
else $nesto=false;