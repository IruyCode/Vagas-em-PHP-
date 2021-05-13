<?php
    require __DIR__.'/vendor/autoload.php'; // para chamar nossas classess

    use \App\Entity\Vaga;

    $vagas = Vaga::getVagaS();

    include __DIR__.'/includes/hearder.php';
    include __DIR__.'/includes/listagem.php';
    include __DIR__.'/includes/footer.php';
    
    
?>