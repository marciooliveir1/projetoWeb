<?php
require('conexao.php');
?>
<html>
<head>
<title>noticias.php</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
#n1 { font-family:verdana,arial,tahoma,times new roman; font-size:10pt; color:black; font-weight:bold; }
#n2 { font-family:verdana,arial,tahoma,times new roman; font-size:7pt; color:gray; }
#n3 { font-family:verdana,arial,tahoma,times new roman; font-size:8pt; color:black; }
</style>
</head>

<body>
<form action="noticia.php" method="post">
            <fieldset>
                <label for="time">Data: </label>
                <input required name="info_time" type="date">
            </fieldset>
            <fieldset>
                <label for="">Titulo: </label>
                <input required name="info_title" type="text">
            </fieldset>
            <fieldset>
                <label for="texto">Noticia: </label>
                <textarea required name="info_text" type="text"></textarea> 
            </fieldset>
            <fieldset>
                <label for="foto">Foto: </label>
                <input required name="foto" type="file">
            </fieldset>
            <fieldset>
                <button type="submit">Enviar</button>
            </fieldset>
        </form>
    </body>
</html>
