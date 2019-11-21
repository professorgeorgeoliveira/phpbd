<?PHP
//código php
?> 
<HTML>
    <body>
        <?php include_once './menu.html'; ?>
        <h3> Alterar </h3>
        <form method="post" action="alterar.php">
            <input type="hidden" name="id" value=""/> 
            Título:<input type="text" name="titulo" value=""/> 
            Autor:<input type="text" name="autor" value=""/> 
            Páginas:<input type="text" name="paginas" value=""/> 
            <input type="submit" value="Salvar"/>
            <input type="reset" value="Limpar"/> 
        </form>
    </body>
</html>
