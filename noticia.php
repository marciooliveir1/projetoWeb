<?php
if($_SERVER ['REQUEST_METHOD']=='POST'){
require('conexao.php');
$time=$_POST['info_time'];
$title=$_POST['info_title'];
$texto=$_POST['info_text'];
$foto=$_POST['foto'];

if(empty($info_time) && empty($info_title) && empty($info_text) && empty($foto)){
    echo  'Digite todos os Campos';
    }
    else{
        echo 'Cadastrado com Sucesso!!!';
        $sql=$figura->prepare ("INSERT INTO news_m(info_time,info_title,info_text,foto) values(?,?,?,?)");
        $sql->execute(array("$info_time","$info_title","$info_text","$foto")); 
              
    }
}
?>