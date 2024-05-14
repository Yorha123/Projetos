<?php

include_once("conection.php");
include_once("url.php");

session_start();
$data = $_POST;
//Modificacao do banco
if(!empty($data)){
    


    //criar contato
if($data["type"] === "create"){
        $name = $data["name"];
        $fone= $data["fone"];
        $observation = $data["observation"];
        
  
    
    $query = "INSERT INTO contacts(name,fone,observation) VALUES (:name, :fone, :observation)";
    $stmt  = $conn->prepare($query);
    
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":fone", $fone);
    $stmt->bindParam(":observation", $observation);

try{

$stmt ->execute();
$_SESSION["msg"] = "Contato criado com sucesso!";
    
}catch(PDOException $e){
    //ERRO NA CONEXAO
    $error = $e->getMessage();
    echo "Erro: $error";
}   
}if($data["type"] === "edit"){
    $name = $data["name"];
    $fone= $data["fone"];
    $observation = $data["observation"];
    $id = $data["id"];

    $query = "UPDATE contacts 
    SET name = :name, fone = :fone, observation = :observation 
    WHERE id = :id";
 
$stmt = $conn->prepare($query);

$stmt->bindParam(":name", $name);
$stmt->bindParam(":fone", $fone);
$stmt->bindParam(":observation", $observation);
$stmt->bindParam(":id",$id);
try{

$stmt ->execute();
$_SESSION["msg"] = "Contato Editado com sucesso!";

}catch(PDOException $e){
//ERRO NA CONEXAO
$error = $e->getMessage();
echo "Erro: $error";
}   
}else if($data["type"] === "delete"){

    $id = $data["id"];

    $query = "DELETE FROM contacts WHERE id = :id";
    
    $stmt = $conn ->prepare($query);

    $stmt ->bindParam(":id", $id);

    try{

        $stmt ->execute();
        $_SESSION["msg"] = "Contato Removido com sucesso!";
        
        }catch(PDOException $e){
        //ERRO NA CONEXAO
        $error = $e->getMessage();
        echo "Erro: $error";
        }
}
//Redirect home
header("location:".$BASE_URL."../index.php");   
}else{
//selecao de dados
//retorna 1 contato
$id;

if(!empty($_GET)){
$id = $_GET["id"];
}
//retorna todos os contatos
if(!empty($id)){
$query ="SELECT * FROM contacts WHERE id = :id";

$stmt = $conn->prepare($query);
$stmt-> bindParam(":id",$id);
$stmt->execute();
$contact = $stmt -> fetch();
}
else{
$contacts = [];

$query = "SELECT * FROM contacts";
$stmt = $conn ->prepare($query);

$stmt ->execute();

$contacts = $stmt -> fetchAll();
}
}

//fechar conexão
$conn = null;