<HTML>
    <body>
        <?php include_once './menu.html'; ?>
        <h3> Cadastrar </h3>
        <form method="post" action="cadastrar.php">
            Título: <input type="text" name="titulo"><br>
            Autor:  <input type = "text" name="autor"/> <br>
            Páginas: <input type="text" name="paginas"/>  <br> 
            <input type="submit" value="Cadastrar"/>
            <input type="reset" value="Limpar"/> 
        </form>
    </body>
</html>
