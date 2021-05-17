<main>
    <section>
        <a href="index.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>
        <h2 class= "mt-3"><?php TITLE?></h2>

            <form method= "post">

                <div class="form-group">
                    <label for="">Título</label>
                    <input type="text" class = "form-control" name="titulo" value="<?php $obVaga->titulo?>">
                </div>

                <div class="form-group">
                    <label for="">Descricao</label>
                    <textarea class="form-control" name="descricao" rows="5"><?php $obVaga->descricao?></textarea>
                </div>

                <div class="form-group">
                    <label>Status</label>

                        <div>
                            <div class="form-check form-check-inline">
                                <label class="form-control">
                                    <input type="radio" name="ativo" value="s" checked> Ativo
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <label class="form-control">
                                    <input type="radio" name="ativo" value="n" <?php $obVaga->ativo == 'n' ? 'checked':''?> > Inativo
                                </label>
                            </div>
                        </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </form>
</main>
