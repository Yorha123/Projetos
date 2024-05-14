<?php
include_once("templates/header.php");

?>


<div class="container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Editar Contato</h1>
    <form id="create-form" action="<?=$BASE_URL?>config/process.php" method="POST">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="<?= $contact['id']?>">
        <div class="form-group">
            <label form="name">Nome do contato</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Digite um nome"
                value="<?= $contact['name'] ?>" required>

            <label form="fone">Telefone</label>
            <input type="text" class="form-control" id="fone" name="fone" placeholder="Digite um telefone"
                value="<?= $contact['fone']?>" required>

            <label form="observation">Observações</label>
            <textarea type="text" class="form-control" id="observation" name="observation" placeholder="Observações"
                row="3"><?= $contact["observation"]?></textarea>

            <button type="submit" class="btn btn-primary">Atualizar</button>

        </div>
</div>