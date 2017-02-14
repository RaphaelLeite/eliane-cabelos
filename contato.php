<?php include("header.php") ?>

<div class="formulario-box">
  <form class="formulario" action="contact-process.php" method="post">
    <table>
      <tr>
        <td>Nome</td>
      </tr>
      <tr>
        <td><input type="text" name="nome" placeholder="Digite seu nome aqui:"></td>
      </tr>
      <tr>
        <td>Email</td>
      </tr>
      <tr>
        <td><input type="text" name="email" placeholder="Digite seu nome aqui:"></td>
      </tr>
      <tr>
        <td>Mensagem</td>
      </tr>
      <tr>
        <td><textarea name="mensagem" rows="8" cols="80"></textarea></td>
      </tr>
    </table>
  </form>
</div>

<?php include("footer.php") ?>
