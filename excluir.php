<?php
    require __DIR__.'/vendor/autoload.php'; // para chamar  ssas classess

    use \App\Entity\Vaga;

    // VALIDACAO DO ID 
    if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
        header('location: index.php?status=error');
        exit;
    }
    // CONSULTA VAGA 
    $obVaga = Vaga::getVaga($_GET['id']);
    
    // VALIDACAO DA VAGA
    if(!$obVaga instanceof Vaga ){
        header('location: index.php?status=error'); 
        exit;
    }
        
    // VALIDACAO DO POST 
    if(isset($_POST['excluir'])){
        $obVaga->excluir();
    }
    $vagas = Vaga::getVagas();

    include __DIR__.'/includes/hearder.php';
    include __DIR__.'/includes/confirmar-exclusao.php';
    include __DIR__.'/includes/footer.php';

    
?>