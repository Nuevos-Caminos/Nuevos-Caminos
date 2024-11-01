<?php

include 'db_connect.php'; // Conexão com o banco de dados

// Verifica se o usuário está logado e tem um tipo de login válido
if (!isset($_SESSION['login_type'])) {
    // Redirecione ou exiba uma mensagem de erro se o usuário não estiver logado
    echo "<script>alert('Você precisa estar logado para acessar esta página.'); window.location.href='login.php';</script>";
    exit();
}
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <button class="btn btn-primary float-right btn-sm" id="new_user"><i class="fa fa-plus"></i> Novo usuário</button>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="card col-lg-12">
            <div class="card-body">
                <table class="table-striped table-bordered col-md-12">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Nombre de usuario</th>
                            <th class="text-center">Amable</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $type = array("", "Admin", "Usuário", "Admin Master"); // Definindo os tipos de usuários
                        $users = $conn->query("SELECT * FROM users ORDER BY name ASC");
                        $i = 1;

                        while ($row = $users->fetch_assoc()):
                        ?>
                            <tr>
                                <td class="text-center"><?php echo $i++; ?></td>
                                <td><?php echo ucwords($row['name']); ?></td>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $type[$row['type']]; ?></td>
                                <td>
                                    <center>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acciones
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item edit_user" href="javascript:void(0)" data-id='<?php echo $row['id']; ?>'>Editar</a>
                                                <?php if ($_SESSION['login_type'] == 3): ?>
                                                    <!-- O administrador (login_type 3) pode excluir os usuários dos tipos 1 e 2, mas não pode se autoexcluir -->
                                                    <?php if ($row['type'] != 3 && $row['id'] != $_SESSION['login_id']): ?>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item delete_user" href="javascript:void(0)" data-id='<?php echo $row['id']; ?>'>Borrar</a>
                                                    <?php endif; ?>
                                                <?php else: ?>
                                                    <!-- Outros tipos de usuários (1 e 2) não podem excluir o administrador (login_type 3) -->
                                                    <?php if ($row['type'] != 3): ?>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item delete_user" href="javascript:void(0)" data-id='<?php echo $row['id']; ?>'>Borrar</a>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </center>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $('table').dataTable(); // Inicializa a tabela como DataTable
    $('#new_user').click(function() {
        uni_modal('Novo Usuário', 'manage_user.php'); // Abre o modal para criar um novo usuário
    });
    $('.edit_user').click(function() {
        uni_modal('Editar Usuário', 'manage_user.php?id=' + $(this).attr('data-id')); // Abre o modal para editar um usuário
    });
    $('.delete_user').click(function() {
        _conf("Você tem certeza que deseja excluir este usuário?", "delete_user", [$(this).attr('data-id')]); // Confirma a exclusão
    });

    function delete_user($id) {
        start_load(); // Inicia o carregamento
        $.ajax({
            url: 'ajax.php?action=delete_user',
            method: 'POST',
            data: {
                id: $id
            },
            success: function(resp) {
                if (resp == 1) {
                    alert_toast("Dados excluídos com sucesso", 'success'); // Exibe mensagem de sucesso
                    setTimeout(function() {
                        location.reload(); // Recarrega a página após 1.5 segundos
                    }, 1500);
                }
            }
        });
    }
</script>
