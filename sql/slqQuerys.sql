/* CREATE TABLE */
CREATE TABLE hours (
	id_hours int AUTO_INCREMENT,
    dates date,
    municipio varchar(50),
    pm2_5 float,
    PRIMARY KEY (id_hours)
);

CREATE TABLE hours_up (
    id_hours_up int AUTO_INCREMENT,
    dates date,
    municipio varchar(50),
    pm2_5 float,
    PRIMARY KEY (id_hours_up)
);

/* COM FILTRO DE DATA  */
SELECT
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
    IFNULL(round(pm24.pm2_5,0),'NaN') AS 'xapuri',
    IFNULL(round(pm25.pm2_5,0),'NaN') AS 'up_pm2_5'
   
    FROM `day` pm1 
        JOIN `day` pm2 ON pm1.date = pm2.date
        JOIN `day` pm3 ON pm1.date = pm3.date
        JOIN `day` pm4 ON pm1.date = pm4.date 
        JOIN `day` pm5 ON pm1.date = pm5.date
        JOIN `day` pm6 ON pm1.date = pm6.date
        JOIN `day` pm7 ON pm1.date = pm7.date
        JOIN `day` pm8 ON pm1.date = pm8.date
        JOIN `day` pm9 ON pm1.date = pm9.date
        JOIN `day` pm10 ON pm1.date = pm10.date
        JOIN `day` pm11 ON pm1.date = pm11.date
        JOIN `day` pm12 ON pm1.date = pm12.date
        JOIN `day` pm13 ON pm1.date = pm13.date
        JOIN `day` pm14 ON pm1.date = pm14.date
        JOIN `day` pm15 ON pm1.date = pm15.date
        JOIN `day` pm16 ON pm1.date = pm16.date
        JOIN `day` pm17 ON pm1.date = pm17.date
        JOIN `day` pm18 ON pm1.date = pm18.date
        JOIN `day` pm19 ON pm1.date = pm19.date
        JOIN `day` pm20 ON pm1.date = pm20.date
        JOIN `day` pm21 ON pm1.date = pm21.date
        JOIN `day` pm22 ON pm1.date = pm22.date
        JOIN `day` pm23 ON pm1.date = pm23.date
        JOIN `day` pm24 ON pm1.date = pm24.date
        JOIN `day` pm25 ON pm1.date = pm25.date

    WHERE
        pm1.municipio = 'Acrelandia' AND pm1.date between '2020-01-01 00:00:00' and '2020-06-14 23:59:59'
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
        AND pm24.municipio = 'Xapuri' AND pm24.date between '2020-01-01 00:00:00' and '2020-06-14 23:59:59'
        AND pm25.municipio = 'up_pm2_5' AND pm25.date between '2020-01-01 00:00:00' and '2020-06-14 23:59:59';
    

/* SEM FILTRO DE DATA  */     
SELECT
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
    IFNULL(round(pm14.pm2_5,0),'NaN') AS 'marechal_Thaumaturgo',
    IFNULL(round(pm15.pm2_5,0),'NaN') AS 'Placido de Castro',
    IFNULL(round(pm16.pm2_5,0),'NaN') AS 'porto_acre',
    IFNULL(round(pm17.pm2_5,0),'NaN') AS 'porto_walter',
    IFNULL(round(pm18.pm2_5,0),'NaN') AS 'rio_branco',
    IFNULL(round(pm19.pm2_5,0),'NaN') AS 'rodrigues_alves',
    IFNULL(round(pm20.pm2_5,0),'NaN') AS 'santa_rosa_do_purus',
    IFNULL(round(pm21.pm2_5,0),'NaN') AS 'sena_madureira',
    IFNULL(round(pm22.pm2_5,0),'NaN') AS 'senador_guiomard',
    IFNULL(round(pm23.pm2_5,0),'NaN') AS 'tarauaca',
    IFNULL(round(pm24.pm2_5,0),'NaN') AS 'xapuri',
    IFNULL(round(pm25.pm2_5,0),'NaN') AS 'up_pm2_5'
   
    FROM `day` pm1 
        JOIN `day` pm2 ON pm1.date = pm2.date
        JOIN `day` pm3 ON pm1.date = pm3.date
        JOIN `day` pm4 ON pm1.date = pm4.date 
        JOIN `day` pm5 ON pm1.date = pm5.date
        JOIN `day` pm6 ON pm1.date = pm6.date
        JOIN `day` pm7 ON pm1.date = pm7.date
        JOIN `day` pm8 ON pm1.date = pm8.date
        JOIN `day` pm9 ON pm1.date = pm9.date
        JOIN `day` pm10 ON pm1.date = pm10.date
        JOIN `day` pm11 ON pm1.date = pm11.date
        JOIN `day` pm12 ON pm1.date = pm12.date
        JOIN `day` pm13 ON pm1.date = pm13.date
        JOIN `day` pm14 ON pm1.date = pm14.date
        JOIN `day` pm15 ON pm1.date = pm15.date
        JOIN `day` pm16 ON pm1.date = pm16.date
        JOIN `day` pm17 ON pm1.date = pm17.date
        JOIN `day` pm18 ON pm1.date = pm18.date
        JOIN `day` pm19 ON pm1.date = pm19.date
        JOIN `day` pm20 ON pm1.date = pm20.date
        JOIN `day` pm21 ON pm1.date = pm21.date
        JOIN `day` pm22 ON pm1.date = pm22.date
        JOIN `day` pm23 ON pm1.date = pm23.date
        JOIN `day` pm24 ON pm1.date = pm24.date
        JOIN `day` pm25 ON pm1.date = pm25.date

    WHERE
        pm1.municipio = 'Acrelandia' 
        AND pm2.municipio = 'media' 
        AND pm3.municipio = 'Acrelandia' 
        AND pm4.municipio = 'Assis Brasil' 
        AND pm5.municipio = 'Brasileia'
        AND pm6.municipio = 'Bujari' 
        AND pm7.municipio = 'Capixaba' 
        AND pm8.municipio = 'Cruzeiro do Sul' 
        AND pm9.municipio = 'Epitaciolandia' 
        AND pm10.municipio = 'Feijo' 
        AND pm11.municipio = 'Jordao' 
        AND pm12.municipio = 'Mancio Lima'
        AND pm13.municipio = 'Manoel Urbano' 
        AND pm14.municipio = 'Marechal Thaumaturgo' 
        AND pm15.municipio = 'Placido de Castro' 
        AND pm16.municipio = 'Porto Acre' 
        AND pm17.municipio = 'Porto Walter' 
        AND pm18.municipio = 'Rio Branco' 
        AND pm19.municipio = 'Rodrigues Alves' 
        AND pm20.municipio = 'Santa Rosa do Purus'
        AND pm21.municipio = 'Sena Madureira' 
        AND pm22.municipio = 'Senador Guiomard' 
        AND pm23.municipio = 'Tarauaca' 
        AND pm24.municipio = 'Xapuri' 
        AND pm25.municipio = 'up_pm2_5';