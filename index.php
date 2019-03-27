<?php
require("./poo/app/Config.inc.php");
$sessao = new Session;
?>

<!DOCTYPE html>
<html lang="pt-br" itemscope itemtype="https://schema.org/WebPage">
    <head>
        <!--METAS DA PAGINA-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title><?= $pg_titulo ?></title>
        <meta name="description" content="<?= strip_tags($pg_descricao); ?>" />
        <meta name="robots" content="index, follow" />
        <meta name="author" content="<?= SITENOME; ?>" />
        <link rel="canonical" href="<?= $pg_url; ?>" />
        <link rel="base" href="<?= HOME; ?>"/> 

        <!--[if lt IE 9]>
          <script src="<?= HOME; ?>js/html5shiv.js"></script>
        <![endif]-->

        <!--MAPA DO ENDEREÇO
        <meta name="geo.region" content="BR-AM" />
        <meta name="geo.placename" content="Manaus" />
        <meta name="geo.position" content="-3.0701253,-59.9108451" />
        <meta name="ICBM" content="-3.0701253,-59.9108451" />
        -->

        <!--AUTORAÇÃO DA PAGINA-->
        <link rel="author" href="<?= $pg_autor; ?>"/>
        <link rel="publisher" href="<?= $pg_empresa; ?>"/>

        <!--SEO GENERICO PARA TODAS AS MIDIAS CONFIGURADO PARA O MICROFORMATO-->
        <meta itemprop="name" content="<?= $pg_titulo; ?>" />
        <meta itemprop="description" content="<?= strip_tags($pg_descricao); ?>" />
        <meta itemprop="image" content="<?= $pg_imagem; ?>" />
        <meta itemprop="url" content="<?= $pg_url; ?>" />


        <!--IDENTIFICADORES-->
        <meta property="article:author" content="<?= SITENOME; ?>" />
        <meta property="article:publisher" content="<?= SITENOME; ?>" />

        <link rel="shortcut icon" href="<?= HOME; ?>imagens_fixas/favicon.png"/>
        <link rel="stylesheet" href="<?= HOME; ?>poo/css/reset.css"/>

        <?php include('poo/css.php'); ?>
        <?php include('poo/js.php'); ?>
        <script type="text/javascript" src="<?= HOME; ?>poo/js_code.js"></script>
    </head>

    <body  <?php
    if ($pagina == 'home'): echo 'style="background-image: url(' . HOME . 'imagens_site/bg.jpg);  background-size: 100% 100%; background-position: top left; background-repeat: no-repeat; background-attachment: fixed;"';
    else: endif;
    ?>>
            <?php include('modais.php'); ?>
        <script type="text/javascript" src="<?= HOME ?>poo/app/Library/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
        <script type="text/javascript">
            tinyMCE.init({
                mode: "specific_textareas",
                editor_selector: "elm1",
                language: "pt",
            });
        </script>
        <!--
        ===========================================================================================================================================
            TITULO DA PAGINA: INDEX.PHP(PAGINA INICIAL)
            CRIADA EM: 20/04/2016
            DESENVOLVIDA POR: FABIO AUGUSTO
            CEO, CASA DOS SITES
            DESENVOLVIDO POR WWW.CASADOSSITES.COM
            HISTÓRICO DE ATUALIZAÇÃO: 13/05/2016
        ===========================================================================================================================================
        -->

        <!--
        ===========================================================================================================================================
        CABEÇA DO PROJETO
        ===========================================================================================================================================
        -->
        <?php
        if (!isset($_SESSION['usuario'])):

        else:
            $usuario = new Read;
            $usuario->ExeRead('perfil', 'WHERE id=:url', "url=" . $_SESSION['usuario'] . "");
            if ($usuario->getRowCount() >= 1):
                foreach ($usuario->getResult() as $usuario_)
                    ;

//                $usuario->ExeRead('tab_permissao_usuario', 'WHERE id_usuario = :id', "id=" . $usuario_['id'] . "");
//                if ($usuario->getRowCount() >= 1):
//                    foreach ($usuario->getResult() as $permissa_usuario):
//                        $arr_permisao[] = $permissa_usuario['permissao'];
//                    endforeach;
//                else:
//                    $arr_permisao[] = '';
//                endif;
            endif;
        endif;
        if ($pagina == 'home' || $pagina == 'mapa-clientes' || $pagina == 'painel'  || $pagina == 'print_relatorio_equipe' || $pagina == 'print_solicitacao_material' || $pagina == 'print_relatorio_ocorrencia' || $pagina == 'print_monitoramento' || $pagina == 'print_orcamento' || $pagina == 'print_monitoramento_embranco'
               || $pagina == 'print_relatorio_historico_equipamento' || $pagina == 'print_relatorio_tecnico'
            ):
        else:
            if (!isset($_SESSION['usuario'])):
                ?>
                <script language = "JavaScript">
                    location.href = "<?= HOME; ?>";
                </script>
                <?php
            else:
                $usuario = new Read;
                $usuario->ExeRead('perfil', 'WHERE id=:url', "url=" . $_SESSION['usuario'] . "");
                if ($usuario->getRowCount() >= 1):
                    foreach ($usuario->getResult() as $usuario_)
                        ;
                endif;
            endif;
            ?>
            <!--
            ===========================================================================================================================================
            MENU LATERAL
            ===========================================================================================================================================
            -->
            <section class="corpo">
                <article class="menu">
                    <img class="logo_menu" src="<?= HOME; ?>imagens_site/logo_branca.png" title="<?= SITENOME; ?>"/>
                    <br><br>
                    <h1 class="barra_menu link_controle">Controle geral</h1>
                    <div class="controle_menu ds-none">
                        <a href="<?= HOME; ?>dashboard">Página inicial</a>
                        <a href="<?= HOME; ?>ajuda/index.html" target='_blank'>Ajuda</a>
                    </div>
                    <?php
                    //$primeiro_bloco = array("1" , "2" , "3" , "4" , "5" , "6" , "7" , "8" , "9" , "10" , "11");
                    //$segundo_bloco = array();
                    //$valor= array();
                    //foreach($arr_permisao as $campo=>$valor1){ $valor[]= $valor1;}
                    //if (array_diff($primeiro_bloco, $valor)):
                      //  echo'vamos';
                      //  print_r(array_diff($primeiro_bloco, $valor));
                    //else:
                        ?>
                    <h1 class="barra_menu link_cadastro">Cadastros do sistemas</h1>
                    <div class="cadastro_menu ds-none">
                        <?= ((in_array('1', $arr_permisao)) ? '<a href="' . HOME . 'cadastrar_usuario">Usuários</a>' : '' ); ?>
                        <?= ((in_array('2', $arr_permisao)) ? '<a href="' . HOME . 'tecnico">Técnicos</a>' : '' ); ?>
                        <?= ((in_array('3', $arr_permisao)) ? '<a href="' . HOME . 'vendedor">Vendedores</a>' : '' ); ?>
                        <?= ((in_array('4', $arr_permisao)) ? '<a href="' . HOME . 'sla">SLA</a>' : '' ); ?>
                        <?= ((in_array('5', $arr_permisao)) ? '<a href="' . HOME . 'feriados">Feriados</a>' : '' ); ?>
                        <?= ((in_array('6', $arr_permisao)) ? '<a href="' . HOME . 'vinculo">Vínculo</a>' : '' ); ?>
                        <?= ((in_array('7', $arr_permisao)) ? '<a href="' . HOME . 'material">Material</a>' : '' ); ?>
                        <?= ((in_array('8', $arr_permisao)) ? '<a href="' . HOME . 'area_tecnica">Área técnica</a>' : '' ); ?>
                        <?= ((in_array('9', $arr_permisao)) ? '<a href="' . HOME . 'modelo">Modelo do equipamento</a>' : '' ); ?>
                        <?= ((in_array('10', $arr_permisao)) ? '<a href="' . HOME . 'tipo_contador">Tipo contador</a>' : '' ); ?>
                        <?= ((in_array('11', $arr_permisao)) ? '<a href="' . HOME . 'modo_coleta">Modo de coleta contador</a>' : '' ); ?>

                                         <!--<a href="<?//= HOME; ?>tecnico">Técnicos</a>
                                        <a href="<?//= HOME; ?>vendedor">Vendedores</a>
                                        <a href="<?//= HOME; ?>sla">SLA</a>
                                        <a href="<?//= HOME; ?>feriados">Feriados</a>
                                        <a href="<?//= HOME; ?>vinculo">Vínculo</a>
                                        <a href="<?//= HOME; ?>material">Material</a>
                                        <a href="<?//= HOME; ?>area_tecnica">Área técnica</a>
                                        <a href="<?//= HOME; ?>modelo">Modelo do equipamento</a>
                                        <a href="<?//= HOME; ?>tipo_contador">Tipo contador</a>
                                        <a href="<?//= HOME; ?>modo_coleta">Modo de coleta contador</a>-->
                    </div>
                    <?php
                      //  echo 'entrei';
                   // endif;
                    ?>
                    <h1 class="barra_menu link_dados">Dados comerciais</h1>
                    <div class="dados_menu ds-none">
                        <?= ((in_array('12', $arr_permisao)) ? '<a href="' . HOME . 'cliente">Clientes</a>' : '' ); ?>
                        <?= ((in_array('20', $arr_permisao)) ? '<a href="' . HOME . 'vinculo_equipamento">Equipamento</a>' : '' ); ?>
                        <?= ((in_array('13', $arr_permisao)) ? '<a href="' . HOME . 'cliente_equipamento">Vínculo cliente x equipamentos</a>' : '' ); ?>
                        <?= ((in_array('37', $arr_permisao)) ? '<a href="' . HOME . 'bloqueio_cliente">Bloqueio de Cliente</a>' : '' ); ?>
                        <?= ((in_array('49', $arr_permisao)) ? '<a href="' . HOME . 'lista_geral">Lista geral</a>' : '' ); ?>                        
<!--<a href="<?//= HOME; ?>cliente">Clientes</a>
                        <a href="<?//= HOME; ?>acao">Ocorrências</a>
                        <a href="<?//= HOME; ?>monitoramento">Monitoramento</a>
                        <a href="<?//= HOME; ?>orcamento">Orçamento</a>
                        <a href="<?//= HOME; ?>abertura_visitas">Agendamento de visitas</a>
                        <a href="<?//= HOME; ?>solicita_material">Solicitação de material</a>
                        <a href="<?//= HOME; ?>fechamento_tecnico">Relatório técnico</a>
                        <a href="<?//= HOME; ?>vinculo_equipamento">Equipamento</a>
                        <a href="<?//= HOME; ?>cliente_equipamento">Vínculo cliente x equipamentos</a>-->
                    </div>
                    <h1 class="barra_menu link_servico">Serviços</h1>
                    <div class="servico_menu ds-none">
                        <?= ((in_array('43', $arr_permisao)) ? '<a href="' . HOME . 'arquivamento">Arquivamento</a>' : '' ); ?>
                        <?= ((in_array('14', $arr_permisao)) ? '<a href="' . HOME . 'acao">Ocorrências</a>' : '' ); ?>
                        <?= ((in_array('17', $arr_permisao)) ? '<a href="' . HOME . 'abertura_visitas">Agendamento de visitas</a>' : '' ); ?>
                        <?= ((in_array('15', $arr_permisao)) ? '<a href="' . HOME . 'roteiro">Impressão de Roteiro</a>' : '' ); ?>
                        <?= ((in_array('45', $arr_permisao)) ? '<a href="' . HOME . 'monitoramento">Monitoramento</a>' : '' ); ?>
                        <?= ((in_array('19', $arr_permisao)) ? '<a href="' . HOME . 'fechamento_tecnico">Relatório técnico</a>' : '' ); ?>
                        <?= ((in_array('18', $arr_permisao)) ? '<a href="' . HOME . 'solicita_material">Solicitação de material</a>' : '' ); ?>
                        <?= ((in_array('16', $arr_permisao)) ? '<a href="' . HOME . 'orcamento">Orçamento</a>' : '' ); ?>
                        <?= ((in_array('21', $arr_permisao)) ? '<a href="' . HOME . 'acompanhamento">Acompanhamento</a>' : '' ); ?>
                        <?= ((in_array('35', $arr_permisao)) ? '<a href="' . HOME . 'painel" target="_blank">Painel</a>' : '' ); ?>
                        <?= ((in_array('36', $arr_permisao)) ? '<a href="' . HOME . 'mapa-clientes">Localização dos clientes</a>' : '' ); ?>
                        <?= ((in_array('47', $arr_permisao)) ? '<a href="' . HOME . 'rastreio">Rastreio</a>' : '' ); ?>
                        <?= ((in_array('46', $arr_permisao)) ? '<a href="' . HOME . 'dispositivo_movel">Dispositivo Móvel</a>' : '' ); ?>
                    </div>

                    <h1 class="barra_menu link_relatorio">Relatórios</h1>
                    <div class="relatorio_menu ds-none">
                        <?= ((in_array('22', $arr_permisao)) ? '<a href="' . HOME . 'relatorio_sla">SLA</a>' : '' ); ?>
                        <?= ((in_array('38', $arr_permisao)) ? '<a href="' . HOME . 'relatorio_credito">Relatório de Créditos</a>' : '' ); ?> 
                        <?= ((in_array('39', $arr_permisao)) ? '<a href="' . HOME . 'relatorio_deslocamento">Relatório de Deslocamento</a>' : '' ); ?> 
                        <?= ((in_array('40', $arr_permisao)) ? '<a href="' . HOME . 'relatorio_atendimento_cliente">Relatório de Atendimento ao Cliente</a>' : '' ); ?> 
                        <?= ((in_array('41', $arr_permisao)) ? '<a href="' . HOME . 'relatorio_visita_tecnica">Relatório de Visitas Técnicas</a>' : '' ); ?>
                        <?= ((in_array('42', $arr_permisao)) ? '<a href="' . HOME . 'relatorio_mensal">Relatorio Mensal</a>' : '' ); ?>
                        <?= ((in_array('23', $arr_permisao)) ? '<a href="' . HOME . 'relatorio_historico_equipamento">Histórico de Equipamento</a>' : '' ); ?>
                        <?= ((in_array('44', $arr_permisao)) ? '<a href="' . HOME . 'relatorio_historico_solicitacao_peca">Histórico de Solicitação de Peça</a>' : '' ); ?>
                        <?= ((in_array('48', $arr_permisao)) ? '<a href="' . HOME . 'relatorio_mensal_tecnico">Relatório Mensal/Técnico </a>' : '' ); ?>
                        <?= ((in_array('50', $arr_permisao)) ? '<a href="' . HOME . 'relatorio_performance_tecnica">Relatório de Performance Técnica</a>' : '' ); ?>
                        <?= ((in_array('51', $arr_permisao)) ? '<a href="' . HOME . 'relatorio_performance_outsourcing">Relatório de Performance Outsourcing</a>' : '' ); ?>
                        <?= ((in_array('52', $arr_permisao)) ? '<a href="' . HOME . 'relatorio_KPI">Relatório de KPI</a>' : '' ); ?>
                    </div>
<!--                    <h1 class="barra_menu link_local">Localizações</h1>
                    <div class="local_menu ds-none">
                        <a href="< HOME; ?>mapa-clientes">Localização dos clientes</a>
                    </div>-->
                    <h1 class="barra_menu link_local2">Links externos</h1>
                    <div class="local_menu2 ds-none">
                        <a href="https://sps.konicaminolta.net/" target="_blank">KMBT Solution Portal Site Home</a>
                        <a href="http://kmit.bt.konicaminolta.net/kmit/app/SYS_login.aspx" target="_blank">KMIT</a>
                        <a href="https://bslj.konicaminolta.com/" target="_blank">Manuais Japão</a>
                        <a href="ftp://ftp.bs.konicaminolta.com.br/" target="_blank">Manuais Brasil</a>
                        <a href="https://infoportal.konicaminolta.eu/" target="_blank">InfoHub</a>
                        <a href="http://www.mykonicaminolta.com" target="_blank">MyKonicaMinolta</a>
                        <a href="http://fluig.konicaminolta.com.br" target="_blank">Fluig Konica Minolta</a>
                    </div>
                </article>
                <!--
                ===========================================================================================================================================
                  MENU SUSPENSO 
                ===========================================================================================================================================
                -->                
                <article class="cont">
                    <div class="menu_suspenso">
                        <div class="fl-left">
                            <a href="" class="mostar_menu" data-balloon="Mostrar Menu" data-balloon-pos="right">
                                <img src="<?= HOME; ?>imagens_site/menu.png" class="menu_ss" style=" width: 70%; cursor: pointer;" />
                            </a>
                            <a href="" class="esconder_menu ds-none" data-balloon="Fechar Menu" data-balloon-pos="right">
                                <img src="<?= HOME; ?>imagens_site/close2.png" class="menu_ss2" style=" width: 70%; cursor: pointer;" />
                            </a>
                        </div>
                        <div class="fl-right avatar" style="width: 50%;">

                            <a class="fl-right btn btn_green" href="<?= HOME; ?>sair" title="Sair" style="font-size: 0.9em; margin-right: 3.3%; margin-top: 1.2%; margin-left: 2%;">Sair</a>

                            <a href="<?= HOME; ?>alterar_perfil" data-balloon="Meu perfil" data-balloon-pos="down" class="fl-right" style="color: #fff; margin-right: 4.3%; margin-top: 2.9%; margin-left: 2%; font-size: 0.9em"><?= Check::Limitador($usuario_['nome'], 3); ?></a>
                            <?php
                            if ($usuario_['avatar'] == ''):
                                echo Check::Imagem('imagens_fixas/sem_imagem.jpg', 'Sem imagem', '400', '400', 'radius-circulo fl-right');
                            else:
                                echo Check::Imagem('imagens_site/' . $usuario_['avatar'] . '', '' . $usuario_['nome'] . '', '400', '400', 'radius-circulo fl-right');
                            endif;
                            ?>
                        </div>
                        <div class="limpar"></div>
                    </div>
                    <div class="limpar"></div>
                    <!--
                    ===========================================================================================================================================
                    BASE DE CHAMADA DE OUTRAS PAGINAS
                    ===========================================================================================================================================
                    -->
                <?php
                endif;
                require("{$pagina}.php"); //para outras páginas apenas recuperar por  $atual[1], $atual[2]
                if ($pagina == 'home'):
                else:
                    ?>
                </article>
            </section>
        <?php endif; ?>   

    </body>
</html>