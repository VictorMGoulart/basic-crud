<?php

    $resultados = "";
    foreach($clientes as $cliente){
        $resultados .= '<tr>
                          <td>'.$cliente->id.'</td>
                          <td>'.$cliente->nome.'</td>
                          <td>'.$cliente->cpf.'</td>
                          <td>'.$cliente->rg.'</td>
                          <td>'.date('d/m/Y', strtotime($cliente->dataNasc)).'</td>
                          <td>
                            <a href="editar.php?id='. $cliente->id .'"><button type="button" class="btn btn-success">Editar</button></a>
                            <a href="excluir.php?id='. $cliente->id .'"><button type="button" class="btn btn-danger">Excluir</button></a>
                          </td>
                        </tr>';
    }
?>

<main>
    <section>
        <a href="cadastrar.php">
            <button class="btn btn-success">Novo</button>
        </a>
    </section>

    <section>
        <table class="table bg-light mt-2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>RG</th>
                    <th>Data Nascimento</th>
                </tr>
            </thead>
            <tbody>
                <?=$resultados?>
            </tbody>
        </table>
    </section>
</main>