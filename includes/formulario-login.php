<?php

$alertaLogin = strlen($alertaLogin) ? '<div class="alert alert-danger">' . $alertaLogin . '</div>' : '';
$alertaSignin = strlen($alertaSignin) ? '<div class="alert alert-danger">' . $alertaSignin . '</div>' : '';

?>

<div class="jumbotron text-dark">
    <div class="row gap-3">
        <div class="col rounded bg-light p-4">
            <form method="post">
                <h2>Login</h2>
                <?= $alertaLogin ?>
                <div class="mb-3">
                    <label>Usuário</label>
                    <input type="text" name="username" class="form-control" required />
                </div>
                <div class="mb-3">
                    <label>Senha</label>
                    <input type="password" name="password" class="form-control" required />
                </div>
                <div class="mb-3">
                    <button type="submit" name="acao" value="login" class="btn btn-success">Entrar</button>
                </div>
            </form>
        </div>
        <div class="col rounded bg-light p-4">
            <form method="post">
                <h2>Sign In</h2>
                <?= $alertaSignin ?>
                <div class="mb-3">
                    <label>Usuário</label>
                    <input type="text" name="username" class="form-control" required />
                </div>
                <div class="mb-3">
                    <label>Senha</label>
                    <input type="password" name="password" class="form-control" required />
                </div>
                <div class="mb-3">
                    <button type="submit" name="acao" value="signin" class="btn btn-success">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>