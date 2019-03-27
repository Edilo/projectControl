<!-- MODAIS DE RESPOSTA //////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<div class="modal_janela"></div>
<div class="modal b-shadow">
    <img src='<?= HOME; ?>imagens_site/x_vermelho.png' class="x_modal" />
    <div class="modal-base ">
        <p class="modal_carregando" style=" text-align: center"></p>
        <p class="msn-sucess"></p>
        <p class="msn-alert "></p>
        <p class="msn-erro "></p>
    </div> 
</div>

<!--Carregando o sistema-->
<div class="modal_janela_c"></div>

<div class="carregando_sistem">
    <img src="<?php echo HOME; ?>imagens_fixas/carregando.gif" width="40"/> 
    <p>Aguarde, carregando o sistema!</p>
</div>

<!--carregar dentro do botão-->
<!--<div class="carregando"><img src="<?php //echo HOME;      ?>imagens_fixas/carregando.gif" style=" width: 10%; margin-right: 2%;"/> Aguarde carregando...</div>-->


<div class="inicio_acao radius b-shadow">
    <div class="cabeca_acao passo_1">
        <h1>1º Passo identifique o equipamento!</h1>
        <p>Identifique o equipamento, com a busca abaixo, pelas informações do cliente e buscando o equipamento ou buscando o equipamento diretamente.</p>
    </div>
    <div class="cabeca_acao passo_2  ds-none">
        <h1>2º Passo identifique quem esta abrindo a ocorrência!</h1>
        <p>Identifique a pessoa que esta abrindo esta ocorrência pela agenda do cliente.</p>
    </div>
    <div class="cabeca_acao passo_3 ds-none">
        <h1>3º Passo identifique o Tipo da ocorrência!</h1>
        <p>Selecione o tipo da ocorrência.</p>
    </div>
    <div class="conteudo_acao">
        <form method="post" name="busca_cliente_ocorrencia" class="form form_busca" style=" margin-top: 2%; padding: 0 1.8%">
            <div class="" style=" width: 60%; float: right">
                <input name="busca_text" placeholder="Busque aqui..." pattern=".{3,}" title="Mínimo de 3 caracteres" required type="text" style=" float: left; width: 79%" />
                <button class="btn btn_green fl-left" style="width: 20%; font-size: 0.8em; margin-left: 1%; padding: 11px 12px;">Buscar</button>
            </div>
            <div class="" style=" width: 38%; float: left;">
                <select name="busca_selec" required style="width: 100%;">
                   <option value="5">Número de série do equipamento</option>
                    <option value="1">Código SAP do cliente</option>
                    <option value="2">Nome do cliente</option>
                    <!--<option value="3">Segmento do cliente</option>-->
                    <option value="4">CPF ou CNPJ</option>
                    <!-- <option value="6">Número do patrimônio do equipamento</option>
                    <option value="7">Modelo do equipamento</option>
                    <option value="8">Local do equipamento</option>-->
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
            <div class="lista_nova ds-none">

            </div>
            <div class="limpar"></div>
            <div class="lista_nova2 ds-none" style=" margin-top: 3%;">

            </div>
            <div class="lista_nova3 ds-none" style=" margin-top: 3%;">

            </div>
            <div class="limpar"></div>
        </div>
    </div>
    <div class="limpar"></div>
</div>





<div class="inicio_agendamento radius b-shadow">
    <div class="conteudo_acao_agenda ds-none">

    </div>
    <div class="limpar"></div>
    <div class="lista_nova ds-none">

    </div>
    <div class="limpar"></div>

    <div class="lista_nova2 ds-none" style=" margin-top: 3%;">

    </div>
    <div class="limpar"></div>

    <div class="lista_nova3 ds-none" style=" margin-top: 3%;">

    </div>
    <div class="limpar"></div>
    <img src='<?php echo HOME; ?>imagens_fixas/close30.png' class="x_fechar_contato" />
</div>


<div class="relatorio_simples radius b-shadow">
    <div class="conteudo_relata_simples">
        <form method="post" name="fecha_relatorio_tecnico_t_reagenda" class="form" style="padding: 20px;">
            <div class="box box-media">
                <p class="texto_form">Modo de preenchimento</p>
                <select name="modo_preenchimento"  style="width: 100%;">
                     <option value=""></option>
                    <?php
                    $igual = new Read;
                    $igual->ExeRead('tab_modo_preenchimento', 'WHERE status = 1');
                    foreach ($igual->getResult() as $preenchimento):
                        ?>
                        <option value="<?= $preenchimento['id']; ?>"><?= $preenchimento['nome']; ?></option>
                        <?php
                    endforeach;
                    ?>
                </select>
            </div>
            
            <div class="box box-media">    
                <p class="texto_form">Data do reagendamento (Ex: 10/08/2016)</p>
                <input type="date" name="data_reagendado" required type="text" placeholder="Selecione a data de atendimento (Ex: 10/08/2016)" id="outra_data" maxlength="10" onkeypress="mascaraData(this, event)" style=" width: 100%" />
            </div>
            <!--<div class="limpar"></div>-->

            <div class="box box-media no-margim">
                <p class="texto_form">Hora Reagendamento:</p>
                <select name="hora_reagendado" required style="width: 100%;">
                    <option value="00:00:00">00:00:00</option>
                    <option value="01:00:00">01:00:00</option>
                    <option value="02:00:00">02:00:00</option>
                    <option value="03:00:00">03:00:00</option>
                    <option value="04:00:00">04:00:00</option>
                    <option value="05:00:00">05:00:00</option>
                    <option value="06:00:00">06:00:00</option>
                    <option value="07:00:00">07:00:00</option>
                    <option value="08:00:00">08:00:00</option>
                    <option value="09:00:00">09:00:00</option>
                    <option value="10:00:00">10:00:00</option>
                    <option value="11:00:00">11:00:00</option>
                    <option value="12:00:00">12:00:00</option>
                    <option value="13:00:00">13:00:00</option>
                    <option value="14:00:00">14:00:00</option>
                    <option value="15:00:00">15:00:00</option>
                    <option value="16:00:00">16:00:00</option>
                    <option value="17:00:00">17:00:00</option>
                    <option value="18:00:00">18:00:00</option>
                    <option value="19:00:00">19:00:00</option>
                    <option value="20:00:00">20:00:00</option>
                    <option value="21:00:00">21:00:00</option>
                    <option value="22:00:00">22:00:00</option>
                    <option value="23:00:00">23:00:00</option>
                </select>
            </div>
            <!--
            <div class="box box-larga no-margim">
                <p class="texto_form">Técnico</p>
                <input name="tecnico" type="text" placeholder="Técnico" value="<?= $_SESSION['relatorio_tecnico']; ?>" disabled style=" width: 100%" />
                <input name="tecnico_" type="hidden" value="<?= $_SESSION['relatorio_tecnico']; ?>" />
                
            </div>
            -->
            <div class="limpar"></div>

            <p class="texto_form">Por que reagendamento?</p>
            <textarea name="porq" required  style="width: 100%; height: 150px"></textarea>
            <div class="limpar"></div>
            <span class="carregando2 ds-none"><img src="<?= HOME; ?>imagens_fixas/carregando2.gif"/></span> 
            <button class="btn btn_green fl-left" style="font-size: 0.8em; margin-right: 1%">Fecha relatório técnico</button>
            <div class="limpar"></div>
        </form>
    </div>
    <div class="limpar"></div>
    <div class="lista_novas ds-none">

    </div>
    <div class="limpar"></div>

    <div class="lista_nova2 ds-none" style=" margin-top: 3%;">

    </div>
    <div class="limpar"></div>

    <div class="lista_nova3 ds-none" style=" margin-top: 3%;">

    </div>
    <div class="limpar"></div>
    <img src='<?php echo HOME; ?>imagens_fixas/close30.png' class="x_fechar_contato" />
</div>


<div class="alerta_relatorio radius b-shadow">
    <div class="conteudo_telatorio" style="padding: 2%;">

    </div>
    <div class="limpar"></div>
    <img src='<?php echo HOME; ?>imagens_fixas/close30.png' class="x_fechar_contato" />
</div>




<div class="box_relatorio radius b-shadow">
    <div class="conteudo_box">

    </div>
    <div class="limpar"></div>
    <div class="conteudo_box_resultado">

    </div>
    <div class="limpar"></div>
    <div class="conteudo_box_resultado2">

    </div>
    <div class="limpar"></div>
    <img src='<?php echo HOME; ?>imagens_fixas/close30.png' class="x_fechar_contato" />
</div>

<div class="modal_exclusao">
</div>
