                <div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800">Criar Contato</h1>
                    <div class="container mt-4">
                        <form method="POST" action="#">
                            <input type="hidden" id="iduser" name="iduser" value="<?= $_SESSION['user']->id ?>">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome do contato" required>
                            </div>
                            <div class="form-group">
                                <label for="celular">Celular</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Digite o número de celular" required>
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Digite o e-mail do contato" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Criar</button>
                        </form>
                    </div>
                </div>
