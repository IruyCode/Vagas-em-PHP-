<?php
    // para chamar nossas classess
    require __DIR__.'/vendor/autoload.php'; 

    use \App\Entity\Vaga;

    $vagas = Vaga::getVagas();

    include __DIR__.'/includes/hearder.php';
    include __DIR__.'/includes/listagem.php';
    include __DIR__.'/includes/footer.php';