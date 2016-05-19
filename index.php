<?php
include ("inc/php/vrh.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("inc/php/head.php");?>
    <title>Tešanj</title>
</head>
<body>
<?php

include ("inc/php/first.php");

if(!$nesto){
    echo"<div class=\"container-fluid text-center\">
    <div class=\"row content\">
        <div class=\"col-lg-offset-1 col-sm-8 col-lg-7 text-left\">
            <h2>Istaknuto</h2>
            <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
                <!-- Indicators -->
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
                    <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class=\"carousel-inner\" role=\"listbox\">
                    <div class=\"item active\">
                        <a href='/aktuelnosti/novosti/prijem-najboljih-ucenika/1'>
                            <img src=\"/inc/img/car1.jpg\" alt=\"Chania\">
                            <div class=\"carousel-caption\">
                                <p>Prijem najboljih učenika</p>
                            </div>
                        </a>
                    </div>

                    <div class=\"item\">
                        <a href='/aktuelnosti/novosti/prijem-najboljih-ucenika/1'>
                            <img src=\"/inc/img/car2.jpg\" alt=\"Chania\">
                            <div class=\"carousel-caption\">
                                <p>Potpisani ugovori za Najbolje poslovne ideje mladih</p>
                            </div>
                        </a>
                    </div>

                    <div class=\"item\">
                        <a href='/aktuelnosti/novosti/prijem-najboljih-ucenika/1'>
                            <img src=\"/inc/img/car3.jpg\" alt=\"Flower\">
                            <div class=\"carousel-caption\">
                                <p>Općini Tešanj u Podgorici svečano uručen BFC certifikat</p>
                            </div>
                        </a>
                    </div>
                </div>
                
                <!-- Left and right controls
                <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>-->
                
                
            </div>
                <h2>Novosti</h2>
                <div class='row'>
                <div class='col-sm-4'>
                    <div class='well'>
                        <a href='/aktuelnosti/novosti/prijem-najboljih-ucenika/1'><img src='/inc/img/nov1.jpg' alt='' class='img-responsive img-rounded'>
                        <h4>Ugovori za I dio kapitalnih projekata</h4></a>
                        <p>Danas su u Kabinetu Općinskog načelnika, nakon provedene procedure javne nabavke, potpisani ugovori za prvi dio kapitalnih projekata za 2016. godinu.</p>
                    </div>
                </div>
                <div class='col-sm-4'>
                     <div class='well'>
                        <a href='/aktuelnosti/novosti/prijem-najboljih-ucenika/1'><img src='/inc/img/nov2.jpg' alt='' class='img-responsive img-rounded'>
                        <h4>Ponovljeni javni poziv za prodaju vatrogasnog vozila</h4></a>
                        <p>Predmet javnog poziva je prikupljanje zatvorenih pismenih ponuda za izbor ponuđača za prodaju rabljenog vatrogasnog vozila.</p>
                     </div>
                </div>

                <div class='col-sm-4'>
                    <div class='well'>
                        <a href='/aktuelnosti/novosti/prijem-najboljih-ucenika/1'><img src='/inc/img/nov3.jpg' alt='' class='img-responsive img-rounded'>
                        <h4>CIK: Javni poziv za izbor potencijalnih trenera</h4></a>
                        <p>Javni poziv za izbor potencijalnih trenera za obuku predsjednika i članova biračkih odbora.</p>
                    </div>
                </div>

</div>
<div class='row'>
                <div class='col-sm-4'>
                    <div class='well'>
                        <a href='/aktuelnosti/novosti/prijem-najboljih-ucenika/1'><img src='/inc/img/nov4.jpg' alt='' class='img-responsive img-rounded'>
                        <h4>Javni poziv: Rasvjeta Mračaj - Potočani</h4></a>
                        <p>Javni poziv strankama u postupku za uvid u Idejni projekat Javna rasvjeta Mračaj - Potočani i Rješenje urbanističke saglasnosti za izgradnju trase vanjske-javne rasvjete u MZ Jelah, trasa Mračaj - Potočani</p>
                    </div>
                </div>
                <div class='col-sm-4'>
                     <div class='well'>
                        <a href='/aktuelnosti/novosti/prijem-najboljih-ucenika/1'><img src='/inc/img/nov5.jpg' alt='' class='img-responsive img-rounded'>
                        <h4>BILD: Besplatne radionice</h4></a>
                        <p>Da li bi ste voljeli aktivno govoriti engleski sa Američkim studentima?
Da li se želite okušati u Java programiranju?
Pridružite nam se na info sastanku i saznajte više o obuci koju nudimo i predstojećim ljetnim institutima.</p>
                     </div>
                </div>

                <div class='col-sm-4'>
                    
                    <div class='well'>
                        <a href='/aktuelnosti/novosti/prijem-najboljih-ucenika/1'><img src='/inc/img/nov6.jpg' alt='' class='img-responsive img-rounded'>
                        <h4>Harmonizacija podataka</h4></a>
                        <p>Preuzimanjem podataka iz katastra zemljišta i Zemljišne knjige 8. juna 2016. godine počela je harmonizacija podataka katastra i zemljišne knjige za katastarske općine: Novo Selo, Tešanjka, Rosulje i Jevadžije.</p>
                    </div>

                </div>

</div>
        
        <h2>e-Uprava</h2>
        <div class='jumbotron text-center'>
        <div class='row'>
            <div class='col-sm-6'>
                <div class='row'>
                    <div class='col-xs-6'>
                        <a href='http://opcina-tesanj.no-ip.biz:9333/tesanj.ba/'><i class='fa fa-file-text-o'></i>
                        <h4>Provjera statusa predmeta</h4></a>
                     </div>
                    <div class='col-xs-6'>
                        <a href='#'><i class='fa fa-phone'></i>
                        <h4>Call center</h4></a>
                     </div>
              </div>
            </div>
             <div class='col-sm-6'>
                   <div class='row'>
                    <div class='col-xs-6'>
                        <a href='http://opcina-tesanj.no-ip.biz:9333/ifc/egfVwOdlukaJedinice.aspx'><i class='fa fa-file-o'></i>
                        <h4>e-Obrasci</h4></a>
                     </div>
                    <div class='col-xs-6'>
                        <a href='http://opcina-tesanj.no-ip.biz/ppTesanj/'><i class='glyphicons glyphicons-cadastral-map '></i>
                        <h4>GIS</h4></a>
                     </div>
              </div>
            </div>
        </div>
</div>
        
        
        
        
        
</div>
        <div class=\" col-sm-4 col-lg-3 sidenav\">
           ";
    
    include('inc/php/side.php');
    
    
    
    echo"
        </div>
    </div>
</div>";
}
///////////////////////////////////
else{

    echo"<div class=\"container-fluid text-center\">
    <div class=\"row content\">
    

<div class=\"col-sm-8 col-sm-push-4 col-lg-7 text-left\">
<h2>";
    if(isset($nameart))
        echo $nameart;else
    if(isset($namesub))
        echo $namesub;
    else echo $namenav;
    echo"</h2>";

    if(isset($nameart)){
        echo"<div class='row'>
<div class='col-sm-5'>
<img src='/inc/img/car1.jpg' alt='img' class='img-responsive img-rounded pull-left pnt' data-toggle=\"modal\" data-target=\"#myModal\">
</div><div class='col-sm-7'>
<p class='lead'><em>Općinski načelnik Suad Huskić primio je danas najbolje učenike sa područja općine Tešanj.</em></p>
<p class='text-muted'><span class='fa fa-calendar'></span> 15.06.2016&nbsp;&nbsp;<span class='fa fa-clock-o'></span> 10:35&nbsp;&nbsp;<span class='fa fa-user'></span>&nbsp;<a href='#'>Hasak</a></p></div>
</div><br><div class='row'><div class='col-sm-12'>
<p>Općinski načelnik Suad Huskić primio je danas najbolje učenike devet osnovnih i tri srednje škole sa područja općine Tešanj. Riječ je o tradicionalnom prijemu Općinskog načelnika koji se svake godine održava za učenike generacije, učenike sa posebnom diplomom sa prosjekom 5.0 tokom cijelog školovanja, kao i za direktore škola, profesore i roditelje. 
</p><p>Ovom prilikom, Općinski načelnik je razgovarao sa učenicima generacije o planovima za budućnost i njihovom daljem školovanju. Prijemu je prisustvovao i predsjedavajući Općinskog vijeća Senad Subašić.</p>
<blockquote><p>Ovo je samo dio aktivnosti koje provodimo u cilju afirmacije rada, znanja, i mladosti. Najbolja investicija za prosperitet i razvoj je investicija u znanje</p>
<footer class='blkftr'>Općinski načelnik, mr. sc. Suad Huskić, profesor</footer></blockquote>
</div></div>




<div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog modal-lg\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">$nameart</h4>
      </div>
      <div class=\"modal-body\">
        <img src='/inc/img/car1.jpg' alt='car' class='img-responsive'>
      </div>
    </div>

  </div>
</div>";
    }
    else{
        echo"
<div class='row'>
    <div class='col-sm-4'>
        <a href='/aktuelnosti/novosti/prijem-najboljih-ucenika/1'><img class='img-rounded img-responsive mrg' src='/inc/img/car1.jpg' alt='article'></a>
    </div>
    <div class='col-sm-8'>
        <a href='/aktuelnosti/novosti/prijem-najboljih-ucenika/1'><h3>Prijem najboljih učenika</h3></a>
        <p class='text-muted'><span class='fa fa-calendar'></span> 15.06.2016&nbsp;&nbsp;<span class='fa fa-clock-o'></span> 10:35&nbsp;&nbsp;<span class='fa fa-user'></span>&nbsp;<a href='#'>Hasak</a></p>
        <p>Općinski načelnik Suad Huskić primio je danas najbolje učenike sa područja općine Tešanj.</p>
    </div>
</div><hr>

<div class='row'>
    <div class='col-sm-4'>
        <a href='/aktuelnosti/novosti/prijem-najboljih-ucenika/1'><img class='img-rounded img-responsive mrg' src='/inc/img/car2.jpg' alt='article'></a>
    </div>
    <div class='col-sm-8'>
        <a href='/aktuelnosti/novosti/prijem-najboljih-ucenika/1'><h3>Potpisani ugovori za Najbolje poslovne ideje mladih</h3></a>
        <p class='text-muted'><span class='fa fa-calendar'></span> 15.06.2016&nbsp;&nbsp;<span class='fa fa-clock-o'></span> 10:38&nbsp;&nbsp;<span class='fa fa-user'></span>&nbsp;<a href='#'>Hasak</a></p>
        <p>U okviru Sajma privrede, Općinski načelnk Suad Huskić potpisao je ugovore o poticajima u svrhu pokretanja vlastitih biznisa sa devet budućih poduzetnika.</p>
    </div>
</div><hr>

<div class='row'>
    <div class='col-sm-4'>
        <a href='/aktuelnosti/novosti/prijem-najboljih-ucenika/1'><img class='img-rounded img-responsive mrg' src='/inc/img/car3.jpg' alt='article'></a>
    </div>
    <div class='col-sm-8'>
        <a href='/aktuelnosti/novosti/prijem-najboljih-ucenika/1'><h3>Općini Tešanj u Podgorici svečano uručen BFC certifikat</h3></a>
        <p class='text-muted'><span class='fa fa-calendar'></span> 15.06.2016&nbsp;&nbsp;<span class='fa fa-clock-o'></span> 10:46&nbsp;&nbsp;<span class='fa fa-user'></span>&nbsp;<a href='#'>Hasak</a></p>
        <p>Danas je u Podgorici, gdje se održava Četvrti Regionalni kongres, svečano uručen certifikat po kojem Općina Tešanj ispunjava uvjete i stiče naziv “Povoljno poslovno okruženje” (Business Friendly Municipality – BFC). </p>
    </div>
</div><hr>
";
    }
    echo"</div>

<div class=\" col-sm-pull-8 col-sm-4 col-lg-pull-6 col-lg-3 sidenav\">
        ";
    include('inc/php/side.php');
    echo"
</div>

</div></div>";
}

include ("inc/php/last.php");

?>
</body>
</html>
