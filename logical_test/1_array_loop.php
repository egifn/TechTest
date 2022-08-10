<?php 
    $aplikasi = array('gtAkademik', 'gtFinansi', 'gtPerizinan', 'eCampur', 'eOviz');
    $num = 0;
    while($num < count($aplikasi)){
        echo '$aplikasi['.$num.'] = ';
        echo $aplikasi[$num]."<br>";
        $num++;
    }
?>