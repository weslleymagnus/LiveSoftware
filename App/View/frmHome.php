<!DOCTYPE html>
<!----------------------------------------------------------------------
-----------------------  HOME  -----------------------------------------
----------------------------------------------------------------------->
<html  xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8">
        <link href="CSS/StyleSheetLoja.css"  rel="stylesheet" />
        <link rel="stylesheet" href="CSS/css.banner.min.css">
        <link rel="stylesheet" href="CSS/css.banner.tema.css">
        
    </head>
    <body>
        <!--CONTEUDO-->
        <div id="conteudo">
        
            <div id=""><!--BANNER-->
                <div class="gallery autoplay items-3">
                    <div id="item-1" class="control-operator"></div>
                    <div id="item-2" class="control-operator"></div>
                    <div id="item-3" class="control-operator"></div>
                    <div id="item-4" class="control-operator"></div>

                    <figure class="item">
                        <img src="Imagem/banner1.png" />
                    </figure>

                    <figure class="item">
                        <img src="Imagem/banner2.png" />
                    </figure>

                    <figure class="item">
                        <img src="Imagem/banner3.png" />
                    </figure>
                    
                    <figure class="item">
                        <img src="Imagem/banner4.png" />
                    </figure>

                    <div class="controls">
                        <a href="#item-1" class="control-button"><h1>°</h1></a>
                        <a href="#item-2" class="control-button"><h1>°</h1></a>
                        <a href="#item-3" class="control-button"><h1>°</h1></a>
                        <a href="#item-4" class="control-button"><h1>°</h1></a>
                    </div>
                </div>
    
            </div><!--FIM DO BANNER-->
            
            <!--BARRA DE MENU-->
            <div id="posi_menu">
                <div id="menuBar">
                    <div id="menu">
                        <ul>
                            <li id="home"><a href="frmHome.php">Home</a></li>
                            <li id="programas"><a href="frmPrograma.php">Programas</a></li>
                            <li id="jogos"><a href="frmJogos.php">Jogos</a></li>
                            <li id="aplicativos"><a href="frmAplicativo.php">Aplicativos</a></li>
                        </ul>
                    </div>
                </div>
            </div><!--FIM BARRA DE MENU-->
            
            <div id="rodape"><!--RODAPÉ-->
                <div id="textRodape">
                    <h6>LiveSoftware. Desenvovedores: Joás Lima, Mario Lima, Flávia Mederos e Adilson Miranda</h6>
                </div>
            </div><!--FIM DO RODAPÉ-->
            
            <div id="logoLS"></div>
            
            <!--CABEÇARIO -->
            <div id="cabecario_elem">
                <div id="iconCabecario">
                    <ul id="redeSociais">
                        <li id="iconeFacebook">
                            <a href="https://www.facebook.com"><img src="Imagem/icone_facebook.png" title="Facebook"/></a>
                        </li>
                        <li id="iconeTwite">
                            <a href="https://twitter.com/"><img src="Imagem/icone_twite.png" title="Twite" /></a>
                        </li>
                        <li id="iconeGmail">
                            <a href="http://gmail.com/"><img src="Imagem/icone_gmail.png" title="Gmail" /></a>
                        </li>
                        <li id="iconeYoutube">
                            <a href="https://www.youtube.com/"><img src="Imagem/icone_youtube.png" title="Youtube" /></a>
                        </li>
                    </ul>
                    <ul id="campUsuario">
                        <li id="iconeCadastro" >
                            <a href="frmCadCliente.php"><img src="Imagem/icone_cadastro_client.png" title="Cadastrar" /></a>
                        </li>
                        <li id="idLogin">
                            <form id="formUsuario" class="classFormUsuario" action="" method="POST">
                                <p>Login: <input type="text" name="login" /></p>
                                <p>Senha: <input type="text" name="senha"/></p>
                            </form>
                        </li>
                        <li id="iconeCarrinhoCompras">
                            <a href="frmCarrCompras.php"><img src="Imagem/icone_carrinho_compras.png" title="Suas compras" /></a>
                        </li>
                    </ul>
                </div>
            </div><!--FIM DO CABEÇARIO-->
                    
        </div><!--FIM DO CONTEUDO-->
    </body>
</html>