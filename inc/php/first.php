<?php
/**
 * Created by PhpStorm.
 * User: Hasak
 * Date: 19.05.2016.
 * Time: 19:54
 */
?>

<div class="container-fluid" id="pan">
    <img src="/inc/img/pan.jpg" alt="Gradina">
</div>
<nav class="navbar navbar-default">
    <div class="container-fluid col-lg-offset-2 col-md-offset-1">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><span><img src="/inc/img/logo.png" id="logoin"></span> Tešanj</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <?php
                $q=mysqli_query($c,"select * from nav order by ID asc");
                while($b=mysqli_fetch_array($q)){
                    echo" <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><span class='".$b['Icon']." fa-fw'></span>&nbsp; ".$b['Name']."</a>
                    <ul class=\"dropdown-menu\">";
                    $q2=mysqli_query($c,"select * from subnav where SubID='".$b['ID']."'");
                    while($b2=mysqli_fetch_array($q2)){
                        echo"<li><a href='/".ulink($b['Name'])."/".ulink($b2['Name'])."'>".$b2['Name']."</a></li>";
                    }
                    echo"</ul>
                </li>";
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
