<?php

    $pdo = new PDO('mysql:host=localhost;
                    dbname=db_purpleair;
                    port=3306;
                    charset=utf8', 'root', '');

    $sql = "SELECT
    pm1.date as 'data',
	IFNULL(round(pm2.pm2_5,0),'NaN') AS 'media', 
	IFNULL(round(pm3.pm2_5,0),'NaN') AS 'acrelandia', 
    IFNULL(round(pm4.pm2_5,0),'NaN') AS 'assis_brasil',
    IFNULL(round(pm5.pm2_5,0),'NaN') AS 'barasileia',
    IFNULL(round(pm6.pm2_5,0),'NaN') AS 'bujari',
    IFNULL(round(pm7.pm2_5,0),'NaN') AS 'capixaba',
    IFNULL(round(pm8.pm2_5,0),'NaN') AS 'cruzeiro_do_sul',
    IFNULL(round(pm9.pm2_5,0),'NaN') AS 'epitaciolandia',
    IFNULL(round(pm10.pm2_5,0),'NaN') AS 'feijo',
    IFNULL(round(pm11.pm2_5,0),'NaN') AS 'jordao',
    IFNULL(round(pm12.pm2_5,0),'NaN') AS 'mancio_lima',
    IFNULL(round(pm13.pm2_5,0),'NaN') AS 'manoel_urbano',
    IFNULL(round(pm14.pm2_5,0),'NaN') AS 'marechal_thaumaturgo',
    IFNULL(round(pm15.pm2_5,0),'NaN') AS 'placido_de_castro',
    IFNULL(round(pm16.pm2_5,0),'NaN') AS 'porto_acre',
    IFNULL(round(pm17.pm2_5,0),'NaN') AS 'porto_walter',
    IFNULL(round(pm18.pm2_5,0),'NaN') AS 'rio_branco',
    IFNULL(round(pm19.pm2_5,0),'NaN') AS 'rodrigues_alves',
    IFNULL(round(pm20.pm2_5,0),'NaN') AS 'santa_rosa_do_purus',
    IFNULL(round(pm21.pm2_5,0),'NaN') AS 'sena_madureira',
    IFNULL(round(pm22.pm2_5,0),'NaN') AS 'senador_guiomard',
    IFNULL(round(pm23.pm2_5,0),'NaN') AS 'tarauaca',
    IFNULL(round(pm24.pm2_5,0),'NaN') AS 'xapuri'
    FROM `hours` pm1 
        JOIN `hours` pm2 ON pm1.date = pm2.date
        JOIN `hours` pm3 ON pm1.date = pm3.date
        JOIN `hours` pm4 ON pm1.date = pm4.date 
        JOIN `hours` pm5 ON pm1.date = pm5.date
        JOIN `hours` pm6 ON pm1.date = pm6.date
        JOIN `hours` pm7 ON pm1.date = pm7.date
        JOIN `hours` pm8 ON pm1.date = pm8.date
        JOIN `hours` pm9 ON pm1.date = pm9.date
        JOIN `hours` pm10 ON pm1.date = pm10.date
        JOIN `hours` pm11 ON pm1.date = pm11.date
        JOIN `hours` pm12 ON pm1.date = pm12.date
        JOIN `hours` pm13 ON pm1.date = pm13.date
        JOIN `hours` pm14 ON pm1.date = pm14.date
        JOIN `hours` pm15 ON pm1.date = pm15.date
        JOIN `hours` pm16 ON pm1.date = pm16.date
        JOIN `hours` pm17 ON pm1.date = pm17.date
        JOIN `hours` pm18 ON pm1.date = pm18.date
        JOIN `hours` pm19 ON pm1.date = pm19.date
        JOIN `hours` pm20 ON pm1.date = pm20.date
        JOIN `hours` pm21 ON pm1.date = pm21.date
        JOIN `hours` pm22 ON pm1.date = pm22.date
        JOIN `hours` pm23 ON pm1.date = pm23.date
        JOIN `hours` pm24 ON pm1.date = pm24.date
    WHERE pm1.municipio = 'Acrelandia' AND pm1.date between '2020-01-01 00:00:00' and '2020-06-14 23:59:59'
        AND pm2.municipio = 'media' AND pm2.date between '2020-01-01 00:00:00' and '2020-06-14 23:59:59'
        AND pm3.municipio = 'Acrelandia' AND pm3.date between '2020-01-01 00:00:00' and '2020-06-14 23:59:59'
        AND pm4.municipio = 'Assis Brasil' AND pm4.date between '2020-01-01 00:00:00' and '2020-06-14 23:59:59'
        AND pm5.municipio = 'Brasileia' AND pm5.date between '2020-01-01 00:00:00' and '2020-06-14 23:59:59'
        AND pm6.municipio = 'Bujari' AND pm6.date between '2020-01-01 00:00:00' and '2020-06-14 23:59:59'
        AND pm7.municipio = 'Capixaba' AND pm7.date between '2020-01-01 00:00:00' and '2020-06-14 23:59:59'
        AND pm8.municipio = 'Cruzeiro do Sul' AND pm8.date between '2020-01-01 00:00:00' and '2020-06-14 23:59:59'
        AND pm9.municipio = 'Epitaciolandia' AND pm9.date between '2020-01-01 00:00:00' and '2020-06-14 23:59:59'
        AND pm10.municipio = 'Feijo' AND pm10.date between '2020-01-01 00:00:00' and '2020-06-14 23:59:59'
        AND pm11.municipio = 'Jordao' AND pm11.date between '2020-01-01 00:00:00' and '2020-06-14 23:59:59'
        AND pm12.municipio = 'Mancio Lima' AND pm12.date between '2020-01-01 00:00:00' and '2020-06-14 23:59:59'
        AND pm13.municipio = 'Manoel Urbano' AND pm13.date between '2020-01-01 00:00:00' and '2020-06-14 23:59:59'
        AND pm14.municipio = 'Marechal Thaumaturgo' AND pm14.date between '2020-01-01 00:00:00' and '2020-06-14 23:59:59'
        AND pm15.municipio = 'Placido de Castro' AND pm15.date between '2020-01-01 00:00:00' and '2020-06-14 23:59:59'
        AND pm16.municipio = 'Porto Acre' AND pm16.date between '2020-01-01 00:00:00' and '2020-06-14 23:59:59'
        AND pm17.municipio = 'Porto Walter' AND pm17.date between '2020-01-01 00:00:00' and '2020-06-14 23:59:59'
        AND pm18.municipio = 'Rio Branco' AND pm18.date between '2020-01-01 00:00:00' and '2020-06-14 23:59:59'
        AND pm19.municipio = 'Rodrigues Alves' AND pm19.date between '2020-01-01 00:00:00' and '2020-06-14 23:59:59'
        AND pm20.municipio = 'Santa Rosa do Purus' AND pm20.date between '2020-01-01 00:00:00' and '2020-06-14 23:59:59'
        AND pm21.municipio = 'Sena Madureira' AND pm21.date between '2020-01-01 00:00:00' and '2020-06-14 23:59:59'
        AND pm22.municipio = 'Senador Guiomard' AND pm22.date between '2020-01-01 00:00:00' and '2020-06-14 23:59:59'
        AND pm23.municipio = 'Tarauaca' AND pm23.date between '2020-01-01 00:00:00' and '2020-06-14 23:59:59'
        AND pm24.municipio = 'Xapuri' AND pm24.date between '2020-01-01 00:00:00' and '2020-06-14 23:59:59'";

    $statement = $pdo->prepare($sql);

    $statement->execute();


    while($results = $statement->fetch(PDO::FETCH_ASSOC)) {

        $result[] = $results;
    }

    echo json_encode($result);

?>

