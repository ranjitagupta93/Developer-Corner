<?php
$assocarray=array();
$assocarray[0][0]=1;
$assocarray[0][1]=2;
$assocarray[0][2]=3;
$assocarray[0][3]=4;
$assocarray[0][4]=5;
$assocarray[0][5]=$assocarray[0][0]+$assocarray[0][1]+$assocarray[0][2]+$assocarray[0][3]+$assocarray[0][4];
$assocarray[1][0]=6;
$assocarray[1][1]=7;
$assocarray[1][2]=8;
$assocarray[1][3]=9;
$assocarray[1][4]=10;
$assocarray[1][5]=$assocarray[1][0]+$assocarray[1][1]+$assocarray[1][2]+$assocarray[1][3]+$assocarray[1][4];
$assocarray[2][0]=11;
$assocarray[2][1]=12;
$assocarray[2][2]=13;
$assocarray[2][3]=14;
$assocarray[2][4]=15;
$assocarray[2][5]=$assocarray[2][0]+$assocarray[2][1]+$assocarray[2][2]+$assocarray[2][3]+$assocarray[2][4];
$assocarray[3][0]=16;
$assocarray[3][1]=17;
$assocarray[3][2]=18;
$assocarray[3][3]=19;
$assocarray[3][4]=20;
$assocarray[3][5]=$assocarray[3][0]+$assocarray[3][1]+$assocarray[3][2]+$assocarray[3][3]+$assocarray[3][4];
$assocarray[4][0]=21;
$assocarray[4][1]=22;
$assocarray[4][2]=23;
$assocarray[4][3]=24;
$assocarray[4][4]=25;
$assocarray[4][5]=$assocarray[4][0]+$assocarray[4][1]+$assocarray[4][2]+$assocarray[4][3]+$assocarray[4][4];
$assocarray[6][0]=$assocarray[0][0]+$assocarray[1][0]+$assocarray[2][0]+$assocarray[3][0]+$assocarray[4][0];
$assocarray[6][1]=$assocarray[0][1]+$assocarray[1][1]+$assocarray[2][1]+$assocarray[3][1]+$assocarray[4][1];
$assocarray[6][2]=$assocarray[0][2]+$assocarray[1][2]+$assocarray[2][2]+$assocarray[3][2]+$assocarray[4][2];
$assocarray[6][3]=$assocarray[0][3]+$assocarray[1][3]+$assocarray[2][3]+$assocarray[3][3]+$assocarray[4][3];
$assocarray[6][4]=$assocarray[0][4]+$assocarray[1][4]+$assocarray[2][4]+$assocarray[3][4]+$assocarray[4][4];
for($i=0;$i<7;$i++)
{   
    echo '<br/>';
    for($j=0;$j<7;$j++)
    {
        echo $assocarray[$i][$j].'&nbsp &nbsp &nbsp &nbsp';
        }
}
?>
