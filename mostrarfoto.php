<?php
include('crudAdm/crudCursos/conexaoBD.php');
 $resultado = mysqli_query($conexao, "SELECT * FROM cursos");
 while ($row = mysqli_fetch_array($resultado)) { 
   $id = $row['id']; 
   $nome = $row['nome']; 
  $imagem = $row['imagem']; 

    header("Content-type: image/jpeg", true);
     echo $row['image_data'];
 }
?>