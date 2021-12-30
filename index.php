<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <link rel="icon" type="image/png" href="./img/labgama-favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Qualidade do Ar no Acre
    </title>

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/paper-dashboard.css?v=2.1.0" rel="stylesheet" />
    
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />

    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/academicons.min.css" />
</head>

<body class="">
    <div class="wrapper">
        <div class="sidebar " data-color="default"  data-active-color="danger">
            <div class="logo">
                <a href="#" class="simple-text logo-normal ">
                    <div class="logo-image-normal ">
                        <img src="./img/aq_acre_300x200.png">
                    </div>
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav ">
                    <li class="active">
                        <a href="./index.php">
                            <i class="fa fa-home" style="font-size:28px;"></i>
                            <p style="font-size: 16px;">Home</p>
                        </a>
                    </li>
                    <li>
                        <a href="./graficos1.php">
                            <i class="fa fa-line-chart"></i>
                            <p>Gráficos Gerais</p>
                        </a>
                    </li>
                    <li>
                        <a href="./graficos2.php">
                            <i class="fa fa-area-chart"></i>
                            <p>Gráficos Municipais</p>
                        </a>
                    </li>
                    <li>
                        <a href="./mapas.php">
                            <i class="nc-icon nc-world-2"></i>
                            <p>Mapas</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="javascript:;">Qualidade do Ar no Acre</a>
                    </div>
                </div>
            </nav>
            <!-- Content -->
            <div class="content">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card ">
                            <div class="card-header ">
                                <h5 class="card-title">Mapa da Rede de Monitoramento da Qualidade do Ar do Acre</h5>
                            </div>
                            <div class="card-body ">
                                <div class="map">
                                    <iframe src="https://www.purpleair.com/map?opt=1/mPM25/a10/cC4&inc=433023#5.66/-9.843/-70.883" style=" width: 100%; height: 500px;"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 padding-modify">
                        <div class="card ">
                            <div class="card-header ">
                                <h5 class="card-title">Escalas de qualidade do ar</h5>
                            </div>
                            <div class="card-body ">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Classe</th>
                                            <th scope="col">Descrição</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th class="color-1" scope="row">n/a</th>
                                            <td>O sensor não esta coletando dados no momento</td>
                                        </tr>
                                        <tr>
                                            <th class="color-2" scope="row">0-12</th>
                                            <td>A qualidade do ar é considerada satisfatória e a poluição do ar não apresenta risco a população</td>
                                        </tr>
                                        <tr>
                                            <th class="color-3" scope="row">12-35</th>
                                            <td>A qualidade do ar é aceitável. No entanto, se expostos por 24 horas ou mais, pode haver um problema de saúde moderado para um número muito pequeno de pessoas</td>
                                        </tr>
                                        <tr>
                                            <th class="color-4" scope="row">35-55</th>
                                            <td>Pessoas de grupos sensíveis podem sofrer efeitos na saúde se expostos por 24 horas. Não é provável que o público em geral seja afetado</td>
                                        </tr>
                                        <tr>
                                            <th class="color-5" scope="row">55-150</th>
                                            <td>Todos podem começar a ter efeitos na saúde se expostos por 24 horas; membros de grupos sensíveis podem experimentar efeitos mais graves na saúde</td>
                                        </tr>
                                        <tr>
                                            <th class="color-6" scope="row">150-350</th>
                                            <td>Alerta de saúde: todos podem experimentar efeitos mais graves na saúde se expostos por 24 horas</td>
                                        </tr>
                                        <tr>
                                            <th class="color-7" scope="row">> 350</th>
                                            <td>Avisos de saúde de condições de emergência se expostos por 24 horas. É provável que toda a população seja afetada</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header">
                                <h5 class="card-title">Descrição da Rede de Monitoramento da Qualidade do Ar do Acre</h5>
                            </div>
                            <div class="card-body">
                                <p class="p-card">Em junho 2019 se tornou operacional a maior rede de monitoramento da qualidade do ar da Amazônia, baseada em sensores <a href="https://www2.purpleair.com/products/purpleair-pa-ii-sd" target="_blank">PurpleAir PA-II-SD</a> de baixo custo e conceito inovador da Internet das Coisas (Internet of Things - IoT) que se conecta a uma rede internacional, com disponibilização de dados em tempo real e de forma gratuita. Foram instalados 30 sensores, distribuídos nas sedes dos 22 municípios do Estado do Acre. </p>
                                <p class="p-card">Esta ação foi realizada pelo <a href="https://www.mpac.mp.br/" target="_blank">Ministério Público do Estado do Acre</a> em parceria com a <a href="http://www.ufac.br/" target="_blank">Universidade Federal do Acre</a>, Tribunal de Justiça, Prefeitura de Assis Brasil, Secretaria de Meio Ambiente de Tarauacá, Batalhão da Polícia Militar de Capixaba, Instituto Federal do Acre/Campus Tarauacá, Prefeitura de Rodrigues Alves, Prefeitura de Jordão, Prefeitura de Santa Rosa do Purus, Prefeitura de Porto Acre, Defesa Civil de Tarauacá, Prefeitura de Xapuri, Prefeitura de Marechal Thaumaturgo, Instituto Federal do Acre/Sena Madureira, Prefeitura de Santa Rosa do Purus, 8.º Batalhão de Educação, Proteção e Combate a Incêndios Florestais/Urbanos de Xapuri e IMAC/Núcleo de Representação em Feijó/Envira.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header">
                                <h5 class="card-title">Laboratório de Geoprocessamento Aplicado ao Meio Ambiente - LabGAMA</h5>
                            </div>
                            <div class="card-body ">
                                <p class="p-card">O Laboratório de Geoprocessamento Aplicado ao Meio Ambiente (LabGAMA) foi criado em 2013 na Universidade Federal do Acre com a missão de aplicar técnicas e ferramentas de geoprocessamento e sensoriamento remoto para compreender melhor o ambiente em que vivemos.</p>
                                <p class="p-card">Atualmente o LabGAMA vem desenvolvendo, em parceria com diversas instituições, ações relacionadas a Rede de Monitoramento da Qualidade do Ar do Acre. Essas ações estão sendo lideradas pelo Dr. Willian Flores e comtemplam monitoramento e gestão da rede, processamento de dados e produção informação sobre qualidade do ar no Estado do Acre. Neste contexto, essa página web foi construída para divulgação das informações produzidas. Para tanto acesse as abas <a href="./dashboardGraficos.php">Gráficos Gerais</a>, <a href="./dashboardGraficos_mun.php">Gráficos Municipais</a> e <a href="./dashboardMaps.php">Mapas</a> na barra de navegação dessa página web. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header">
                                <h5 class="card-title">Sobre os Dados e Códigos</h5>
                            </div>
                            <div class="card-body ">
                                <p class="p-card">Os dados dos sensores Purpleair estão disponíveis em <a href="https://www.purpleair.com/sensorlist" target="_blank">https://www.purpleair.com/sensorlist</a>, onde foram acessados e processados no <a href="https://www.r-project.org/" target="_blank">Software R 3.6</a> e armazenados em banco de dados <a href="https://www.mysql.com/" target="_blank">MySQL</a>. Para diminuir o efeito da superestimativa, já demonstrada em <a href="https://doi.org/10.1016/j.atmosenv.2019.116946" target="_blank">estudos científicos</a>, causada pelos sensores de baixo curso como o <a href="https://www2.purpleair.com/products/purpleair-pa-ii-sd" target="_blank">PurpleAir PA-II-SD</a> empregado na rede de qualidade do ar do Acre, aplicamos a equação [PM2,5 (µg/m³) = 0,5 x PA (PM2,5 CF=1) – 0,66] desenvolvida pelo <a href=" https://www.lrapa.org/DocumentCenter/View/4147/PurpleAir-Correction-Summary" target="_blank">Lane Regional Air Protection Agency (LRAPA)</a> para corrigir os dados. Salientamos que os sensores de qualidade do ar estão localizados nas sedes dos 22 municípios do Acre, no entanto, no caso do primeiro mapa da aba <a href="./dashboardMaps.php">Mapas</a>, extrapolamos os números de dias acima do recomendado pela <a href=" https://www.who.int/eportuguese/countries/bra/pt/" target="_blank"> OMS </a> para toda a área do município, apenas para melhorar a visualização dos dados.</p>
                                <p class="p-card">Os dados de desmatamento apresentados na nesta página web foram produzidos pelo <a href="https://www.facebook.com/labgamaufac" target="_blank"> LabGAMA </a>. Os dados de focos de calor foram obtidos no <a href="http://queimadas.dgi.inpe.br/queimadas/bdqueimadas/" target="_blank"> banco de dados do INPE </a> e representam a soma dos registros de todos os satélites.</p>
                                <p class="p-card">Para elaborar esta página web foram utilizadas um grande número de informações disponíveis em fóruns e blogs especializados de Desenvolvimento Web. Além disso foram utilizados diretamente códigos disponíveis nas seguintes fontes: <a href="https://www.wxforum.net/index.php?topic=33482.0" target="_blank">Chris Formeister</a>, <a href="https://github.com/handsondataviz/leaflet-map-polygon-tabs/" target="_blank">Alvin Chang</a> e <a href=" https://creative-tim.com/live/paper-dashboard-2" target="_blank">Creative Tim Dashboard</a>. Todos os códigos fontes das aplicações desenvolvidas serão disponibilizados no canal do Dr. Willian Flores no <a href="https://github.com/willianflores" target="_blank"> GitHub </a>. Além disso foram utilizadas as API’s <a href=" https://www.chartjs.org/" target="_blank"> Chart.js </a>, <a href=" http://leafletjs.com" target="_blank">Leaflet</a> e <a href="http://www.openstreetmap.org/copyright" target="_blank">OpenStreetMap</a> para desenvolver os gráficos e mapas.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header ">
                                <h5 class="card-title">Pesquisadores Envolvidos</h5>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="card" style="background-color: #EEEEEE;">
                                            <img class="card-img-top" src="./img/willian-profile-grey.jpg" alt="Imagame da capa do cartão">
                                            <div class="card-body mt-4">
                                                <h5 class="card-title" style="text-align: center; font-weight: bolder; color: #6ab04c;">Willian Flores</h5>
                                                <h6 class="card-subtitle" style="text-align: center; font-weight: normal;">Professor / Pesquisador</h6>
                                                <p class="card-text" style="text-align: center;">UFAC</p>
                                                <div class="icon-block text-center">
                                                    <a class="card-link" href="https://www.researchgate.net/profile/Antonio_Melo9" target="_blank"><i class="ai ai-researchgate fa-2x fa-w i-hover" style="color:#6ab04c;"></i></a>
                                                    <a class="card-link" href="http://lattes.cnpq.br/9339997282776018" target="_blank"><i class="ai ai-lattes fa-2x fa-w" style="color:#6ab04c;"></i></a>
                                                    <a class="card-link" href="https://scholar.google.com.br/citations?user=4RY3BmQAAAAJ&hl=pt-BR" target="_blank"><i class="ai ai ai-google-scholar fa-2x fa-w" style="color:#6ab04c;"></i></a>
                                                    <a class="card-link" href="https://twitter.com/willianfloresac" target="_blank"><i class="fa fa-twitter fa-2x fa-w" style="color:#6ab04c;"></i></a>
                                                    <a class="card-link" href="https://www.facebook.com/willianfloresmelo" target="_blank"><i class="fa fa-facebook fa-2x fa-w" style="color:#6ab04c;"></i></a>
                                                </div>
                                                <div class="col-md-12 text-center mt-4">
                                                    <a href="mailto:willianflores@ufac.br" class="btn btn-block" style=" background-color: black;">Contato</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card" style="background-color: #EEEEEE;">
                                            <img class="card-img-top" src="./img/sonaira-silva-grey.jpg" alt="Imagame da capa do cartão">
                                            <div class="card-body mt-4">
                                                <h5 class="card-title" style="text-align: center; font-weight: bolder; color: #6ab04c;">Sonaira Silva</h5>
                                                <h6 class="card-subtitle" style="text-align: center; font-weight: normal;">Professora / Pesquisadora</h6>
                                                <p class="card-text" style="text-align: center;">UFAC</p>
                                                <div class="icon-block text-center">
                                                    <a class="card-link" href="https://www.researchgate.net/profile/Sonaira_Silva2" target="_blank"><i class="ai ai-researchgate fa-2x fa-w i-hover" style="color:#6ab04c;"></i></a>
                                                    <a class="card-link" href="http://lattes.cnpq.br/7877159779121386" target="_blank"><i class="ai ai-lattes fa-2x fa-w" style="color:#6ab04c;"></i></a>
                                                    <a class="card-link" href="https://scholar.google.com.br/citations?user=PJ-kR6MAAAAJ&hl=pt-BR" target="_blank"><i class="ai ai ai-google-scholar fa-2x fa-w" style="color:#6ab04c;"></i></a>
                                                    <a class="card-link" href="https://twitter.com/silva_sonaira" target="_blank"><i class="fa fa-twitter fa-2x fa-w" style="color:#6ab04c;"></i></a>
                                                    <a class="card-link" href="https://www.facebook.com/sonaira.souza.1" target="_blank"><i class="fa fa-facebook fa-2x fa-w" style="color:#6ab04c;"></i></a>
                                                </div>
                                                <div class="col-md-12 text-center mt-4">
                                                    <a href="mailto:sonairasilva@gmail.com" class="btn btn-block" style=" background-color: black;">Contato</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card" style="background-color: #EEEEEE;">
                                            <img class="card-img-top" src="./img/liana-anderson-grey.jpg" alt="Imagame da capa do cartão">
                                            <div class="card-body mt-4">
                                                <h5 class="card-title" style="text-align: center; font-weight: bolder; color: #6ab04c;">Liana Anderson</h5>
                                                <h6 class="card-subtitle" style="text-align: center; font-weight: normal;">Professora / Pesquisadora</h6>
                                                <p class="card-text" style="text-align: center;">CEMADEN</p>
                                                <div class="icon-block text-center">
                                                    <a class="card-link" href="https://www.researchgate.net/profile/Liana_Anderson" target="_blank"><i class="ai ai-researchgate fa-2x fa-w i-hover" style="color:#6ab04c;"></i></a>
                                                    <a class="card-link" href="https://orcid.org/0000-0001-9545-5136" target="_blank"><i class="ai ai-orcid fa-2x fa-w" style="color:#6ab04c;"></i></a>
                                                    <a class="card-link" href="http://lattes.cnpq.br/7834780583735756" target="_blank"><i class="ai ai-lattes fa-2x fa-w" style="color:#6ab04c;"></i></a>
                                                    <a class="card-link" href="https://scholar.google.com/citations?user=mbUxhL8AAAAJ&hl=pt-BR" target="_blank"><i class="ai ai ai-google-scholar fa-2x fa-w" style="color:#6ab04c;"></i></a>
                                                </div>
                                                <div class="col-md-12 text-center mt-4">
                                                    <a href="mailto:willianflores@ufac.br" class="btn btn-block" style=" background-color: black;">Contato</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card" style="background-color: #EEEEEE;">
                                            <img class="card-img-top" src="./img/foster-brown-grey.jpg" alt="Imagame da capa do cartão">
                                            <div class="card-body mt-4">
                                                <h5 class="card-title" style="text-align: center; font-weight: bolder; color: #6ab04c;">Foster Brown</h5>
                                                <h6 class="card-subtitle" style="text-align: center; font-weight: normal;">Professor / Pesquisador</h6>
                                                <p class="card-text" style="text-align: center;">WHRC / UFAC</p>
                                                <div class="icon-block text-center">
                                                    <a class="card-link" href="https://www.researchgate.net/profile/Foster_Brown2" target="_blank"><i class="ai ai-researchgate fa-2x fa-w i-hover" style="color:#6ab04c;"></i></a>
                                                    <a class="card-link" href="http://lattes.cnpq.br/6872847162199767" target="_blank"><i class="ai ai-lattes fa-2x fa-w" style="color:#6ab04c;"></i></a>
                                                    <a class="card-link" href="https://www.facebook.com/foster.brown.96" target="_blank"><i class="fa fa-facebook fa-2x fa-w" style="color:#6ab04c;"></i></a>
                                                </div>
                                                <div class="col-md-12 text-center mt-4">
                                                    <a href="mailto:willianflores@ufac.br" class="btn btn-block" style=" background-color: black;">Contato</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="card" style="background-color: #EEEEEE;">
                                            <img class="card-img-top" src="./img/alejandro-duarte-grey.jpg" alt="Imagame da capa do cartão">
                                            <div class="card-body mt-4">
                                                <h5 class="card-title" style="text-align: center; font-weight: bolder; color: #6ab04c;">Alejandro Duarte</h5>
                                                <h6 class="card-subtitle" style="text-align: center; font-weight: normal;">Professor / Pesquisador</h6>
                                                <p class="card-text" style="text-align: center;">UFAC</p>
                                                <div class="icon-block text-center">
                                                    <a class="card-link" href="http://lattes.cnpq.br/7579756540788697" target="_blank"><i class="ai ai-lattes fa-2x fa-w" style="color:#6ab04c;"></i></a>
                                                    <a class="card-link" href="https://www.facebook.com/fd.alejandro" target="_blank"><i class="fa fa-facebook fa-2x fa-w" style="color:#6ab04c;"></i></a>
                                                </div>
                                                <div class="col-md-12 text-center mt-4">
                                                    <a href="mailto:willianflores@ufac.br" class="btn btn-block" style=" background-color: black;">Contato</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card" style="background-color: #EEEEEE;">
                                            <img class="card-img-top" src="./img/vangela-nascimento-grey.jpg" alt="Imagame da capa do cartão">
                                            <div class="card-body mt-4">
                                                <h5 class="card-title" style=" text-align: center; font-weight: bolder; color: #6ab04c;">Vângela Nascimento</h5>
                                                <h6 class="card-subtitle" style="text-align: center; font-weight: normal;">Chefe</h6>
                                                <p class="card-text" style="text-align: center;">CAOP-MAPHU / MPAC</p>
                                                <div class="icon-block text-center">
                                                    <a class="card-link" href="https://www.facebook.com/vangelanasc" target="_blank"><i class="fa fa-facebook fa-2x fa-w" style="color:#6ab04c;"></i></a>
                                                    <a class="card-link" href="https://www.instagram.com/vangelanasc/" target="_blank"><i class="fa fa-instagram fa-2x fa-w" style="color:#6ab04c;"></i></a>
                                                </div>
                                                <div class="col-md-12 text-center mt-4">
                                                    <a href="mailto:sonairasilva@gmail.com" class="btn btn-block" style=" background-color: black;">Contato</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header ">
                                <h5 class="card-title">Relatórios Técnicos Produzidos</h5>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card mb-4 box-shadow" style="background-color: #EEEEEE;">
                                            <img class="card-img-top" src="./img/Relatorio_Qualidade_do_Ar_2019.jpg" alt="Imagem da capa do card">
                                            <div class="card-body">
                                                <p class="card-text">O relatório contém uma análise da qualidade do ar no Estado do Acre nos últimos sete meses de 2019. Os resultados foram individualizados por municípios.</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                        <form method="get" target="_blank" action="./files/20200408_Relatorio_Qualidade_do_Ar_2019_ver_final.pdf">
                                                            <button type="submit" class="btn btn-sm btn-outline-secondary">Baixar o Arquivo</button>
                                                        </form>
                                                    </div>
                                                    <small class="text-muted">25/06/2020</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-4 box-shadow" style="background-color: #EEEEEE;">
                                            <img class="card-img-top" src="./img/RelatorioQueimadas2019.jpg" alt="Imagem da capa do card">
                                            <div class="card-body">
                                                <p class="card-text">Relatório com o diagnóstico da situação das queimadas em 2019 no Estado do Acre. Foi feita uma análise geral e por municípios das queimadas agrícolas.</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                        <form method="get" target="_blank" action="./files/RelatorioQueimadas2019.pdf">
                                                            <button type="submit" class="btn btn-sm btn-outline-secondary">Baixar o Arquivo</button>
                                                        </form>
                                                    </div>
                                                    <small class="text-muted">25/06/2020</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-4 box-shadow" style="background-color: #EEEEEE;">
                                            <img class="card-img-top" src="./img/NotaTecnica-Cientifica.jpg" alt="Imagem da capa do card">
                                            <div class="card-body">
                                                <p class="card-text">A nota técnica discute a relação entre intensificação das queimadas na Amazônia e a saúde pública em tempos de pandemia, com destaque para as áreas rurais.</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                        <form method="get" target="_blank" action="./files/NotaTecnica-Cientifica.pdf">
                                                            <button type="submit" class="btn btn-sm btn-outline-secondary">Baixar o Arquivo</button>
                                                        </form>
                                                    </div>
                                                    <small class="text-muted">25/06/2020</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mb-4 box-shadow" style="background-color: #EEEEEE;">
                                            <img class="card-img-top" src="./img/AragaoetalDesmatamentoFogoeCOVID-19naAmazonia-SEMDOI.jpg" alt="Imagem da capa do card">
                                            <div class="card-body">
                                                <p class="card-text">A nota técnica sobre o desmatamento na Amazônia, a interação com o clima, o potencial de intensificar as queimadas e incêndios florestais e a COVID-19.</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="btn-group">
                                                        <form method="get" target="_blank" action="./files/AragaoetalDesmatamentoFogoeCOVID-19naAmazonia-SEMDOI.pdf">
                                                            <button type="submit" class="btn btn-sm btn-outline-secondary">Baixar o Arquivo</button>
                                                        </form>
                                                    </div>
                                                    <small class="text-muted">25/06/2020</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer footer-black  footer-white ">
                <hr>
                <div class="container-fluid">
                    <div class="row">
                        <div class="credits mx-auto">
                            <span class="copyright">
                                Copyright © <script>
                                    document.write(new Date().getFullYear())
                                </script> LabGAMA - Todos os direitos reservados
                            </span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="./assets/js/plugins/moment.min.js"></script>

    <!--  Plugin for Sweet Alert -->
    <script src="./assets/js/plugins/sweetalert2.min.js"></script>

    <!-- Forms Validations Plugin -->
    <script src="./assets/js/plugins/jquery.validate.min.js"></script>

    <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="./assets/js/plugins/jquery.bootstrap-wizard.js"></script>

    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="./assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>

    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="./assets/js/plugins/bootstrap-switch.js"></script>

    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="./assets/js/plugins/bootstrap-datetimepicker.js"></script>

    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
    <script src="./assets/js/plugins/jquery.dataTables.min.js"></script>

    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="./assets/js/plugins/bootstrap-tagsinput.js"></script>

    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="./assets/js/plugins/jasny-bootstrap.min.js"></script>

    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="./assets/js/plugins/fullcalendar.min.js"></script>

    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="./assets/js/plugins/jquery-jvectormap.js"></script>

    <!--  Plugin for the Bootstrap Table -->
    <script src="./assets/js/plugins/bootstrap-table.js"></script>

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>

    <!-- Chart JS -->
    <script src="./assets/js/plugins/chartjs.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="./assets/js/plugins/bootstrap-notify.js"></script>

    <!-- Control Center for Paper Dashboard -->
    <script src="./assets/js/paper-dashboard.js" type="text/javascript"></script>
</body>

</html>