<main>

    <h2 class="mt-3">Excluir Cliente</h2>

    <form method="post">
        <div class="mb-3 gap-3">
            <p>Deseja excluir permanentemente o cadastro do Cliente:</p>
            <p>Nome - <strong><?= $cliente->nome ?></strong></p>
            <p>CPF - <strong><?= $cliente->cpf ?></strong></p>
        </div>

        <div class="d-flex mb-3 gap-3">
            <a href="index.php">
                <button type="button" class="btn btn-warning">Cancelar</button>
            </a>
            <button type="submit" class="btn btn-danger" name="excluir">Excluir</button>
        </div>
    </form>
</main>