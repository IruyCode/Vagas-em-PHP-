<?php
    // para chamar  ssas classess
    require __DIR__.'/vendor/autoload.php'; 

    use \App\Entity\Vaga;

// VALIDACAO DO ID 
    if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
        header('location: index.php?status=error');
        exit;
    }
    // CONSULTA VAGA 
          $obVaga = Vaga::getVaga($_GET['id']);
    
    //VALIDAÇÃO DA VAGA
    if(!$obVaga instanceof Vaga){
        header('location: index.php?status=error'); 
        exit;
    }
        
    //VALIDAÇÃO DO POST 
    if(isset($_POST['excluir'])){
        $obVaga->excluir();

        header('location: index.php?status=success');
        exit;
    }
  
    include __DIR__.'/includes/hearder.php';
    include __DIR__.'/includes/confirmar-exclusao.php';
    include __DIR__.'/includes/footer.php';