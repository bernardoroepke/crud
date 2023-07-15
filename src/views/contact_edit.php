                <div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800">Editar Contato</h1>
                    <div class="container mt-4">
                        <form method="POST" action="#">
                            <input type="hidden" id="id" name="id" value="<?= $contact->id ?>">
                            <input type="hidden" id="iduser" name="iduser" value="<?= $_SESSION['user']->id ?>">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?= $contact->name ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="celular">Celular</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="<?= $contact->phone ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?= $contact->email ?>" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Editar</button>
                        </form>
                    </div>
                </div>
