

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>escola</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script>
    <link rel="shortcut icon" href="imagens/simboloFavicon.ico">
</head>
<body>
<?php 

if(isset($_POST['submit']))
{   
    echo($_POST['nome']);
    print_r($_POST['idade']);
    print_r($_POST['sala']);
    print_r($_POST['folha']);
}

?>
<!-------------------cabeçalho----------------------------------------------------->
    <header>
        <div class="SubHeader">
        <a href="" 
            div class="boxHeader">
                <img class="simboloHeaderHome" src="imagens/simboloHomee.png" alt="simboloHome"> 
                
            </div>
        </a>


        <div class="BoxTitleHeader">

            <p class="titleHeader">
                Kids vacation
            </p>
            
        </div>

        </div>
        <div class="boxProf" onclick="prof()"></div>
        
        
    </header>
        

    <div class="boxLowHeader"></div>
    <!-------------------Conteudo--------------------------------------------------->
    <main class="boxContent">
        
                     <!-- coluna 1 -->
        <div class="column"></div>
       


    <!--------------------------- coluna 2 principal -------------------------------->
            <div class="column columnMain">

                <div class="boxColumnMainHigh">

                    <main class="SubBoxColumnMainHigh">

                        <p class="textColumnMain">Nos conte como foram suas férias !   </p> 
                        <a href="#boxRegistration" button class="linkTela2" ><b>Clique aqui</b></button></a>

                    </main>
                    
                </div>
                
    <!----------------------box de mensagens-------------------------------------------->
                <div class="boxColumnMainLow">

                    <div class="subBoxColumnMainLow">


                        <box class="box box1">

                            <img src="imagens/simboloPlaneta.png" alt="imgPlaneta" class="simboloBox">

                            <div class="boxTextClass">
                                <h2 class="boxTitleH2">Fez uma viagem?</h1>
                                <p class="textBox">Fale sobre o lugar, as pessoas que conheceu, se aprendeu algo novo...</p>

                            </div>

                        </box>
                        




                        <box class="box box2">

                            <img src="imagens/simboloGame.png" alt="imgGame" class="simboloBox">

                            <div class="boxTextClass">

                                <h2 class="boxTitleH2">Jogou videogame?</h2>
                                <p class="textBox">Quais jogos? Sobre o que? Sozinho(a) ou com os amigos?<p>

                            </div>

                        </box>





                        <box class="box box3">

                            <img src="imagens/simboloPraia.png" alt="imgPraia" class="simboloBox">

                            <div class="boxTextClass">

                                <h2 class="boxTitleH2 boxPraia">Foi a praia?</h1>
                                <p class="textBox">Castelos de areia, encontrou conchas, brincou de bola...</p>

                            </div>
                            
                        </box>


                    </div>

                </div>

            </div>

        <!------------------------------------------------------------------------------------>

                <!-- coluna3 -->

        <div class="column"></div>


    </main>

    <!-------------------------------tela 2----------------------------------------------------->

    <main class="boxRegistrationContent">

        <div class="boxLowRegistrationContent"></div>


            <div class="contentRegistrationGrid">


                    <section id="boxRegistration" >

                        <div class="registrationHeader">
                            <p class="titleRegistrationHeader">Cadastro</p>
                        </div>

                        <div class="containerRegistration">

                            <div class="boxTextRegistrationHigh">
                                <p class="TextRegistrationHigh">Olá !<br>Para fazer sua redação, primeio preencha o cadastro e depois pegue uma folha para digitar ! </p>
                            </div>
                                
                
                <form action="cadastro.php" method="POST" onsubmit="return verificar()">

                                <div class="line1">

                                    <div class="subBoxLine1">
                                        
                                        <label for="inputName">Nome:</label>
                                        <input type="text" name="nome" placeholder="Digite seu nome..."  id="inputName" autocomplete="off" >

                                    </div>
                                    
                                    <div class="subBoxLine1">

                                        <label for="inputAge"> Idade:</label>
                                        <select name="idade" id="inputAge" >

                                            <option value=""  select>Selecione</option>
                                            <option value="9">9 Anos</option>
                                            <option value="10">10 Anos</option>
                                            <option value="11">11 Anos</option>

                                        </select>

                                    </div>

                                </div> 
                                



                                <div class="line2">

                                    <div class="subBoxLine2">

                                        <label for="inputSala">Sala:</label>
                                        <select name="sala"  id="inputSala" >

                                            <option value="" selected>Selecione</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>

                                        </select>

                                    </div>

                                    <div class="subBoxLine2 buttonPegarFolha">
                                    
                                        <p class="mensagemFolha">Clique para pegar uma folha </p>
                                        <button type="button" id="scriptFolha"   onclick="pegarFolha()">Pegar folha</button>

                                    </div>

                                </div>

                                    <div class="boxButtonSubmit">

                                        <input type="submit" name="submit" value="enviar" id="enviar" onclick="alertEnviar()">

                                    </div>

                                <div class="boxSimboloCrianca">

                                    <img src="imagens/simboloFoguete.png" alt="" id="simboloFoguete">

                                </div>
                                    
            

                        </div>
                        
                    </section>



                        <section class="boxTextArea">

                            <div class="containerTextArea">

                                <h1 id="textFolha">Pegue uma folha</h1>
                                        
                                <textarea name="folha" id="folha" cols="30" rows="10" maxlength="1472"  ></textarea>
                        
                            </div>

                            
                        </section>
                </form>



            </div>
        
        
    </main>

</body>

</html>