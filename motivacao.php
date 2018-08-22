<html>
  <head>
    <title>Objeto de Aprendizagem - Sólidos</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/emojirating/emoji.js"></script>
  </head>
  <body>
      <div class="container-fluid" style="min-height: 100%; min-height: 100vh; display: flex; align-items: center;">
        <div class="row vertical-align" style="display: flex; align-items: flex-end;">
          <div class="col align-bottom">

          </div>
          <div class="col-6">
            <div class="card" style="border:none;">
                <img class="card-img-top" src="./img/HISTORIA/019.jpg" alt="019" style="height: 1px; margin-top:-1px;">
                <br><br><h3>Perfil</h3>
                <form action="#" method="post">
                    <label for="nascimento">Data de Nascimento:</label>&nbsp<input type="text" id="nascimento" rel="Data de nascimento" placeholder="dd/mm/aaaa"><br>
                    <label for="sexo">Sexo:</label>
                    <select id="sexo" rel="Sexo">
                        <option value="selecione">Selecione</option>
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                        <option value="outros">Outros</option>
                    </select><br>
                    <label for="surdez">Possui algum grau de surdez? </label>
                    <select id="surdez" rel="Possui algum grau de surdez?">
                        <option value="nao">Não</option>
                        <option value="sim">Sim</option>
                    </select><br>
                    <label for="surdez" rel="Nível de surdez:">Nível de surdez:</label>
                    <select id="nivel_surdez">
                        <option value="nao">Não</option>
                        <option value="profundo">Profundo</option>
                        <option value="parcial">Parcialmente surdo</option>
                        <option value="outros">Outros</option>
                    </select><br>
                    <label for="origem_surdez">Quando ocorreu a surdez?</label>
                    <select id="origem_surdez" rel="Quando ocorreu a surdez?">
                        <option value="nao">Não</option>
                        <option value="natisurdo">Natisurdo</option>
                        <option value="antes">Antes de aprender a língua portuguesa oral/escrita</option>
                        <option value="depois">Depois de aprender a língua portuguesa oral/escrita</option>
                    </select><br>
                    <label for="lingua">Qual sua primeira língua?</label>
                    <select id="lingua" rel="Qual sua primeira língua?">
                        <option value="selecione">Selecione</option>
                        <option value="portuguesa">Língua portuguesa oral/escrita</option>
                        <option value="libras">LIBRAS</option>
                    </select><br>
                    <label for="visual">Possui alguma deficiência visual?</label>
                    <select id="visual" rel="Possui alguma deficiência visual?">
                        <option value="nao">Não</option>
                        <option value="sim">Sim</option>
                    </select><br>
                    <label for="nivel_visual">Nível da deficiência visual:</label>
                    <select id="nivel_visual" rel="Nível da deficiência visual:">
                        <option value="nao">Não</option>
                        <option value="cego">Cego</option>
                        <option value="parcialmente">Enxerga parcialmente</option>
                        <option value="outro">Outro</option>
                    </select><br>
                    <label for="origem_visual">Quando ocorreu a deficiência visual?</label>
                    <select id="origem_visual" rel="Quando ocorreu a deficiência visual?">
                        <option value="nao">Não</option>
                        <option value="nascimento">Nascimento</option>
                        <option value="infancia">Infância</option>
                        <option value="adolescencia">Adolescência</option>
                        <option value="adulto">Adulto</option>
                    </select><br>
                    <label for="comunicacao">Qual sua forma natural de comunicação?</label>
                    <select id="comunicacao" rel="Qual sua forma natural de comunicação?">
                        <option value="selecione">Selecione</option>
                        <option value="fala">Fala</option>
                        <option value="escrita">Escrita</option>
                        <option value="libras">LIBRAS</option>
                        <option value="outra">Outra</option>
                    </select><br>
                    <label for="quadrinhos">Qual sua opinião sobre histórias em quadrinhos?</label>
                    <select id="quadrinhos" rel="Qual sua opinião sobre histórias em quadrinhos?">
                        <option value="selecione">Selecione</option>
                        <option value="gosto">Gosto</option>
                        <option value="ngosto">Não Gosto</option>
                        <option value="outra">Outra</option>
                    </select><br>
                    <label for="porque_quadrinhos">Porque? </label>&nbsp<input type="text" rel="Porque da opinião sobre histórias em quadrinhos" id="porque_quadrinhos"><br>
                    <label for="preferido">Cite qual história em quadrinhos preferido: </label>&nbsp<input type="text" rel="História em quadrinhos favorita" id="preferido"><br>
                    <label for="quadrinhos">Qual sua opinião sobre jogos?</label>
                    <select id="quadrinhos" rel="Qual sua opinião sobre jogos?">
                        <option value="selecione">Selecione</option>
                        <option value="gosto">Gosto</option>
                        <option value="ngosto">Não Gosto</option>
                        <option value="outra">Outra</option>
                    </select><br>
                    <label for="porque_jogos">Porque? </label>&nbsp<input type="text" rel="Porque da opinião sobre jogos" id="porque_jogos"><br>
                    <label for="preferido">Cite qual jogo preferido: </label>&nbsp<input type="text" rel="Jogo preferido" id="preferido"><br>
                    <br><br><h3>Questionário Motivação</h3>
                <label for="mot_1">1. Fiquei curioso para usar o objeto de aprendizagem</label>
                <div id="mot_1"></div>
                <label for="mot_2">2. A narrativa da história em quadrinhos estimulou minha atenção</label>
                <div id="mot_2"></div>
                <label for="mot_3">3. Percebi os links com conteúdo de aprendizagem como parte da história</label>
                <div id="mot_3"></div>
                <label for="mot_4">4. As atividades na história deixaram o objeto mais desafiador</label>
                <div id="mot_4"></div>
                <label for="mot_5">5. O objeto de aprendizagem me forneceu conhecimento necessário para passar pelos desafios da história</label>
                <div id="mot_5"></div>
                <label for="mot_6">6. O objeto de aprendizagem me motivou a aprender</label>
                <div id="mot_6"></div>
                <label for="mot_7">7. Percebei que os desafios exigiam dos conhecimentos que eu ia obtendo no decorrer da leitura do objeto de aprendizagem</label>
                <div id="mot_7"></div>
                <label for="mot_8">8. Foi fácil entender a forma de leitura do objeto de aprendizagem</label>
                <div id="mot_8"></div>
                <label for="mot_9">9. Entendi a relação dos conteúdos de aprendizagem com a história narrada</label>
                <div id="mot_9"></div>
                <label for="mot_10">10. Consegui entender todos os textos escritos em língua portuguesa</label>
                <div id="mot_10"></div>
                <label for="mot_11">11. Consegui entender todas as imagens</label>
                <div id="mot_11"></div>
                <label for="mot_12">12. Minha participação nos desafios deixou o ato de ler a história mais interessante</label>
                <div id="mot_12"></div>
                <label for="mot_13">13. Compreendo que meu esforço em aprender me auxiliou a chegar ao final da história</label>
                <div id="mot_13"></div>
                <label for="mot_14">14. É divertido aprender através da leitura deste objeto de aprendizagem</label>
                <div id="mot_14"></div>
                <label for="mot_15">15. O objeto de aprendizagem promoveu minha relação com outras pessoas que participavam da leitura</label>
                <div id="mot_15"></div>
                <label for="mot_16">16. O objeto de aprendizagem me deu a liberdade de aprender, respeitando meu tempo e minhas habilidades</label>
                <div id="mot_16"></div>
                <label for="mot_17">17. Eu gostaria de aprender outros conteúdos através deste tipo de objeto de aprendizagem</label>
                <div id="mot_17"></div>
                <br><br>
                <div style="text-align: center;"><input type="button" value="enviar pesquisa" onclick="enviaPesquisa(); return false;"></div>
                </form>
            </div>
          </div>
          <div class="col align-bottom">
            <div class="card" style="border:none;">
              <a href="index.php"><img class="card-img-top" src="./img/COMANDOS/03REINICIAR.png" alt="Avançar" style="width:40%;"></a>
            </div>
          </div>
        </div>
      </div>
      <script>
        var perguntas = {};

        function enviaPesquisa(){
                    var texto = 'Levantamento de perfil:<br><br>';
                    var respostas = new Array();
                    var selects = new Array();
                    var resposta_final = '';
                    $("input").each(function(){
                        if(!($(this).attr('value')=="enviar pesquisa")){
                            resposta_final = 'não respondido';
                            if($(this).attr('value')){
                                resposta_final = $(this).attr('value');
                            }
                            respostas.push($(this).attr('rel')+' - '+resposta_final);
                            texto += $(this).attr('rel')+' - '+resposta_final+'<br>';
                        }
                    });
                    $("select").each(function(){
                        selects.push($(this).attr('rel')+' - '+$(this).val());
                        texto += $(this).attr('rel')+' - '+$(this).val()+'<br>';
                    });

                    texto += '<br><br>Questionário objetivo motivação:<br><br>';
                    var count = 1;
                    for(key in perguntas){
                        texto += 'Pergunta '+count+' - '+perguntas[key]+'<br>';
                        count++;
                    }
                    console.log(texto);
                    $.post("sendEmail.php", {texto:texto}, function(data){
                       console.log(data);
                    });
                };
        $(function(){

                var enviaPesquisa = function(){
                    console.log(perguntas);
                }

                var emojis = ['crying', 'disappointed', 'meh', 'happy', 'smile'];
                for(var i=1;i<18;i++){
                    perguntas["mot_"+i] = 3;
                }
                $("#mot_1").emoji({
                    emojis: emojis,
                    callback: function (event, value) {
                                  perguntas.mot_1 = value;
                                }
                });
                $("#mot_2").emoji({
                    emojis: emojis,
                    callback: function (event, value) {
                                  perguntas.mot_2 = value;
                                }
                });
                $("#mot_3").emoji({
                    emojis: emojis,
                    callback: function (event, value) {
                                  perguntas.mot_3 = value;
                                }
                });
                $("#mot_4").emoji({
                emojis: emojis,
                callback: function (event, value) {
                              perguntas.mot_4 = value;
                            }
                });
                $("#mot_5").emoji({
                emojis: emojis,
                callback: function (event, value) {
                              perguntas.mot_5 = value;
                            }
                });
                $("#mot_6").emoji({
                emojis: emojis,
                callback: function (event, value) {
                              perguntas.mot_6 = value;
                            }
                });
                $("#mot_7").emoji({
                    emojis: emojis,
                    callback: function (event, value) {
                                  perguntas.mot_7 = value;
                                }
                });
                $("#mot_8").emoji({
                    emojis: emojis,
                    callback: function (event, value) {
                                  perguntas.mot_8 = value;
                                }
                });
                $("#mot_9").emoji({
                    emojis: emojis,
                    callback: function (event, value) {
                                  perguntas.mot_9 = value;
                                }
                });
                $("#mot_10").emoji({
                emojis: emojis,
                callback: function (event, value) {
                              perguntas.mot_10 = value;
                            }
                });
                $("#mot_11").emoji({
                emojis: emojis,
                callback: function (event, value) {
                              perguntas.mot_11 = value;
                            }
                });
                $("#mot_12").emoji({
                emojis: emojis,
                callback: function (event, value) {
                              perguntas.mot_12 = value;
                            }
                });
                $("#mot_13").emoji({
                    emojis: emojis,
                    callback: function (event, value) {
                                  perguntas.mot_13 = value;
                                }
                });
                $("#mot_14").emoji({
                    emojis: emojis,
                    callback: function (event, value) {
                                  perguntas.mot_14 = value;
                                }
                });
                $("#mot_15").emoji({
                emojis: emojis,
                callback: function (event, value) {
                              perguntas.mot_15 = value;
                            }
                });
                $("#mot_16").emoji({
                emojis: emojis,
                callback: function (event, value) {
                              perguntas.mot_16 = value;
                            }
                });
                $("#mot_17").emoji({
                emojis: emojis,
                callback: function (event, value) {
                              perguntas.mot_17 = value;
                            }
                });
            });

      </script>
  </body>
</html>
