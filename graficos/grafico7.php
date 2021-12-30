<?php

    include "./php/conexao.php";

    $sql21 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours_up 
    where municipio = 'Rio Branco' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql31 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours_up 
    where municipio = 'Cruzeiro do Sul' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql41 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours_up 
    where municipio = 'Acrelandia' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql51 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours_up
    WHERE municipio = 'Assis Brasil' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59';";
    $sql61 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours_up 
    where municipio = 'Brasileia' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql71 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours_up 
    where municipio = 'Bujari' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql81 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours_up 
    where municipio = 'Capixaba' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql91 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours_up 
    where municipio = 'Epitaciolandia' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql101 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours_up
    where municipio = 'Feijo' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql111 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours_up 
    where municipio = 'Jordao' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql121 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours_up 
    where municipio = 'Mancio Lima' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql131 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours_up 
    where municipio = 'Manoel Urbano' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql141 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours_up 
    where municipio = 'Marechal Thaumaturgo' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql151 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours_up 
    where municipio = 'Placido de Castro' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql161 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours_up 
    where municipio = 'Porto Acre' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql171 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours_up 
    where municipio = 'Porto Walter' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql181 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours_up 
    where municipio = 'Rodrigues Alves' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql191 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours_up 
    where municipio = 'Santa Rosa do Purus' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql201 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours_up 
    where municipio = 'Sena Madureira' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql211 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours_up 
    where municipio = 'Senador Guiomard' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql221 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours_up 
    where municipio = 'Tarauaca' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql231 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours_up 
    where municipio = 'Xapuri' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";

    $buscar21 = mysqli_query($conexao,$sql21);
    $buscar31 = mysqli_query($conexao,$sql31);
    $buscar41 = mysqli_query($conexao,$sql41);
    $buscar51 = mysqli_query($conexao,$sql51);
    $buscar61 = mysqli_query($conexao,$sql61);
    $buscar71 = mysqli_query($conexao,$sql71);
    $buscar81 = mysqli_query($conexao,$sql81);
    $buscar91 = mysqli_query($conexao,$sql91);
    $buscar101 = mysqli_query($conexao,$sql101);
    $buscar111 = mysqli_query($conexao,$sql111);
    $buscar121 = mysqli_query($conexao,$sql121);
    $buscar131 = mysqli_query($conexao,$sql131);
    $buscar141 = mysqli_query($conexao,$sql141);
    $buscar151 = mysqli_query($conexao,$sql151);
    $buscar161 = mysqli_query($conexao,$sql161);
    $buscar171 = mysqli_query($conexao,$sql171);
    $buscar181 = mysqli_query($conexao,$sql181);
    $buscar191 = mysqli_query($conexao,$sql191);
    $buscar201 = mysqli_query($conexao,$sql201);
    $buscar211 = mysqli_query($conexao,$sql211);
    $buscar221 = mysqli_query($conexao,$sql221);
    $buscar231 = mysqli_query($conexao,$sql231);

    #chart.js - Preparando valores#

    $rbr1   = '';
    $czs1   = '';
    $acl1   = '';
    $abr1   = '';
    $brl1   = '';
    $bjr1   = '';
    $cpx1   = '';
    $epl1   = '';
    $fij1   = '';
    $jrd1   = '';
    $mnl1   = '';
    $mur1   = '';
    $mth1   = '';
    $plc1   = '';
    $ptc1   = '';
    $ptw1   = '';
    $rda1   = '';
    $srp1   = '';
    $snm1   = '';
    $sng1   = '';
    $trc1   = '';
    $xap1   = '';

    while ($dados21 = mysqli_fetch_array($buscar21)) {
        
        $rbr1 = $rbr1 . '"' . $dados21['pm2_5'] . '",';

        $rbr1 = trim($rbr1); #tira os espaços da variável
    
    }
    while ($dados31 = mysqli_fetch_array($buscar31)) {
                    
        $czs1 = $czs1 . '"' . $dados31['pm2_5'] . '",';

        $czs1 = trim($czs1); #tira os espaços da variável
    
    }
    while ($dados41 = mysqli_fetch_array($buscar41)) {
                    
        $acl1 = $acl1 . '"' . $dados41['pm2_5'] . '",';

        $acl1 = trim($acl1); #tira os espaços da variável
    
    }
    while ($dados51 = mysqli_fetch_array($buscar51)) {
                    
        $abr1 = $abr1 . '"' . $dados51['pm2_5'] . '",';

        $abr1 = trim($abr1); #tira os espaços da variável
    
    }
    while ($dados61 = mysqli_fetch_array($buscar61)) {
                    
        $brl1 = $brl1 . '"' . $dados61['pm2_5'] . '",';

        $brl1 = trim($brl1); #tira os espaços da variável
    
    }
    while ($dados71 = mysqli_fetch_array($buscar71)) {
                    
        $bjr1 = $bjr1 . '"' . $dados71['pm2_5'] . '",';

        $bjr1 = trim($bjr1); #tira os espaços da variável
    
    }
    while ($dados81 = mysqli_fetch_array($buscar81)) {
                    
        $cpx1 = $cpx1 . '"' . $dados81['pm2_5'] . '",';

        $cpx1 = trim($cpx1); #tira os espaços da variável
    
    }
    while ($dados91 = mysqli_fetch_array($buscar91)) {
                    
        $epl1 = $epl1 . '"' . $dados91['pm2_5'] . '",';

        $epl1 = trim($epl1); #tira os espaços da variável
    
    }
    while ($dados101 = mysqli_fetch_array($buscar101)) {
                    
        $fij1 = $fij1 . '"' . $dados101['pm2_5'] . '",';

        $fij1 = trim($fij1); #tira os espaços da variável
    
    }
    while ($dados111 = mysqli_fetch_array($buscar111)) {
                    
        $jrd1 = $jrd1 . '"' . $dados111['pm2_5'] . '",';

        $jrd1 = trim($jrd1); #tira os espaços da variável
    
    }
    while ($dados121 = mysqli_fetch_array($buscar121)) {
                    
        $mnl1 = $mnl1 . '"' . $dados121['pm2_5'] . '",';

        $mnl1 = trim($mnl1); #tira os espaços da variável
    
    }
    while ($dados131 = mysqli_fetch_array($buscar131)) {
                    
        $mur1 = $mur1 . '"' . $dados131['pm2_5'] . '",';

        $mur1 = trim($mur1); #tira os espaços da variável
    
    }
    while ($dados141 = mysqli_fetch_array($buscar141)) {
                    
        $mth1 = $mth1 . '"' . $dados141['pm2_5'] . '",';

        $mth1 = trim($mth1); #tira os espaços da variável
    
    }
    while ($dados151 = mysqli_fetch_array($buscar151)) {
                    
        $plc1 = $plc1 . '"' . $dados151['pm2_5'] . '",';

        $plc1 = trim($plc1); #tira os espaços da variável
    
    }
    while ($dados161 = mysqli_fetch_array($buscar161)) {
                    
        $ptc1 = $ptc1 . '"' . $dados161['pm2_5'] . '",';

        $ptc1 = trim($ptc1); #tira os espaços da variável
    
    }
    while ($dados171 = mysqli_fetch_array($buscar171)) {
                    
        $ptw1 = $ptw1 . '"' . $dados171['pm2_5'] . '",';

        $ptw1 = trim($ptw1); #tira os espaços da variável
    
    }
    while ($dados181 = mysqli_fetch_array($buscar181)) {
                    
        $rda1 = $rda1 . '"' . $dados181['pm2_5'] . '",';

        $rda1 = trim($rda1); #tira os espaços da variável
    
    }
    while ($dados191 = mysqli_fetch_array($buscar191)) {
                    
        $srp1 = $srp1 . '"' . $dados191['pm2_5'] . '",';

        $srp1 = trim($srp1); #tira os espaços da variável
    
    }
    while ($dados201 = mysqli_fetch_array($buscar201)) {
                    
        $snm1 = $snm1 . '"' . $dados201['pm2_5'] . '",';

        $snm1 = trim($snm1); #tira os espaços da variável
    
    }
    while ($dados211 = mysqli_fetch_array($buscar211)) {
                    
        $sng1 = $sng1 . '"' . $dados211['pm2_5'] . '",';

        $sng1 = trim($sng1); #tira os espaços da variável
    
    }
    while ($dados221 = mysqli_fetch_array($buscar221)) {
                    
        $trc1 = $trc1 . '"' . $dados221['pm2_5'] . '",';

        $trc1 = trim($trc1); #tira os espaços da variável
    
    }
    while ($dados231 = mysqli_fetch_array($buscar231)) {
                    
        $xap1 = $xap1 . '"' . $dados231['pm2_5'] . '",';

        $xap1 = trim($xap1); #tira os espaços da variável
    
    }


    $sql1 = "SELECT date, ROUND(pm2_5,0) as pm2_5
    from hours 
    where municipio = 'media' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql2 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours 
    where municipio = 'Rio Branco' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql3 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours 
    where municipio = 'Cruzeiro do Sul' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql4 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours 
    where municipio = 'Acrelandia' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql5 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours
    WHERE municipio = 'Assis Brasil' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59';";
    $sql6 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours 
    where municipio = 'Brasileia' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql7 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours 
    where municipio = 'Bujari' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql8 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours 
    where municipio = 'Capixaba' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql9 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours 
    where municipio = 'Epitaciolandia' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql10 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours
    where municipio = 'Feijo' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql11 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours 
    where municipio = 'Jordao' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql12 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours 
    where municipio = 'Mancio Lima' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql13 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours 
    where municipio = 'Manoel Urbano' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql14 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours 
    where municipio = 'Marechal Thaumaturgo' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql15 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours 
    where municipio = 'Placido de Castro' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql16 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours 
    where municipio = 'Porto Acre' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql17 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours 
    where municipio = 'Porto Walter' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql18 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours 
    where municipio = 'Rodrigues Alves' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql19 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours 
    where municipio = 'Santa Rosa do Purus' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql20 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours 
    where municipio = 'Sena Madureira' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql21 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours 
    where municipio = 'Senador Guiomard' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql22 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours 
    where municipio = 'Tarauaca' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";
    $sql23 = "SELECT IFNULL(ROUND(pm2_5,0),'NaN') as pm2_5
    from hours 
    where municipio = 'Xapuri' and date between '2021-01-01 00:00:00' and '2021-12-31 23:59:59'";

    $buscar1 = mysqli_query($conexao,$sql1);
    $buscar2 = mysqli_query($conexao,$sql2);
    $buscar3 = mysqli_query($conexao,$sql3);
    $buscar4 = mysqli_query($conexao,$sql4);
    $buscar5 = mysqli_query($conexao,$sql5);
    $buscar6 = mysqli_query($conexao,$sql6);
    $buscar7 = mysqli_query($conexao,$sql7);
    $buscar8 = mysqli_query($conexao,$sql8);
    $buscar9 = mysqli_query($conexao,$sql9);
    $buscar10 = mysqli_query($conexao,$sql10);
    $buscar11 = mysqli_query($conexao,$sql11);
    $buscar12 = mysqli_query($conexao,$sql12);
    $buscar13 = mysqli_query($conexao,$sql13);
    $buscar14 = mysqli_query($conexao,$sql14);
    $buscar15 = mysqli_query($conexao,$sql15);
    $buscar16 = mysqli_query($conexao,$sql16);
    $buscar17 = mysqli_query($conexao,$sql17);
    $buscar18 = mysqli_query($conexao,$sql18);
    $buscar19 = mysqli_query($conexao,$sql19);
    $buscar20 = mysqli_query($conexao,$sql20);
    $buscar21 = mysqli_query($conexao,$sql21);
    $buscar22 = mysqli_query($conexao,$sql22);
    $buscar23 = mysqli_query($conexao,$sql23);

    #chart.js - Preparando valores#

    $date  = '';
    $media = '';
    $rbr   = '';
    $czs   = '';
    $acl   = '';
    $abr   = '';
    $brl   = '';
    $bjr   = '';
    $cpx   = '';
    $epl   = '';
    $fij   = '';
    $jrd   = '';
    $mnl   = '';
    $mur   = '';
    $mth   = '';
    $plc   = '';
    $ptc   = '';
    $ptw   = '';
    $rda   = '';
    $srp   = '';
    $snm   = '';
    $sng   = '';
    $trc   = '';
    $xap   = '';

    while ($dados1 = mysqli_fetch_array($buscar1)) {
                    
        $date = $date . '"' . $dados1['date'] . '",';
        $media = $media . '"' . $dados1['pm2_5'] . '",';
        
        $date = trim($date); #tira os espaços da variável
        $media= trim($media);
        
    }
    while ($dados2 = mysqli_fetch_array($buscar2)) {
                    
        $rbr = $rbr . '"' . $dados2['pm2_5'] . '",';

        $rbr = trim($rbr); #tira os espaços da variável
    
    }
    while ($dados3 = mysqli_fetch_array($buscar3)) {
                    
        $czs = $czs . '"' . $dados3['pm2_5'] . '",';

        $czs = trim($czs); #tira os espaços da variável
    
    }
    while ($dados4 = mysqli_fetch_array($buscar4)) {
                    
        $acl = $acl . '"' . $dados4['pm2_5'] . '",';

        $acl = trim($acl); #tira os espaços da variável
    
    }
    while ($dados5 = mysqli_fetch_array($buscar5)) {
                    
        $abr = $abr . '"' . $dados5['pm2_5'] . '",';

        $abr = trim($abr); #tira os espaços da variável
    
    }
    while ($dados6 = mysqli_fetch_array($buscar6)) {
                    
        $brl = $brl . '"' . $dados6['pm2_5'] . '",';

        $brl = trim($brl); #tira os espaços da variável
    
    }
    while ($dados7 = mysqli_fetch_array($buscar7)) {
                    
        $bjr = $bjr . '"' . $dados7['pm2_5'] . '",';

        $bjr = trim($bjr); #tira os espaços da variável
    
    }
    while ($dados8 = mysqli_fetch_array($buscar8)) {
                    
        $cpx = $cpx . '"' . $dados8['pm2_5'] . '",';

        $cpx = trim($cpx); #tira os espaços da variável
    
    }
    while ($dados9 = mysqli_fetch_array($buscar9)) {
                    
        $epl = $epl . '"' . $dados9['pm2_5'] . '",';

        $epl = trim($epl); #tira os espaços da variável
    
    }
    while ($dados10 = mysqli_fetch_array($buscar10)) {
                    
        $fij = $fij . '"' . $dados10['pm2_5'] . '",';

        $fij = trim($fij); #tira os espaços da variável
    
    }
    while ($dados11 = mysqli_fetch_array($buscar11)) {
                    
        $jrd = $jrd . '"' . $dados11['pm2_5'] . '",';

        $jrd = trim($jrd); #tira os espaços da variável
    
    }
    while ($dados12 = mysqli_fetch_array($buscar12)) {
                    
        $mnl = $mnl . '"' . $dados12['pm2_5'] . '",';

        $mnl = trim($mnl); #tira os espaços da variável
    
    }
    while ($dados13 = mysqli_fetch_array($buscar13)) {
                    
        $mur = $mur . '"' . $dados13['pm2_5'] . '",';

        $mur = trim($mur); #tira os espaços da variável
    
    }
    while ($dados14 = mysqli_fetch_array($buscar14)) {
                    
        $mth = $mth . '"' . $dados14['pm2_5'] . '",';

        $mth = trim($mth); #tira os espaços da variável
    
    }
    while ($dados15 = mysqli_fetch_array($buscar15)) {
                    
        $plc = $plc . '"' . $dados15['pm2_5'] . '",';

        $plc = trim($plc); #tira os espaços da variável
    
    }
    while ($dados16 = mysqli_fetch_array($buscar16)) {
                    
        $ptc = $ptc . '"' . $dados16['pm2_5'] . '",';

        $ptc = trim($ptc); #tira os espaços da variável
    
    }
    while ($dados17 = mysqli_fetch_array($buscar17)) {
                    
        $ptw = $ptw . '"' . $dados17['pm2_5'] . '",';

        $ptw = trim($ptw); #tira os espaços da variável
    
    }
    while ($dados18 = mysqli_fetch_array($buscar18)) {
                    
        $rda = $rda . '"' . $dados18['pm2_5'] . '",';

        $rda = trim($rda); #tira os espaços da variável
    
    }
    while ($dados19 = mysqli_fetch_array($buscar19)) {
                    
        $srp = $srp . '"' . $dados19['pm2_5'] . '",';

        $srp = trim($srp); #tira os espaços da variável
    
    }
    while ($dados20 = mysqli_fetch_array($buscar20)) {
                    
        $snm = $snm . '"' . $dados20['pm2_5'] . '",';

        $snm = trim($snm); #tira os espaços da variável
    
    }
    while ($dados21 = mysqli_fetch_array($buscar21)) {
                    
        $sng = $sng . '"' . $dados21['pm2_5'] . '",';

        $sng = trim($sng); #tira os espaços da variável
    
    }
    while ($dados22 = mysqli_fetch_array($buscar22)) {
                    
        $trc = $trc . '"' . $dados22['pm2_5'] . '",';

        $trc = trim($trc); #tira os espaços da variável
    
    }
    while ($dados23 = mysqli_fetch_array($buscar23)) {
                    
        $xap = $xap . '"' . $dados23['pm2_5'] . '",';

        $xap = trim($xap); #tira os espaços da variável
    
    }

    mysqli_close($conexao);

?>

        <canvas id="lineChart3" style=" width: 400px; height: 150px;"></canvas>

        <script type="text/javascript">

            var ctx = document.getElementById('lineChart3').getContext('2d');
            var myLineChart3 = new Chart(ctx, {
            type: 'line',
            connectNullData: false,
            data: {
                    labels:[<?php echo $date?>],
                    datasets:
                    [{
                        label:'Rio Branco',
                        data:[<?php echo $rbr1; ?>],
                        backgroundColor: 'rgba(0,0,0,.5)',
                        borderColor: 'rgba(0,0,0,.5)',
                        borderWidth: 2,
                        pointBackgroundColor: 'rgba(0,0,0,.5)',
                        showLine: false,
                        pointRadius: 3,

                    },
                    {
                        label:'Cruzeiro do Sul',
                        data:[<?php echo $czs1; ?>],
                        backgroundColor: 'rgba(0,0,0,.5)',
                        borderColor: 'rgba(0,0,0,.5)',
                        borderWidth: 2,
                        pointBackgroundColor: 'rgba(0,0,0,.5)',
                        showLine: false,
                        pointRadius: 3,

                    },
                    {
                        label:'Acrelândia',
                        data:[<?php echo $acl1; ?>],
                        backgroundColor: 'rgba(0,0,0,.5)',
                        borderColor: 'rgba(0,0,0,.5)',
                        borderWidth: 2,
                        pointBackgroundColor: 'rgba(0,0,0,.5)',
                        showLine: false,
                        pointRadius: 3,

                    },
                    {
                        label:'Assis Brasil',
                        data:[<?php echo $abr1; ?>],
                        backgroundColor: 'rgba(0,0,0,.5)',
                        borderColor: 'rgba(0,0,0,.5)',
                        borderWidth: 2,
                        pointBackgroundColor: 'rgba(0,0,0,.5)',
                        showLine: false,
                        pointRadius: 3,
                        
                    },
                    {
                        label:'Brasiléia',
                        data:[<?php echo $brl1; ?>],
                        backgroundColor: 'rgba(0,0,0,.5)',
                        borderColor: 'rgba(0,0,0,.5)',
                        borderWidth: 2,
                        pointBackgroundColor: 'rgba(0,0,0,.5)',
                        showLine: false,
                        pointRadius: 3,
                    
                    },
                    {
                        label:'Bujari',
                        data:[<?php echo $bjr1; ?>],
                        backgroundColor: 'rgba(0,0,0)',
                        borderColor: 'rgba(0,0,0,.5)',
                        borderWidth: 2,
                        pointBackgroundColor: 'rgba(0,0,0,.5)',
                        showLine: false,
                        pointRadius: 3,
                    
                    },
                    {
                        label:'Capixaba',
                        data:[<?php echo $cpx1; ?>],
                        backgroundColor: 'rgba(0,0,0,.5)',
                        borderColor: 'rgba(0,0,0,.5)',
                        borderWidth: 2,
                        pointBackgroundColor: 'rgba(0,0,0,.5)',
                        showLine: false,
                        pointRadius: 3,
                    
                    },
                    {
                        label:'Epitaciolândia',
                        data:[<?php echo $epl1; ?>],
                        backgroundColor: 'rgba(0,0,0,.5)',
                        borderColor: 'rgba(0,0,0,.5)',
                        borderWidth: 2,
                        pointBackgroundColor: 'rgba(0,0,0,.5)',
                        showLine: false,
                        pointRadius: 3,
                    
                    },
                    {
                        label:'Feijó',
                        data:[<?php echo $fij1; ?>],
                        backgroundColor: 'rgba(0,0,0,.5)',
                        borderColor: 'rgba(0,0,0,.5)',
                        borderWidth: 2,
                        pointBackgroundColor: 'rgba(0,0,0,.5)',
                        showLine: false,
                        pointRadius: 3,
                    
                    },
                    {
                        label:'Jordão',
                        data:[<?php echo $jrd1; ?>],
                        backgroundColor: 'rgba(0,0,0,.5)',
                        borderColor: 'rgba(0,0,0,.5)',
                        borderWidth: 2,
                        pointBackgroundColor: 'rgba(0,0,0,.5)',
                        showLine: false,
                        pointRadius: 3,
                    
                    },
                    {
                        label:'Mâncio Lima',
                        data:[<?php echo $mnl1; ?>],
                        backgroundColor: 'rgba(0,0,0,.5)',
                        borderColor: 'rgba(0,0,0,.5)',
                        borderWidth: 2,
                        pointBackgroundColor: 'rgba(0,0,0,.5)',
                        showLine: false,
                        pointRadius: 3,
                    
                    },
                    {
                        label:'Manoel Urbano',
                        data:[<?php echo $mur1; ?>],
                        backgroundColor: 'rgba(0,0,0,.5)',
                        borderColor: 'rgba(0,0,0,.5)',
                        borderWidth: 2,
                        pointBackgroundColor: 'rgba(0,0,0,.5)',
                        showLine: false,
                        pointRadius: 3,
                    
                    },
                    {
                        label:'Marechal Thaumaturgo',
                        data:[<?php echo $mth1; ?>],
                        backgroundColor: 'rgba(0,0,0,.5)',
                        borderColor: 'rgba(0,0,0,.5)',
                        borderWidth: 2,
                        pointBackgroundColor: 'rgba(0,0,0,.5)',
                        showLine: false,
                        pointRadius: 3,
                    
                    },
                    {
                        label:'Plácido de Castro',
                        data:[<?php echo $plc1; ?>],
                        backgroundColor: 'rgba(0,0,0,.5)',
                        borderColor: 'rgba(0,0,0,.5)',
                        borderWidth: 2,
                        pointBackgroundColor: 'rgba(0,0,0,.5)',
                        showLine: false,
                        pointRadius: 3,
                    
                    },
                    {
                        label:'Porto Acre',
                        data:[<?php echo $ptc1; ?>],
                        backgroundColor: 'rgba(0,0,0,.5)',
                        borderColor: 'rgba(0,0,0,.5)',
                        borderWidth: 2,
                        pointBackgroundColor: 'rgba(0,0,0,.5)',
                        showLine: false,
                        pointRadius: 3,
                    
                    },
                    {
                        label:'Porto Walter',
                        data:[<?php echo $ptw1; ?>],
                        backgroundColor: 'rgba(0,0,0,.5)',
                        borderColor: 'rgba(0,0,0,.5)',
                        borderWidth: 2,
                        pointBackgroundColor: 'rgba(0,0,0,.5)',
                        showLine: false,
                        pointRadius: 3,
                    
                    },
                    {
                        label:'Rodrigues Alves',
                        data:[<?php echo $rda1; ?>],
                        backgroundColor: 'rgba(0,0,0,.5)',
                        borderColor: 'rgba(0,0,0,.5)',
                        borderWidth: 2,
                        pointBackgroundColor: 'rgba(0,0,0,.5)',
                        showLine: false,
                        pointRadius: 3,
                    
                    },
                    {
                        label:'Santa Rosa do Purus',
                        data:[<?php echo $srp1; ?>],
                        backgroundColor: 'rgba(0,0,0,.5)',
                        borderColor: 'rgba(0,0,0,.5)',
                        borderWidth: 2,
                        pointBackgroundColor: 'rgba(0,0,0,.5)',
                        showLine: false,
                        pointRadius: 3,
                    
                    },
                    {
                        label:'Sena Madureira',
                        data:[<?php echo $snm1; ?>],
                        backgroundColor: 'rgba(0,0,0,.5)',
                        borderColor: 'rgba(0,0,0,.5)',
                        borderWidth: 2,
                        pointBackgroundColor: 'rgba(0,0,0,.5)',
                        showLine: false,
                        pointRadius: 3,
                    
                    },
                    {
                        label:'Senador Guiomard',
                        data:[<?php echo $sng1; ?>],
                        backgroundColor: 'rgba(0,0,0,.5)',
                        borderColor: 'rgba(0,0,0,.5)',
                        borderWidth: 2,
                        pointBackgroundColor: 'rgba(0,0,0,.5)',
                        showLine: false,
                        pointRadius: 3,
                    
                    },
                    {
                        label:'Tarauacá',
                        data:[<?php echo $trc1; ?>],
                        backgroundColor: 'rgba(0,0,0,.5)',
                        borderColor: 'rgba(0,0,0,.5)',
                        borderWidth: 2,
                        pointBackgroundColor: 'rgba(0,0,0,.5)',
                        showLine: false,
                        pointRadius: 3,
                    
                    },
                    {
                        label:'Xapuri',
                        data:[<?php echo $xap1; ?>],
                        backgroundColor: 'rgba(0,0,0,.5)',
                        borderColor: 'rgba(0,0,0,.5)',
                        borderWidth: 2,
                        pointBackgroundColor: 'rgba(0,0,0,.5)',
                        showLine: false,
                        pointRadius: 3,
                    
                    },
                    {
                        label:'Média',
                        data:[<?php echo $media; ?>],
                        backgroundColor: 'transparent',
                        borderColor: 'rgba(255,48,48)',
                        borderWidth: 2,
                        pointStyle: 'line',
                        //pointBackgroundColor: 'black',
                        //showLine: false,
                        //pointRadius: 5
                    },
                    {
                        label:'Rio Branco',
                        data:[<?php echo $rbr; ?>],
                        backgroundColor: 'transparent',
                        borderColor: 'rgb(192,192,192)',
                        borderWidth: 1.5,
                        pointStyle: 'line',

                    },
                    {
                        label:'Cruzeiro do Sul',
                        data:[<?php echo $czs; ?>],
                        backgroundColor: 'transparent',
                        borderColor: 'rgb(192,192,192)',
                        borderWidth: 1.5,

                    },
                    {
                        label:'Acrelândia',
                        data:[<?php echo $acl; ?>],
                        backgroundColor: 'transparent',
                        borderColor: 'rgb(192,192,192)',
                        borderWidth: 1.5,

                    },
                    {
                        label:'Assis Brasil',
                        data:[<?php echo $abr; ?>],
                        backgroundColor: 'transparent',
                        borderColor: 'rgb(192,192,192)',
                        borderWidth: 1.5,
                        
                    },
                    {
                        label:'Brasiléia',
                        data:[<?php echo $brl; ?>],
                        backgroundColor: 'transparent',
                        borderColor: 'rgb(192,192,192)',
                        borderWidth: 1.5,
                    
                    },
                    {
                        label:'Bujari',
                        data:[<?php echo $bjr; ?>],
                        backgroundColor: 'transparent',
                        borderColor: 'rgb(192,192,192)',
                        borderWidth: 1.5,
                    
                    },
                    {
                        label:'Capixaba',
                        data:[<?php echo $cpx; ?>],
                        backgroundColor: 'transparent',
                        borderColor: 'rgb(192,192,192)',
                        borderWidth: 1.5,
                    
                    },
                    {
                        label:'Epitaciolândia',
                        data:[<?php echo $epl; ?>],
                        backgroundColor: 'transparent',
                        borderColor: 'rgb(192,192,192)',
                        borderWidth: 1.5,
                    
                    },
                    {
                        label:'Feijó',
                        data:[<?php echo $fij; ?>],
                        backgroundColor: 'transparent',
                        borderColor: 'rgb(192,192,192)',
                        borderWidth: 1.5,
                    
                    },
                    {
                        label:'Jordão',
                        data:[<?php echo $jrd; ?>],
                        backgroundColor: 'transparent',
                        borderColor: 'rgb(192,192,192)',
                        borderWidth: 1.5,
                    
                    },
                    {
                        label:'Mâncio Lima',
                        data:[<?php echo $mnl; ?>],
                        backgroundColor: 'transparent',
                        borderColor: 'rgb(192,192,192)',
                        borderWidth: 1.5,
                    
                    },
                    {
                        label:'Manoel Urbano',
                        data:[<?php echo $mur; ?>],
                        backgroundColor: 'transparent',
                        borderColor: 'rgb(192,192,192)',
                        borderWidth: 1.5,
                    
                    },
                    {
                        label:'Marechal Thaumaturgo',
                        data:[<?php echo $mth; ?>],
                        backgroundColor: 'transparent',
                        borderColor: 'rgb(192,192,192)',
                        borderWidth: 1.5,
                    
                    },
                    {
                        label:'Plácido de Castro',
                        data:[<?php echo $plc; ?>],
                        backgroundColor: 'transparent',
                        borderColor: 'rgb(192,192,192)',
                        borderWidth: 1.5,
                    
                    },
                    {
                        label:'Porto Acre',
                        data:[<?php echo $ptc; ?>],
                        backgroundColor: 'transparent',
                        borderColor: 'rgb(192,192,192)',
                        borderWidth: 1.5,
                    
                    },
                    {
                        label:'Porto Walter',
                        data:[<?php echo $ptw; ?>],
                        backgroundColor: 'transparent',
                        borderColor: 'rgb(192,192,192)',
                        borderWidth: 1.5,
                    
                    },
                    {
                        label:'Rodrigues Alves',
                        data:[<?php echo $rda; ?>],
                        backgroundColor: 'transparent',
                        borderColor: 'rgb(192,192,192)',
                        borderWidth: 1.5,
                    
                    },
                    {
                        label:'Santa Rosa do Purus',
                        data:[<?php echo $srp; ?>],
                        backgroundColor: 'transparent',
                        borderColor: 'rgb(192,192,192)',
                        borderWidth: 1.5,
                    
                    },
                    {
                        label:'Sena Madureira',
                        data:[<?php echo $snm; ?>],
                        backgroundColor: 'transparent',
                        borderColor: 'rgb(192,192,192)',
                        borderWidth: 1.5,
                    
                    },
                    {
                        label:'Senador Guiomard',
                        data:[<?php echo $sng; ?>],
                        backgroundColor: 'transparent',
                        borderColor: 'rgb(192,192,192)',
                        borderWidth: 1.5,
                    
                    },
                    {
                        label:'Tarauacá',
                        data:[<?php echo $trc; ?>],
                        backgroundColor: 'transparent',
                        borderColor: 'rgb(192,192,192)',
                        borderWidth: 1.5,
                    
                    },
                    {
                        label:'Xapuri',
                        data:[<?php echo $xap; ?>],
                        backgroundColor: 'transparent',
                        borderColor: 'rgb(192,192,192)',
                        borderWidth: 1.5,
                    
                    }]

            },
            options: {
                        responsive: true,
                        legend: {
                            display:false,
                            labels: {
                                fontColor: 'black',
                                usePointStyle: true,
                                fontSize: 16,
                                filter: function(legendItem, chartData) {
                                            if (legendItem.datasetIndex > 2 ) {
                                                return false;
                                            }
                                            return true;
                                }
                            }
                        },
                        elements: {
                            point:{
                                radius: 0
                            }
                        },
                        scales: {
                            yAxes: [{
                                display: true,
                                scaleLabel: {
                                    display:true,
                                    labelString: "Média de 1 hora de MP2,5 (\xB5g/m3)",
                                    fontColor: 'black',
                                    fontSize: 16,
                                    fontFamily: "Montserrat",

                                },
                                ticks: {
                                    fontColor:'black',
                                    fontSize: 14,
                                    fontFamily: "Montserrat",
                                    suggestedMax: 30,

                                }
                                
                            }],

                            xAxes: [{
                                type: 'time',
                                time: {
                                        tooltipFormat: 'DD/MM/YYYY',
                                        displayFormats: {
                                                    quarter: 'D M YYYY'
                                        },
                                        unit: 'month'
                                },
                                distribution: 'linear',
                                display: true,
                                scaleLabel: {
                                    display:true,
                                    labelString: 'Meses',
                                    fontColor: 'black',
                                    fontSize: 16,
                                    fontFamily: "Montserrat",

                                },
                                ticks: {
                                    fontColor:'black',
                                    fontSize: 14,
                                    fontFamily: "Montserrat",

                                }

                            }]

                        },
                        annotation: {
                            annotations: [{
                                type: 'line',
                                mode: 'horizontal',
                                scaleID: 'y-axis-0',
                                value: 15,
                                borderColor: 'rgba(255,165,79,85)',
                                borderWidth: 2,
                                borderDash: [3, 3],
                                label: {
                                enabled: true,
                                content: ''
                                }
                            }]
                        }
                        
                    }

            });

        </script>

