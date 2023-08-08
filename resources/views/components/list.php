<?php
$mensagem = '';
if (isset($_GET['status'])) {
    switch ($_GET['status']) {
        case 'success':
            $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
            break;

        case 'error':
            $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
            break;
    }
}

$results = '';
foreach ($users as $user) {
    $results .= '<tr>
        <td>' . $user['id'] . '</td>
        <td>' . $user['name'] . '</td>
        <td>' . $user['email'] . '</td>
        <td>' . $user['color'] . '</td>
        <td>
        <a href="update.php?id=' . $user['id'] . '">
            <button type="button" class="btn btn-primary">Editar</button>
        </a>
        <a href="delete.php?id=' . $user['id'] . '">
            <button type="button" class="btn btn-danger">Deletar</button>
        </a>
        </td>
    </tr>';
}

$results = strlen($results) ? $results : '<tr>
        <td colspan="6" class="text-center">
            Nenhum usuário encontrado
        </td>
    </tr>';
?>

<main>
    <?= $mensagem ?>
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
                    <th>Cor</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?= $results ?>
            </tbody>
        </table>
    </section>
</main>