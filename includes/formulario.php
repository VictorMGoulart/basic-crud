<main>
    <section>
        <a href="index.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3"><?=TITLE?></h2>

    <form method="post">
        <div class="d-flex mb-3 gap-3">
            <div class="w-50">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" value="<?=$cliente->nome?>"/>
            </div>
            <div>
                <label class="form-label">CPF</label>
                <input type="text" class="form-control" name="cpf" value="<?=$cliente->cpf?>"/>
            </div>
            <div>
                <label class="form-label">RG</label>
                <input type="text" class="form-control" name="rg" value="<?=$cliente->rg?>"/>
            </div>
        </div>
        <div class="d-flex mb-3 gap-3">
            <div>
                <label class="form-label">Telefone</label>
                <input type="text" class="form-control" name="telefone" value="<?=$cliente->telefone?>"/>
            </div>
            <div>
                <label class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" name="dataNasc" value="<?=$cliente->dataNasc?>"/>
            </div>
        </div>
        <div class="d-flex mb-3 gap-3">
            <div class="w-50">
                <label class="form-label">Rua</label>
                <input type="text" class="form-control" name="rua" value="<?=$endereco->rua?>"/>
            </div>
            <div class="w-50">
                <label class="form-label">Bairro</label>
                <input type="text" class="form-control" name="bairro" value="<?=$endereco->bairro?>"/>
            </div>
            <div>
                <label class="form-label">Número</label>
                <input type="text" class="form-control" name="numero" value="<?=$endereco->numero?>"/>
            </div>
        </div>
        <div class="d-flex mb-3 gap-3">
            <div>
                <label class="form-label">Cidade</label>
                <input type="text" class="form-control" name="cidade" value="<?=$endereco->cidade?>"/>
            </div>
            <div>
                <label class="form-label">Estado</label>
                <input type="text" class="form-control" name="estado" value="<?=$endereco->estado?>"/>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Enviar</button>
    </form>
</main>