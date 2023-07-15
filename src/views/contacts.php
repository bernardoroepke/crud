                <div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800">Seus contatos</h1>
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Celular</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                            
                                        <?php foreach($contacts as $contact) { ?>                                            
                                            <tr>
                                                <th><?= $contact->name; ?></th>
                                                <th><?= $contact->phone; ?></th>
                                                <th><?= $contact->email; ?></th>
                                                <th>
                                                    <form method="POST" action="contact_editController.php">
                                                        <input type="hidden" name="id" value="<?= $contact->id; ?>">
                                                        <input type="submit" class="btn btn-primary" value="Editar">
                                                    </form>
                                                </th>
                                                <th>
                                                    <form method="POST" action="#">
                                                        <input type="hidden" name="id" value="<?= $contact->id; ?>">
                                                        <input type="submit" class="btn btn-danger" value="Deletar">
                                                    </form>
                                                </th>
                                            </tr>      
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>                   
                </div>
