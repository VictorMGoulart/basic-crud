<?php

$mensagem = '';
if (isset($_GET['status'])) {
    switch ($_GET['status']) {
        case 'success':
            $mensagem = '<div class="alert alert-success">Sucesso ao executar ação!</div>';
            break;
        case 'error':
            $mensagem = '<div class="alert alert-danger">Erro ao executar ação!</div>';
            break;
    }
}

$resultados = "";
foreach ($clientes as $cliente) {
    $resultados .= '<tr>
                       <td>' . $cliente->id . '</td>
                       <td>' . $cliente->nome . '</td>
                       <td>' . $cliente->cpf . '</td>
                       <td>' . $cliente->rg . '</td>
                       <td>' . $cliente->telefone . '</td>
                       <td>' . date('d/m/Y', strtotime($cliente->dataNasc)) . '</td>
                       <td>
                         <a href="editar.php?id=' . $cliente->id . '"><button type="button" class="btn btn-primary">Editar</button></a>
                         <a href="deletar.php?id=' . $cliente->id . '"><button type="button" class="btn btn-danger">Excluir</button></a>
                       </td>
                    </tr>';
}

$resultados = strlen($resultados) ? $resultados: '<tr>
                                                    <td colspan="6" class="text-center">
                                                        <strong>Nenhum resultado foi encontrado!</strong>
                                                    </td>
                                                  </tr>';

?>

<main>
    <section>
        <a href="cadastrar.php">
            <button class="mb-3 btn btn-success">Novo</button>
        </a>
    </section>
    <?= $mensagem ?>
    <section>
        <table class="table bg-light mt-2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>RG</th>
                    <th>Telefone</th>
                    <th>Data Nascimento</th>
                </tr>
            </thead>
            <tbody>
                <?= $resultados ?>
            </tbody>
        </table>
    </section>
</main>