<html>
  <head>
    <title>Objeto de Aprendizagem - Sólidos</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="./js/bootstrap.min.js"></script>
  </head>
  <body>
      <div class="container-fluid" style="min-height: 100%; min-height: 100vh; display: flex; align-items: center;">
        <div class="row vertical-align" style="display: flex; align-items: flex-end;">
          <div class="col align-bottom">

          </div>
          <div class="col-6">
            <div class="card" style="border:none;">
                <img class="card-img-top" src="./img/HISTORIA/019.jpg" alt="019">
                <p>Perfil</p>
                <form action="sendEmail.php" method="post">
                    <input type="text" name="nascimento" placeholder="Data de nascimento no formato dd/mm/aaaa">
                    <select name="sexo">
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                        <option value="outros">Outros</option>
                    </select>
                    <select name="surdez">
                        <option value="nao">Não</option>
                        <option value="sim">Sim</option>
                    </select>
                    <select name="nivel_surdez">
                        <option value="profundo">Profundo</option>
                        <option value="parcial">Parcialmente surdo</option>
                        <option value="outros">Outros</option>
                    </select>
                    <select name="origem_surdez">
                        <option value="natisurdo">Natisurdo</option>
                        <option value="antes">Antes de aprender a língua portuguesa oral/escrita</option>
                        <option value="depois">Depois de aprender a língua portuguesa oral/escrita</option>
                    </select>
                    <select name="lingua">
                        <option value="portuguesa">Língua portuguesa oral/escrita</option>
                        <option value="libras">LIBRAS</option>
                    </select>
                    <select name="visual">
                        <option value="nao">Não</option>
                        <option value="sim">Sim</option>
                    </select>
                    <select name="nivel_visual">
                        <option value="cego">Cego</option>
                        <option value="parcialmente">Enxerga parcialmente</option>
                        <option value="outro">Outro</option>
                    </select>
                    <select name="origem_visual">
                        <option value="nascimento">Nascimento</option>
                        <option value="infancia">Infância</option>
                        <option value="adolescencia">Adolescência</option>
                        <option value="adulto">Adulto</option>
                    </select>
                    <select name="comunicacao">
                        <option value="fala">Fala</option>
                        <option value="escrita">Escrita</option>
                        <option value="libras">LIBRAS</option>
                        <option value="outra">Outra</option>
                    </select>
                    <input type="text" name="nascimento" placeholder="Data de nascimento no formato dd/mm/aaaa">
                    <input type="submit" value="enviar">
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
  </body>
</html>
