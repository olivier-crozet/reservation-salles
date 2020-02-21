<?php



//le lundi1 au soleil
$monda = strtotime('Monday');
$monday1 = $monda + 28800;
$reqtitrea1 = ("SELECT * FROM reservations WHERE tempsegonde = '$monday1' ");
$req_jointe_bdda1 = mysqli_query($connexion,$reqtitrea1);
    $una = mysqli_num_rows($req_jointe_bdda1);

//lundi 09H 10H
$monda2 = strtotime('Monday');
$monday2 = $monda2 + 28800+3600;
$reqtitrea2 = ("SELECT * FROM reservations WHERE tempsegonde = '$monday2' ");
$req_jointe_bdda2 = mysqli_query($connexion,$reqtitrea2);
    $una2 = mysqli_num_rows($req_jointe_bdda2);

//lundi 10H 11H

$monda3 = strtotime('Monday');
$monday3 = $monda3 + 28800+7200;
$reqtitrea3 = ("SELECT * FROM reservations WHERE tempsegonde = '$monday3' ");
$req_jointe_bdda3 = mysqli_query($connexion,$reqtitrea3);
    $una3 = mysqli_num_rows($req_jointe_bdda3);
   
//lundi 11H 12H

$monda4 = strtotime('Monday');
$monday4 = $monda4 + 28800+10800;
$reqtitrea4 = ("SELECT * FROM reservations WHERE tempsegonde = '$monday4' ");
$req_jointe_bdda4 = mysqli_query($connexion,$reqtitrea4);
    $una4 = mysqli_num_rows($req_jointe_bdda4);

//lundi 12H 13H

$monda5 = strtotime('Monday');
$monday5 = $monda5 + 28800+14400;
$reqtitrea5 = ("SELECT * FROM reservations WHERE tempsegonde = '$monday5' ");
$req_jointe_bdda5 = mysqli_query($connexion,$reqtitrea5);
    $una5 = mysqli_num_rows($req_jointe_bdda5);

//lundi 13H 14H

$monda6 = strtotime('Monday');
$monday6 = $monda6 + 28800+18000;
$reqtitrea6 = ("SELECT * FROM reservations WHERE tempsegonde = '$monday6' ");
$req_jointe_bdda6 = mysqli_query($connexion,$reqtitrea6);
    $una6 = mysqli_num_rows($req_jointe_bdda6);

//lundi 14H 15H

$monda7 = strtotime('Monday');
$monday7 = $monda7 + 28800+21600;
$reqtitrea7 = ("SELECT * FROM reservations WHERE tempsegonde = '$monday7' ");
$req_jointe_bdda7 = mysqli_query($connexion,$reqtitrea7);
    $una7 = mysqli_num_rows($req_jointe_bdda7);





//lundi 15H 16H

$monda8 = strtotime('Monday');
$monday8 = $monda8 + 28800+25200;
$reqtitrea8 = ("SELECT * FROM reservations WHERE tempsegonde = '$monday8' ");
$req_jointe_bdda8 = mysqli_query($connexion,$reqtitrea8);
    $una8 = mysqli_num_rows($req_jointe_bdda8);

//lundi 16H 17H

$monda9 = strtotime('Monday');
$monday9 = $monda9 + 28800+28800;
$reqtitrea9 = ("SELECT * FROM reservations WHERE tempsegonde = '$monday9' ");
$req_jointe_bdda9 = mysqli_query($connexion,$reqtitrea9);
    $una9 = mysqli_num_rows($req_jointe_bdda9);

//lundi 17H 18H 

$monda10 = strtotime('Monday');
$monday10 = $monda10 + 28800+32400;
$reqtitrea10 = ("SELECT * FROM reservations WHERE tempsegonde = '$monday10' ");
$req_jointe_bdda10 = mysqli_query($connexion,$reqtitrea10);
    $una10 = mysqli_num_rows($req_jointe_bdda10);

// lundi 18H 19H

$monda11 = strtotime('Monday');
$monday11 = $monda11 + 28800+36000;
$reqtitrea11 = ("SELECT * FROM reservations WHERE tempsegonde = '$monday11' ");
$req_jointe_bdda11 = mysqli_query($connexion,$reqtitrea11);
    $una11 = mysqli_num_rows($req_jointe_bdda11);




    ////MARDI



//le MARDI C PERMIS
$marda1 = strtotime('Tuesday');
$mardi1 = $marda1 + 28800;
$martedi1 = ("SELECT * FROM reservations WHERE tempsegonde = '$mardi1' ");
$mard1 = mysqli_query($connexion,$martedi1);
    $mar1 = mysqli_num_rows($mard1);

//mardi 09H 10H

$marda2 = strtotime('Tuesday');
$mardi2 = $marda2 + 28800 + 3600 ;
$martedi2 = ("SELECT * FROM reservations WHERE tempsegonde = '$mardi2' ");
$mard2 = mysqli_query($connexion,$martedi2);
    $mar2 = mysqli_num_rows($mard2);

//mardi 10H 11H

$marda3 = strtotime('Tuesday');
$mardi3 = $marda3 + 28800+7200;
$martedi3 = ("SELECT * FROM reservations WHERE tempsegonde = '$mardi3' ");
$mard3 = mysqli_query($connexion,$martedi3);
    $mar3 = mysqli_num_rows($mard3);
   
//mardi 11H 12H

$marda4 = strtotime('Tuesday');
$mardi4 = $marda4 + 28800+10800;
$martedi4 = ("SELECT * FROM reservations WHERE tempsegonde = '$mardi4' ");
$mard4 = mysqli_query($connexion,$martedi4);
    $mar4 = mysqli_num_rows($mard4);

//mardi 12H 13H

$marda5 = strtotime('Tuesday');
$mardi5 = $marda5 + 28800+14400;
$martedi5 = ("SELECT * FROM reservations WHERE tempsegonde = '$mardi5' ");
$mard5 = mysqli_query($connexion,$martedi5);
    $mar5 = mysqli_num_rows($mard5);

//mardi 13H 14H

$marda6 = strtotime('Tuesday');
$mardi6 = $marda6 + 28800+18000;
$martedi6 = ("SELECT * FROM reservations WHERE tempsegonde = '$mardi6' ");
$mard6 = mysqli_query($connexion,$martedi6);
    $mar6 = mysqli_num_rows($mard6);

//mardi 14H 15H

$marda7 = strtotime('Tuesday');
$mardi7 = $marda7 + 28800+21600;
$martedi7 = ("SELECT * FROM reservations WHERE tempsegonde = '$mardi7' ");
$mard7 = mysqli_query($connexion,$martedi7);
    $mar7 = mysqli_num_rows($mard7);

//mardi 15H 16H

$marda8 = strtotime('Tuesday');
$mardi8 = $marda8 + 28800+25200;
$martedi8 = ("SELECT * FROM reservations WHERE tempsegonde = '$mardi8' ");
$mard8 = mysqli_query($connexion,$martedi8);
    $mar8 = mysqli_num_rows($mard8);

//mardi 16H 17H

$marda9 = strtotime('Tuesday');
$mardi9 = $marda9 + 28800+28800;
$martedi9 = ("SELECT * FROM reservations WHERE tempsegonde = '$mardi9' ");
$mard9 = mysqli_query($connexion,$martedi9);
    $mar9 = mysqli_num_rows($mard9);

//mardi 17H 18H 

$marda10 = strtotime('Tuesday');
$mardi10 = $marda10 + 28800 + 32400;
$martedi10 = ("SELECT * FROM reservations WHERE tempsegonde = '$mardi10' ");
$mard10 = mysqli_query($connexion,$martedi10);
    $mar10 = mysqli_num_rows($mard10);

// mardi 18H 19H

$marda11 = strtotime('Tuesday');
$mardi11 = $marda11 + 28800 + 36000;
$martedi11 = ("SELECT * FROM reservations WHERE tempsegonde = '$mardi11' ");
$mard11 = mysqli_query($connexion,$martedi11);
    $mar11 = mysqli_num_rows($mard11);




    ////MERCREDI



//le maire creux dit :
$mercreda1 = strtotime('Wednesday');
$mercredi1 = $mercreda1 + 28800;
$mercre1 = ("SELECT * FROM reservations WHERE tempsegonde = '$mercredi1' ");
$merc1 = mysqli_query($connexion,$mercre1);
    $mer1 = mysqli_num_rows($merc1);

//MECREDI 09H 10H

$mercreda2 = strtotime('Wednesday');
$mercredi2 = $mercreda2 + 3600;
$mercre2 = ("SELECT * FROM reservations WHERE tempsegonde = '$mercredi2' ");
$merc2 = mysqli_query($connexion,$mercre2);
    $mer2 = mysqli_num_rows($merc2);


//MECREDI 10H 11H

$mercreda3 = strtotime('Wednesday');
$mercredi3 = $mercreda3 + 28800 +7200;
$mercre3 = ("SELECT * FROM reservations WHERE tempsegonde = '$mercredi3' ");
$merc3 = mysqli_query($connexion,$mercre3);
    $mer3 = mysqli_num_rows($merc3);
   
//MECREDI 11H 12H

$mercreda4 = strtotime('Wednesday');
$mercredi4 = $mercreda4 + 28800 +10800;
$mercre4 = ("SELECT * FROM reservations WHERE tempsegonde = '$mercredi4' ");
$merc4 = mysqli_query($connexion,$mercre4);
    $mer4 = mysqli_num_rows($merc4);

//MECREDI 12H 13H

$mercreda5 = strtotime('Wednesday');
$mercredi5 = $mercreda5 + 28800 +14400;
$mercre5 = ("SELECT * FROM reservations WHERE tempsegonde = '$mercredi5' ");
$merc5 = mysqli_query($connexion,$mercre5);
    $mer5 = mysqli_num_rows($merc5);

//MECREDI 13H 14H

$mercreda6 = strtotime('Wednesday');
$mercredi6 = $mercreda6 + 28800 +18000;
$mercre6 = ("SELECT * FROM reservations WHERE tempsegonde = '$mercredi6' ");
$merc6 = mysqli_query($connexion,$mercre6);
    $mer6 = mysqli_num_rows($merc6);

//MECREDI 14H 15H

$mercreda7 = strtotime('Wednesday');
$mercredi7 = $mercreda7 + 28800 +21600;
$mercre7 = ("SELECT * FROM reservations WHERE tempsegonde = '$mercredi7' ");
$merc7 = mysqli_query($connexion,$mercre7);
    $mer7 = mysqli_num_rows($merc7);

//MECREDI 15H 16H

$mercreda8 = strtotime('Wednesday');
$mercredi8 = $mercreda8 + 28800 +25200;
$mercre8 = ("SELECT * FROM reservations WHERE tempsegonde = '$mercredi8' ");
$merc8 = mysqli_query($connexion,$mercre8);
    $mer8 = mysqli_num_rows($merc8);

//MECREDI 16H 17H

$mercreda9 = strtotime('Wednesday');
$mercredi9 = $mercreda9 + 28800 +28800;
$mercre9 = ("SELECT * FROM reservations WHERE tempsegonde = '$mercredi9' ");
$merc9 = mysqli_query($connexion,$mercre9);
    $mer9 = mysqli_num_rows($merc9);

//MECREDI 17H 18H 

$mercreda10 = strtotime('Wednesday');
$mercredi10= $mercreda10 + 28800 +32400;
$mercre10 = ("SELECT * FROM reservations WHERE tempsegonde = '$mercredi10' ");
$merc10 = mysqli_query($connexion,$mercre10);
    $mer10 = mysqli_num_rows($merc10);

// MECREDI 18H 19H

$mercreda11 = strtotime('Wednesday');
$mercredi11 = $mercreda11 + 28800 +36000;
$mercre11 = ("SELECT * FROM reservations WHERE tempsegonde = '$mercredi11' ");
$merc11 = mysqli_query($connexion,$mercre11);
    $mer11 = mysqli_num_rows($merc11);




    //// JEUDI






//le jeux dit :

$jedit1 = strtotime('Thursday');
$jeudi1 = $jedit1 + 28800;
$jedi1 = ("SELECT * FROM reservations WHERE tempsegonde = '$jeudi1' ");
$jeud1 = mysqli_query($connexion,$jedi1);
    $jeu1 = mysqli_num_rows($jeud1);
   

//JEUDI 09H 10H

$jedit2 = strtotime('Thursday');
$jeudi2 = $jedit2 + 28800 +3600;
$jedi2 = ("SELECT * FROM reservations WHERE tempsegonde = '$jeudi2' ");
$jeud2 = mysqli_query($connexion,$jedi2);
    $jeu2 = mysqli_num_rows($jeud2);

//JEUDI 10H 11H

$jedit3 = strtotime('Thursday');
$jeudi3 = $jedit3 + 28800 +7200;
$jedi3 = ("SELECT * FROM reservations WHERE tempsegonde = '$jeudi3' ");
$jeud3 = mysqli_query($connexion,$jedi3);
    $jeu3 = mysqli_num_rows($jeud3);
   
//JEUDI 11H 12H

$jedit4 = strtotime('Thursday');
$jeudi4 = $jedit4 + 28800 +10800;
$jedi4 = ("SELECT * FROM reservations WHERE tempsegonde = '$jeudi4' ");
$jeud4 = mysqli_query($connexion,$jedi4);
    $jeu4 = mysqli_num_rows($jeud4);

//JEUDI 12H 13H

$jedit5 = strtotime('Thursday');
$jeudi5 = $jedit5 + 28800 +14400;
$jedi5 = ("SELECT * FROM reservations WHERE tempsegonde = '$jeudi5' ");
$jeud5 = mysqli_query($connexion,$jedi5);
    $jeu5 = mysqli_num_rows($jeud5);

//JEUDI 13H 14H

$jedit6 = strtotime('Thursday');
$jeudi6 = $jedit6 + 28800 +18000;
$jedi6 = ("SELECT * FROM reservations WHERE tempsegonde = '$jeudi6' ");
$jeud6 = mysqli_query($connexion,$jedi6);
    $jeu6 = mysqli_num_rows($jeud6);

//JEUDI 14H 15H

$jedit7 = strtotime('Thursday');
$jeudi7 = $jedit7 + 28800 +21600;
$jedi7 = ("SELECT * FROM reservations WHERE tempsegonde = '$jeudi7' ");
$jeud7 = mysqli_query($connexion,$jedi7);
    $jeu7 = mysqli_num_rows($jeud7);



//JEUDI 15H 16H

$jedit8 = strtotime('Thursday');
$jeudi8 = $jedit8 + 28800 +25200;
$jedi8 = ("SELECT * FROM reservations WHERE tempsegonde = '$jeudi8' ");
$jeud8 = mysqli_query($connexion,$jedi8);
    $jeu8 = mysqli_num_rows($jeud8);

//JEUDI 16H 17H

$jedit9 = strtotime('Thursday');
$jeudi9 = $jedit9 + 28800 + 28800;
$jedi9 = ("SELECT * FROM reservations WHERE tempsegonde = '$jeudi9' ");
$jeud9 = mysqli_query($connexion,$jedi9);
    $jeu9 = mysqli_num_rows($jeud9);

//JEUDI 17H 18H 

$jedit10 = strtotime('Thursday');
$jeudi10 = $jedit10 + 28800 +32400;
$jedi10 = ("SELECT * FROM reservations WHERE tempsegonde = '$jeudi10' ");
$jeud10 = mysqli_query($connexion,$jedi10);
    $jeu10 = mysqli_num_rows($jeud10);

// JEUDI 18H 19H

$jedit11 = strtotime('Thursday');
$jeudi11 = $jedit11 + 28800 +36000;
$jedi11 = ("SELECT * FROM reservations WHERE tempsegonde = '$jeudi11' ");
$jeud11 = mysqli_query($connexion,$jedi11);
    $jeu11 = mysqli_num_rows($jeud11);




////VENDREDI




//le lundi1 au soleil
$venerdi1 = strtotime('Friday');
$vendredi1 = $venerdi1 + 28800;
$vener1 = ("SELECT * FROM reservations WHERE tempsegonde = '$vendredi1' ");
$vene1 = mysqli_query($connexion,$vener1);
    $ven1 = mysqli_num_rows($vene1);

//lundi 09H 10H
$venerdi2 = strtotime('Friday');
$vendredi2 = $venerdi2 + 28800 + 3600;
$vener2 = ("SELECT * FROM reservations WHERE tempsegonde = '$vendredi2' ");
$vene2 = mysqli_query($connexion,$vener2);
    $ven2 = mysqli_num_rows($vene2);

//lundi 10H 11H

$venerdi3 = strtotime('Friday');
$vendredi3 = $venerdi3 + 28800 +7200;
$vener3 = ("SELECT * FROM reservations WHERE tempsegonde = '$vendredi3' ");
$vene3 = mysqli_query($connexion,$vener3);
    $ven3 = mysqli_num_rows($vene3);

   
//lundi 11H 12H

$venerdi4 = strtotime('Friday');
$vendredi4 = $venerdi4 + 28800 +10800;
$vener4 = ("SELECT * FROM reservations WHERE tempsegonde = '$vendredi4' ");
$vene4 = mysqli_query($connexion,$vener4);
    $ven4 = mysqli_num_rows($vene4);

//lundi 12H 13H

$venerdi5 = strtotime('Friday');
$vendredi5 = $venerdi5 + 28800 +14400;
$vener5 = ("SELECT * FROM reservations WHERE tempsegonde = '$vendredi5' ");
$vene5 = mysqli_query($connexion,$vener5);
    $ven5 = mysqli_num_rows($vene5);

//lundi 13H 14H

$venerdi6 = strtotime('Friday');
$vendredi6 = $venerdi6 + 28800 +18000;
$vener6 = ("SELECT * FROM reservations WHERE tempsegonde = '$vendredi6' ");
$vene6 = mysqli_query($connexion,$vener6);
    $ven6 = mysqli_num_rows($vene6);
   

//lundi 14H 15H

$venerdi7 = strtotime('Friday');
$vendredi7 = $venerdi7 + 28800 + 21600;
$vener7 = ("SELECT * FROM reservations WHERE tempsegonde = '$vendredi7' ");
$vene7 = mysqli_query($connexion,$vener7);
    $ven7 = mysqli_num_rows($vene7);

//lundi 15H 16H

$venerdi8 = strtotime('Friday');
$vendredi8 = $venerdi8 + 28800 +25200;
$vener8 = ("SELECT * FROM reservations WHERE tempsegonde = '$vendredi8' ");
$vene8 = mysqli_query($connexion,$vener8);
    $ven8 = mysqli_num_rows($vene8);

//lundi 16H 17H

$venerdi9 = strtotime('Friday');
$vendredi9 = $venerdi9 + 28800 +28800;
$vener9 = ("SELECT * FROM reservations WHERE tempsegonde = '$vendredi9' ");
$vene9 = mysqli_query($connexion,$vener9);
    $ven9 = mysqli_num_rows($vene9);

//lundi 17H 18H 

$venerdi10 = strtotime('Friday');
$vendredi10 = $venerdi10 + 28800 +32400;
$vener10 = ("SELECT * FROM reservations WHERE tempsegonde = '$vendredi10' ");
$vene10 = mysqli_query($connexion,$vener10);
    $ven10 = mysqli_num_rows($vene10);


// lundi 18H 19H

$venerdi11 = strtotime('Friday');
$vendredi11 = $venerdi11 + 28800 +36000;
$vener11 = ("SELECT * FROM reservations WHERE tempsegonde = '$vendredi11' ");
$vene11 = mysqli_query($connexion,$vener11);
    $ven11 = mysqli_num_rows($vene11);
?>