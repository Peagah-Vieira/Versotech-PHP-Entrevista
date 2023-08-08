<?php
$results = '';
foreach ($colors as $color) {
    $results .= "<option value='$color[id]'>$color[color]</option>";
}
$results = strlen($results) ? $results : '<option selected>Nenhuma cor encontrada</option>';
?>
<main>
    <section>
        <a href="index.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3"><?= TITLE ?></h2>

    <form method="post">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="name">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email">
        </div>

        <div class="form-group">
            <label>Cor</label>
            <select class="form-select form-control" name="color">
                <?= $results ?>
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </form>
</main>