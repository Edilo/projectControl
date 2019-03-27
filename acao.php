<?php
$titulo_cadastro = 'Cadastrar cliente';
$titulo_listagem = 'Lista de clientes';
$titulo_botao_de_acesso = 'Cadastrar novo cliente';
$titulo_foto = 'Foto da fachada do cliente';
$titulo_alterar = 'Alterar cadastro de cliente';
?>
<section class="box conteudo conteudo-completo">
    <article class="topo_azul_escuro ds-none cadastro" style="float: left; width: 100%">
        <div class="box_div_h1">
            <h1 class="box_h1"><?= $titulo_cadastro; ?></h1>
        </div>
        <div class="box_conteudo_">
        </div>
    </article>
    <center>
        <span class="carregando_topo ds-none"><img src="<?= HOME; ?>imagens_fixas/carregando2.gif"/></span> 
    </center>


    <article class="topo_azul_escuro alterar ds-none" style="float: left; width: 100%">

        <div class="box_div_h1">
            <h1 class="box_h1"><?= $titulo_alterar; ?></h1>
        </div>
        <!--FORMULÁRIO DE ALTERAÇÃO SENDO CHAMADO PELO DOM EM AJAX-->
        <div class="box_conteudo_ form_alt">

        </div>
        <div class="limpar"></div>
    </article>

    <div class="limpar"></div>
    <br>

    <article class="topo_cinza listagem" style="float: left; width: 100%">
        <div class="box_div_h1">
            <h1 class="box_h1">Ocorrências</h1>
        </div>
        <div class="limpar"></div>

        <form method="post" name="busca_cliente_acao" class="form" style=" margin-top: 2%; padding: 0 1.8%">
            <div class=""  style="width: 20%; float: right;">
                <a href="" class="btn btn_green fl-right abrir_acao" style="font-size: 0.8em; margin-top: 2%">Abrir nova ocorrência</a>
            </div>
            <div class="" style=" width: 60%; float: right">
                <input name="busca_text" placeholder="Busque aqui..." required type="text" style=" float: left; width: 79%" />
                <button class="btn btn_green fl-left" style="width: 20%; font-size: 0.8em; margin-left: 1%; padding: 11px 12px;">Buscar</button>
            </div>
            <input type="hidden" name="ky" value="1"/>
            <div class="" style=" width: 19%; float: left;">
                <select name="busca_selec" required style="width: 100%;">
                    <!--<option value="1">Número da ocorrência</option>-->
                     <option value="2">Nome do cliente</option>
                     <option value="4">CPF ou CNPJ</option>
                     <option value="5">Número de série</option>
                    <!-- <option disabled value="6">Número do patrimônio do equipamento (em desenvolvimento)</option>
                    <option disabled value="7">Modelo do equipamento (em desenvolvimento)</option>
                    <option disabled value="8">Local do equipamento (em desenvolvimento)</option>-->
                </select>
            </div>
        </form>

        <div class="limpar"></div>
        <br>

        <div class="box_conteudo_" style=" margin: 0; padding: 0 2%;">
            <div class="carregando_busca ds-none">
                <img src="<?= HOME; ?>imagens_fixas/carregando2.gif" style=""><span style=" margin-left: 1%;">Aguarde, carregando...</span>
                <div class="limpar"></div>
                <br>
            </div>
            <div class="limpar"></div>
            <div class="lista_nova_ ds-none">

            </div>
            <div class="limpar"></div>
            <div class="carregando_busca2 ds-none">
                <br>
                <img src="<?= HOME; ?>imagens_fixas/carregando2.gif" style=""><span style=" margin-left: 1%;">Aguarde, carregando...</span>
                <div class="limpar"></div>
                <br>
            </div>
            <div class="lista_nova_2 ds-none" style=" margin-top: 3%;">

            </div>
            <div class="lista_nova_3 ds-none" style=" margin-top: 3%;">

            </div>
            <div class="lista_nova_4 ds-none" style=" margin-top: 3%;">

            </div>
            <div class="limpar"></div>
        </div>

        <div class="limpar"></div>
    </article>
    <div class="limpar"></div>
</section>
<div class="limpar"></div>