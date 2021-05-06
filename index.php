<?php
    require __DIR__.'/vendor/autoload.php'; // para chamar nossas classess

    use \App\Entity\Vaga;

    $vagas = Vaga::getVaga();
   echo "<pre>"; print_r($vagas); echo "</pre>"; exit;

    include __DIR__.'/includes/hearder.php';
    include __DIR__.'/includes/listagem.php';
    include __DIR__.'/includes/footer.php';

    
?>