<div class="container-fluid pb-5 mb-5">
    <div class="row py-4">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 mx-auto">
            <div class="card border-primary shadow">
                <div class="card-body p-4">
                    <h3 class="text-center mb-4">Cadastrar Novo Cliente</h3>

                    <form action="?acao=criar_cliente" method="post">
                        <div class="mb-3">
                            <label class="form-label">Nome Completo:</label>
                            <input type="text" class="form-control" name="text_nome_completo" placeholder="Digite seu nome completo" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Endereço:</label>
                            <input type="text" class="form-control" name="text_endereco" placeholder="Digite seu endereço" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Cidade:</label>
                            <input type="text" class="form-control" name="text_cidade" placeholder="Digite sua cidade" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Telefone:</label>
                            <input type="tel" class="form-control" name="text_telefone" placeholder="Digite seu telefone" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email:</label>
                            <input type="email" class="form-control" name="text_email" placeholder="Digite seu email" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Senha:</label>
                            <input type="password" class="form-control" name="text_senha_1" placeholder="Digite sua senha" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Confirme a Senha:</label>
                            <input type="password" class="form-control" name="text_senha_2" placeholder="Confirme sua senha" required>
                        </div>

                        <div class="my-4 text-center">
                            <button type="submit" class="btn btn-primary w-50">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>