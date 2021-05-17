<?php
    // para chamar nossas classess
    require __DIR__.'/vendor/autoload.php'; 
       
    define('TITLE','Cadastrar vaga');   
           
    use \App\Entity\Vaga;
    $obVaga = new Vaga ; //Criar uma nova vaga !!

    //VALIDAÇÃO DO POST
        if(isset($_POST['titulo'],$_POST['descricao'],$_POST['ativo'])){
           $obVaga->titulo    = $_POST['titulo'];
           $obVaga->descricao = $_POST['descricao'];
           $obVaga->ativo     = $_POST['ativo'];
           $obVaga->cadastrar();
         
     header('location: index.php?status=success');
      exit;
        }

    include __DIR__.'/includes/hearder.php';
    include __DIR__.'/includes/formulario.php';
    include __DIR__.'/includes/footer.php';