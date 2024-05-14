<?php
include_once("templates/header.php");

?>


<div class="container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Criando contato</h1>
    <form id="create-form" action="<?=$BASE_URL?>config/process.php" method="POST">
        <input type="hidden" name="type" value="create">
        <div class="form-group">
            <label form="name">Nome do contato</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Digite um nome" required>
            <label form="fone">Telefone</label>
            <input type="text" class="form-control" id="fone" name="fone" placeholder="Digite um telefone" required>
            <label form="observation">Observações</label>
            <textarea type="text" class="form-control" id="observation" name="observation" placeholder="Observações"
                row="3"></textarea>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
</div>