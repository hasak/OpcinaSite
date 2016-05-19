<?php
/**
 * Created by PhpStorm.
 * User: Hasak
 * Date: 09.06.2016.
 * Time: 21:02
 */
if($nesto){
    echo"<ol class=\"breadcrumb\">";
    $bc="<li><a href=\"/\">Početna</a></li>";
    if(isset($idsub)){
        $q=mysqli_query($c,"select * from subnav where ID='".$idsub."'");
        $qq=mysqli_fetch_array($q);
        $qqq=mysqli_query($c,"select * from nav where ID='".$qq['SubID']."'");
        $qqqq=mysqli_fetch_array($qqq);
        $bc.="<li><a href='/".ulink($qqqq['Name'])."'>".$qqqq['Name']."</a></li><li class='active'>".$qq['Name']."</li>";
    }
    else{
        $qqq=mysqli_query($c,"select * from nav where ID='".$idnav."'");
        $qqqq=mysqli_fetch_array($qqq);
        $bc.="<li class='active'>".$qqqq['Name']."</li>";

    }

    echo $bc;
    echo"</ol>";
    echo"<div class=\"list-group text-left panel-default\"><li class='list-group-item panel-heading text-center'><h3 class='panel-title'>";

    if(isset($idsub)){
        $q=mysqli_query($c,"select * from subnav where ID='".$idsub."'");
        $qq=mysqli_fetch_array($q);
        $qqq=mysqli_query($c,"select * from nav where ID='".$qq['SubID']."'");
        $qqqq=mysqli_fetch_array($qqq);
        echo $qqqq['Name'];
    }
    else echo "Početna";

    echo"</h3></li>";

    if(isset($idsub)){
        $q=mysqli_query($c,"select * from subnav where ID='".$idsub."'");
        $qq=mysqli_fetch_array($q);
        $qqq=mysqli_query($c,"select * from subnav where SubID='".$qq['SubID']."'");
        while($qqqq=mysqli_fetch_array($qqq)){
            echo"<a href='/".ulink($qq['Name'])."/".ulink($qqqq['Name'])."' class='list-group-item'>".$qqqq['Name']."</a>";
        }
    }
    else{
        $qqq=mysqli_query($c,"select * from nav");
        while($qqqq=mysqli_fetch_array($qqq)){
            echo"<a href='".ulink($qqqq['Name'])."' class='list-group-item'>".$qqqq['Name']."</a>";
        }

    }

    echo"</div>";

    echo"
<div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Tešanj iz zraka</h3>
                </div>
                <div class=\"panel-body\">
                    <iframe width=\"100%\" height=\"auto\" src=\"https://www.youtube.com/embed/yL9-DsZpXaA\" frameborder=\"0\" allowfullscreen></iframe>
                </div>
            </div>

<div class=\"list-group text-left panel-default\">
                <li class=\"panel-heading list-group-item text-center\">
                    <h3 class=\"panel-title\">Javni oglasi</h3>
                </li>
                    <a href='#' class='list-group-item'>Odluka o izboru najpovoljnijeg ponuđača-Kanalizacija II faza</a>
                <a href='#' class='list-group-item'>Prodaja vatrogasnog vozila</a>
                <a href='#' class='list-group-item'>Rasvjeta Mračaj - Potočani</a>
                <a href='#' class='list-group-item'>Dodjela novčanih sredstava za obnovu uništenih i oštećenih stambenih objekata</a>
            
            </div>";
}
else echo" <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Presjedavajući OV, Načelnik</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-xs-6\">
                            <a href=\"#\" class=\"center-block\">
                                <img src=\"/inc/img/ov.png\" alt=\"Općinsko vijeće\" class=\"panimg\">
                            </a>
                        </div>
                        <div class=\"col-xs-6\">
                            <a href=\"#\" class=\"center-block\">
                                <img src=\"/inc/img/on.png\" alt=\"Općinski načelnik\" class=\"panimg\">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Tešanj iz zraka</h3>
                </div>
                <div class=\"panel-body\">
                    <iframe width=\"100%\" height=\"auto\" src=\"https://www.youtube.com/embed/yL9-DsZpXaA\" frameborder=\"0\" allowfullscreen></iframe>
                </div>
            </div>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Pratite nas!</h3>
                </div>
                <div class=\"panel-body\">
                    <a href=\"https://www.facebook.com/Općina-Tešanj-510993058992566\" class=\"btn btn-social-icon btn-lg btn-facebook\">
                        <span class=\"fa fa-facebook\"></span>
                    </a>
                    <a href=\"https://twitter.com/OpcinaTesanj\" class=\"btn btn-social-icon btn-lg btn-twitter\">
                        <span class=\"fa fa-twitter\"></span>
                    </a>
                    <a href=\"https://www.youtube.com/channel/UCBPhH4jlFelDbJrQ8PrjGgg\" class=\"btn btn-social-icon btn-lg btn-google\">
                        <span class=\"fa fa-youtube\"></span>
                    </a>
                    
                    <a href=\"https://play.google.com/store/apps/details?id=ba.leftor.tesanj\" class=\"btn btn-social-icon btn-lg btn-android\">
                        <span class=\"fa fa-android\"></span>
                    </a>
                    
                    <a href=\"https://itunes.apple.com/us/app/opcina-tesanj/id907450404?ls=1&mt=8\" class=\"btn btn-social-icon btn-lg btn-github\">
                        <span class=\"fa fa-apple\"></span>
                    </a>
                </div>
            </div>";