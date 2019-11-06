<?php
// Choppu Choppu
$HEXPLOSION = explode (" " , $argv[1]);

// Nintendo
foreach($HEXPLOSION as $value) {
    $laatstekarakter = substr($value , -1);
    switch ($laatstekarakter) {
        case "d":
            $DSeconden = (int)$value * 24 * 60 * 60;
            break;
        case "u":
            $USeconden = (int)$value * 60 * 60;
            break;
        case "m":
            $MSeconden = (int)$value * 60;
            break;
        case "s":
            $Seconden = (int)$value;
            break;
    }
}
// Weggeven aan de asian
$YEET = $DSeconden + $USeconden + $MSeconden + $Seconden;
// ON TEH BIG SCREN
echo $YEET . " Seconden";

/*
                        ,/XM#MMMX;,
                      -%##########M%,
                     -@######%  $###@=
      .,--,         -H#######$   $###M:
   ,;$M###MMX;     .;##########$;HM###X=
,/@###########H=      ;################+
-+#############M/,      %##############+
%M###############=      /##############:
H################      .M#############;.
@###############M      ,@###########M:.
X################,      -$=X#######@:
/@##################%-     +######$-
.;##################X     .X#####+,
 .;H################/     -X####+.
   ,;X##############,       .MM/
      ,:+$H@M#######M#$-    .$$=
           .,-=;+$@###X:    ;/=.
                  .,/X$;   .::,
                      .,    ..                ~Randy



      db    db    db   d8b   db    db    db
      88    88    88   I8I   88    88    88
      88    88    88   I8I   88    88    88
      88    88    Y8   I8I   88    88    88
      88b  d88    `8b d8'8b d8'    88b  d88
      ~Y8888P'     `8b8' `8d8'     ~Y8888P'
*/