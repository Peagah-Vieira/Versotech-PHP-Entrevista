<?php
$results = '';
foreach ($users as $user) {
    $results .= '<tr>
        <td>' . $user['id'] . '</td>
        <td>' . $user['name'] . '</td>
        <td>' . $user['email'] . '</td>
        <td>
        <a href="editar.php?id=' . $user['id'] . '">
            <button type="button" class="btn btn-primary">Editar</button>
        </a>
        <a href="excluir.php?id=' . $user['id'] . '">
            <button type="button" class="btn btn-danger">Excluir</button>
        </a>
        </td>
    </tr>';
}

$results = strlen($results) ? $results : '<tr>
        <td colspan="6" class="text-center">
            Nenhum usuário encontrada
        </td>
    </tr>';
?>

<main>
    <section>
        <a href="register.php">
            <button class="btn btn-success">Novo Usuário</button>
        </a>
    </section>
    <section>
        <table class="table bg-light mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?= $results ?>
            </tbody>
        </table>
    </section>
</main>