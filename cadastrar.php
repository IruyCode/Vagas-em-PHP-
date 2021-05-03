<?php
    require __DIR__.'/vendor/autoload.php'; // para chamar nossas classess
        use \App\Entity\Vaga ;

        // echo "<pre>"; print_r($_POST); echo "</pre>"; exit; // "exit" nao chama os metodods a baixo 
    //   VALIDAÇÃO DO POST
        if(isset($_POST['titulo'],$_POST['descricao'],$_POST['ativo'])){
           $obVaga = new Vaga ; //Criar uma nova vaga !!
           $obVaga->titulo    = $_POST['titulo'];
           $obVaga->descricao = $_POST['descricao'];
           $obVaga->ativo     = $_POST['ativo'];
            $obVaga->cadastrar();
         
        }

    include __DIR__.'/includes/hearder.php';
    include __DIR__.'/includes/formulario.php';
    include __DIR__.'/includes/footer.php';

    
?>