<main>
    <section>
        <a href="index.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3">Deletar Usuário</h2>

    <form method="post">
        <div class="form-group">
            <p>Você deseja realmente deletar o usuário <strong><?= $user->getName() ?></strong>?</p>
        </div>
        <div class="form-group">
            <a href="index.php">
                <button type="button" class="btn btn-danger">Cancelar</button>
            </a>
            <button type="submit" name="delete" class="btn btn-success">Deletar</button>
        </div>
    </form>
</main>