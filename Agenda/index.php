<?php
include_once("templates/header.php");

?>

<div class="container">
    <?php if(isset($printMsg) && $printMsg != ''): ?>
    <p id="msg"><?= $printMsg ?></p>
    <?php endif ?>
    <h1 id="main-title">Minha Agenda</h1>
    <?php if(count($contacts) > 0): ?>
    <table class="table" id="contacts-table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">#</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($contacts as $contact):?>
            <tr>
                <td scope="row"><?= $contact['id'] ?></td>
                <td scope="row"><?= $contact['name'] ?></td>
                <td scope="row"><?= $contact['fone'] ?></td>
                <td class="action ">
                    <a href="#"><i class="fas fa-eye check-icon"></i></a>
                    <a href="#"><i class="far fa-edit edit-icon"></i></a>
                    <button type="submit" class="delete-btn"><i class="fas fa-time delete-icon"></i> </button>
                </td>

            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <?php else: ?>
    <p id="empty-list-text">Ainda não ha contatos na sua agenda <a href="<?=$BASE_URL?>create.php"> Clique aqui para
            adcionar</p>
    <?php endif ?>
</div>