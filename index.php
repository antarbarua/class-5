<?php

function thumbnail($videourl ){
    $videourlarry =explode("?",$videourl);
    $videoidarry =explode("/",$videourlarry[0]);
    $videoid =end($videoidarry);
    echo "<img src='https://i.ytimg.com/vi/$videoid/hq720.jpg'>";
}
thumbnail("https://youtu.be/M1fzVIaoPEQ?si=DA6KVU393DfIH3e6");
thumbnail("https://youtu.be/8tjEbGxb_Kw?si=qg3J9NRR5SeA5QKi");
thumbnail("https://youtu.be/ESnrn1kAD4E?si=SSP5NODyWgsAeXej");


// echo "<pre>";
// print_r($videoid  );
// echo "</pre>";