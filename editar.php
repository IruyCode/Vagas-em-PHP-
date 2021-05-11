<?php
    require __DIR__.'/vendor/autoload.php'; // para chamar nossas classess

    define('TITLE','Cadastrar vaga');
    use \App\Entity\Vaga;

    // VALIDACAO DO ID 
    if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
        header('location: index.php?status=error');
        exit;
    }
    $obVaga = Vaga::getVaga($_GET['id']);
    
    // VALIDACAO DA VAGA
    if(!$obVaga instanceof Vaga ){
        header('location: index.php?status = error'); 
    }
        

    // VALIDACAO DO POST 
    if(isset($_POST['titulo'],$_POST['descricao'],$_POST['ativo'])){

        $obVaga->titulo    = $_POST['titulo'];
        $obVaga->descricao = $_POST['descricao'];
        $obVaga->ativo = $_POST['ativo'];

        // $obVaga->cadastrar();

        header('localtion: index.php/status=sucess');
        exit;
    }
    $vagas = Vaga::getVagas();

    include __DIR__.'/includes/hearder.php';
    include __DIR__.'/includes/listagem.php';
    include __DIR__.'/includes/footer.php';

    
?>