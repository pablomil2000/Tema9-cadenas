<?php

function ejer1cifrado_E(){
    
    $text1=$_POST['mensaje'];
    $cnt=0;

    for ($i=0; $i < 3; $i++) { 
        for ($j=0; $j < 9; $j++) { 
            if (substr($text1,$cnt,1)) {
                $let = substr($text1,$cnt,1);
                $cnt++;
                $vec[$j][$i]=$let;
            }else {
                $vec[$j][$i]=".";
            }
        }
    }
    
    for ($j=0; $j < 9; $j++) { 
        for ($i=0; $i < 3; $i++) {
            echo $vec[$j][$i];
        }
    }

}

function ejer1des_E(){

    #elljmeeesmtcpoildtooaddleeo
    #ejemplodelmetododelescitalo

    $text1=$_POST['mensaje'];
    $cnt=0;

    for ($i=0; $i < 9; $i++) { 
        for ($j=0; $j < 3; $j++) { 
            if (substr($text1,$cnt,1)) {
                $let = substr($text1,$cnt,1);
                $cnt++;
                $vec[$j][$i]=$let;
            }else {
                $vec[$j][$i]=".";
            }
        }
    }

    for ($j=0; $j < 3; $j++) { 
        for ($i=0; $i < 9; $i++) {
            echo $vec[$j][$i];
        }
    }

}

function ejer1cif_C(){
    $text1=$_POST['mensaje'];
    $cnt=0;
    while(substr($text1,$cnt,1  )){
        $caracter = substr($text1,$cnt,1);
        
        switch ($caracter) {
            case 'a':
                $caracter="d";
                break;
            case 'b':
                $caracter="e";
                break;            
            case 'c':
                $caracter="f";
                break;
            case 'd':
                $caracter="g";
                break;
            case 'e':
                $caracter="h";
                break;
            case 'f':
                $caracter="i";
                break;
            case 'g':
                $caracter="j";
                break;
            case 'h':
                $caracter="k";
                break;
            case 'i':
                $caracter="l";
                break;
            case 'j':
                $caracter="m";
                break;
            case 'k':
                $caracter="n";
                break;
            case 'l':
                $caracter="o";
                break;
            case 'm':
                $caracter="p";
                break;
            case 'n':
                $caracter="q";
                break;
            case 'o':
                $caracter="r";
                break;
            case 'p':
                $caracter="s";
                break;
            case 'q':
                $caracter="t";
                break;
            case 'r':
                $caracter="u";
                break;
            case 's':
                $caracter="v";
                break;
            case 't':
                $caracter="w";
                break;
            case 'u':
                $caracter="x";
                break;
            case 'v':
                $caracter="y";
                break;
            case 'w':
                $caracter="z";
                break;
            case 'x':
                $caracter="a";
                break;
            case 'y':
                $caracter="b";
                break;
            case 'z':
                $caracter="c";
                break;
        }
        echo "$caracter";
        $cnt++;
    }
}

function ejer1des_C(){
$text1=$_POST['mensaje'];
    $cnt=0;
    while(substr($text1,$cnt,1  )){
        $caracter = substr($text1,$cnt,1);
        
        switch ($caracter) {
            case 'd':
                $caracter="a";
                break;
            case 'e':
                $caracter="b";
                break;            
            case 'f':
                $caracter="c";
                break;
            case 'g':
                $caracter="d";
                break;
            case 'h':
                $caracter="e";
                break;
            case 'i':
                $caracter="f";
                break;
            case 'j':
                $caracter="g";
                break;
            case 'k':
                $caracter="h";
                break;
            case 'l':
                $caracter="i";
                break;
            case 'm':
                $caracter="j";
                break;
            case 'n':
                $caracter="k";
                break;
            case 'o':
                $caracter="l";
                break;
            case 'p':
                $caracter="m";
                break;
            case 'q':
                $caracter="n";
                break;
            case 'r':
                $caracter="o";
                break;
            case 's':
                $caracter="p";
                break;
            case 't':
                $caracter="q";
                break;
            case 'u':
                $caracter="r";
                break;
            case 'v':
                $caracter="s";
                break;
            case 'w':
                $caracter="t";
                break;
            case 'x':
                $caracter="u";
                break;
            case 'y':
                $caracter="v";
                break;
            case 'z':
                $caracter="w";
                break;
            case 'a':
                $caracter="x";
                break;
            case 'b':
                $caracter="y";
                break;
            case 'c':
                $caracter="z";
                break;
        }
        echo "$caracter";
        $cnt++;
    }
}

function ejer2(){
    $text1=$_POST['texto'];
    $cnt=0;
    while(substr($text1,$cnt,1  )){
        $caracter = substr($text1,$cnt,1);
        
        switch ($caracter) {
            case '1':
                $caracter="Uno";
                break;
            case '2':
                $caracter="Dos";
                break;            
            case '3':
                $caracter="tres";
                break;
            case '4':
                $caracter="Cuatro";
                break;
            case '5':
                $caracter="Cinco";
                break;
            case '6':
                $caracter="Seis";
                break;
            case '7':
                $caracter="Siete";
                break;
            case '8':
                $caracter="ocho";
                break;
            case ' 9 ':
                $caracter="Nueve";
                break;
            case ' 0 ':
                $caracter="cero";
                break;
        }
        echo "$caracter";
        $cnt++;
    }
}

function ejer3(){
    for ($i=0; $i < 10; $i++) { 
        $num=$_POST['n'.$i];
        $vec[$i]=$num;
    }

    $modo=$_POST['mostrar'];

    if ($modo==0) {
        foreach ($vec as $key => $value) {
            echo "$value, ";
        }
    }elseif ($modo==1) {
        do {
            $num=current($vec);
            $num2=next($vec);
            echo "$num2 , $num, ";
        } while (next($vec));
        reset($vec);
    }elseif ($modo==2) {
        for ($i=9; $i >= 0; $i=$i-1) { 
        echo "$vec[$i], ";
    }
    }
}

function array4(&$vec){
    $vec["Huelva"  ]["Octubre"   ]="20" ;
    $vec["Huelva"  ]["Noviembre" ]="15" ;
    $vec["Huelva"  ]["Diciembre" ]="10" ;
    $vec["Sevilla" ]["Octubre"   ]="21" ;
    $vec["Sevilla" ]["Noviembre" ]="14" ;
    $vec["Sevilla" ]["Diciembre" ]="9"  ;
    $vec["Cordoba" ]["Octubre"   ]="22" ;
    $vec["Cordoba" ]["Noviembre" ]="15" ;
    $vec["Cordoba" ]["Diciembre" ]="8"  ;
    $vec["Cadiz"   ]["Octubre"   ]="20" ;
    $vec["Cadiz"   ]["Noviembre" ]="15" ;
    $vec["Cadiz"   ]["Diciembre" ]="10" ;
    $vec["Malaga"  ]["Octubre"   ]="20" ;
    $vec["Malaga"  ]["Noviembre" ]="14" ;
    $vec["Malaga"  ]["Diciembre" ]="8"  ;
}

function ejer4_todo($vec){
    foreach ($vec as $key => $value) {
        foreach ($value as $key2 => $value2) {
            echo "$key- $key2- $value2<br>";
        }
    }
}

function ejer4_ciudad($vec){
    $ciudad=$_POST['ciudad'];
    echo "Temperaturas $ciudad: ";
    foreach ($vec[$ciudad] as $key => $value) {
        echo "$key- $value<br>";  
    }
}

function ejer4_temperatura($vec){
    $tmp=$_POST['temperatura'];
    $a=0;
    $b=0;
    foreach ($vec as $key => $value) {
        foreach ($value as $key2 => $value2) {
            if ($value2==$tmp) {
                $vec2[$a]=$key;
                $a++;
                $vec2[$a]=$key2;
                $a++;
            }
        }
    }

    do {
        $num=current($vec2);
        $num2=next($vec2);
        echo "$num - $num2<br>";
    } while (next($vec2));

}

function ejer4_mesciudad($vec){
    $mes=$_POST['mes'];
    $ciudad=$_POST["ciudad"];
    echo "En la ciudad $ciudad en el mes $mes habia". $vec[$ciudad][$mes]."º";
}

function ejer4_mes($vec){
    $mes=$_POST['mes'];
    echo "Temperaturas $mes: ";
    foreach ($vec as $key => $value) {
        echo "$key- $value[$mes]<br>";  
    }
}