<br><br><br>
<center><h1><b>Sistema Escolar</b></h1></center>
<br><br><br>
<div class="table-responsive">
    <form class="sam"  form action ='Valida.php' method = 'GET'> <br>
        <center>
            <table class=\"table table-striped\">
            <tr>
                <td>
                    <label for='nombrea'>Nombre de usuario:</label>
                </td>
            </tr>
            <tr>
                <td>
                    <input  align="center" class='roundeb matricula' type='text' name ='usuario' title='Digita tu login' placeholder='Login' onKeyUp='cadena(this.value,cad1);vNom(this);'>
                </td>
                <td> </td>
            </tr>

            <tr>
                <td>
                    <label for='nombrea'>Password:</label>
                </td>
            </tr>
            <tr>
                <td>
                    <input  class='roundeb' type="password" name='password1' placeholder='********' title='Digita tu contraseña' placeholder='Ejemplo:1822012985' onKeyUp='passwordinicio(this.value,passwo);vNom(this);'>
                </td>
                <td> </td>
            </tr>
            </table>
        </center>
        <br>
        <center><input class="botonC" type='submit' value='Ingresar'></center>
    </form>
</div>
<br>
<?
error_reporting(0);
$msg=$_GET['msg'];
echo "<center><font size='5' face='Imprint MT Shadow' color='red'> $msg  </font></center>";
?>
</body>
</html>
