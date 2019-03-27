<section class="pg_login box conteudo conteudo-completo">
    <?php
    $Browser = $_SESSION['useronline']['online_agent'];
    if (strpos($Browser, 'Chrome')):
        $Browser = 'Chrome';
    elseif (strpos($Browser, 'Firefox')):
        $Browser = 'Firefox';
    elseif (strpos($Browser, 'MSIE') || strpos($Browser, 'Trident/')):
        $Browser = 'IE';
    else:
        $Browser = 'Outros';
    endif;

    if ($Browser == 'IE'):
        ?>
        <img class="" src="<?= HOME; ?>imagens_site/logo2.png" title="<?= SITENOME; ?>"/>
        <div class="limpar"></div>
        <article class="login radius b-shadow">
            <h1 style="margin-bottom: 4%;">Bem vindo ao Eagles System.</h1>
            <p>Verificamos que seu navegador e o Internet Explorer, devido a descontinuidade deste navegador o sistema Eagles System não e compatível com o mesmo.</p>
            <p>Devido a inúmeros sistemas de segurança, efeitos e usabilidade do sistema peço que baixe um dos navegadores compativeis com o sistema.</p>
            <br>
            <a style="color: #000;" href="https://www.google.com/chrome/browser/desktop/index.html" target="_blank">Baixe o Chrome</a><br>
            <a style="color: #000;" href="https://www.mozilla.org/pt-BR/firefox/new/" target="_blank">Baixe o Firefox</a><br>
            <br><br>
            <p>Obrigado pela compreensão!</p>
        </article>
        <?php
    else:
        ?>
        <img class="ds-none" src="<?= HOME; ?>imagens_site/logo2.png" title="<?= SITENOME; ?>"/>
        <div class="limpar"></div>
        <article class="login ds-none radius b-shadow">
            <h1 style="margin-bottom: 2%;">Bem vindo ao Eagles System.</h1>
            <form class="form login_" method="post" name="logar">  
                <p class="texto_form">E-mail cadastrado</p>
                <input name="login" style="width: 100%" required placeholder="Seu e-mail cadastrado" type="email"/>
                <p class="texto_form">Sua senha</p>
                <input name="senha" style="width: 100%;" required placeholder="Sua senha cadastrado" type="password"/>
                <p class="fl-right recuperar" style="cursor: pointer; margin-bottom: 3%; font-size: 0.9em;">Esqueceu sua senha?</p>
                <div class="limpar"></div>
                <div style="float: left; width: 30%; font-size: 0.9em;">
                    <span style="font-weight: 600">Seu IP:</span> <br>
                    <?= $_SERVER['REMOTE_ADDR']; ?>
                </div>
                <div style="float: left; width: 39%; font-size: 0.9em; ">
                    <?php
                    echo '<span style="font-weight: 600">Seu navegador:</span><br>' . $Browser;
                    ?>
                </div>
                <input type="hidden" name="nav" value="<?= $Browser; ?>"/>
                <input type="hidden" name="ip" value="<?= $_SERVER['REMOTE_ADDR']; ?>"/>

                <button class="btn btn_green fl-right" style="width: 30%; font-size: 0.9em;">Entrar</button>
            </form>
            <form class="form ds-none senha_" method="post" name="senha">     
                <p class="texto_form">E-mail cadastrado</p>
                <input name="email" style="width: 100%" required placeholder="Seu e-mail cadastrado" type="email"/>
                <p class="fl-right logando" style="cursor: pointer;  margin-bottom: 3%; font-size: 0.9em;">Voltar ao login.</p>
                <div class="limpar"></div>
                <div style="float: left; width: 30%; font-size: 0.9em;">
                    <span style="font-weight: 600">Seu IP:</span> <br>
                    <?= $_SERVER['REMOTE_ADDR']; ?>
                </div>
                <div style="float: left; width: 39%; font-size: 0.9em; ">
                    <?php
                    echo '<span style="font-weight: 600">Seu navegador:</span><br>' . $Browser;
                    ?>
                </div>
                <button class="btn btn_green fl-right" style="width: 30%; font-size: 0.9em;">Recuperar</button>
            </form>
            <div class="limpar"></div>
        </article>
        <div class="limpar"></div>
<!--        <a href="https://www.casadossites.com" class="criador" target="_blank" title="Desenvolvido por: Casa dos Sites">
            <img class="ds-none" src="<?= HOME; ?>imagens_site/casadossites3.png" title="Desenvolvido por: Casa dos Sites"/>
        </a>-->
    <?php
    endif;
    ?>

</section>