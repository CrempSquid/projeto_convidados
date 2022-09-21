<?php
$servidor='127.0.0.1'; //Ou, localhost
$usuario='root';
$senha="sebrae123";
$banco= 'Script_BD_etec';

//Ligação com o BD
$conexao = new mysqli($servidor, $usuario, $senha, $banco);
//Tratamento.
if (isset($_GET['nome'])){
    if($conexao->connect_error){
        echo "Não foi possivel conectar";
    }else{
    //echo "conectado com sucesso!";
    $sqlGravar = "INSERT INTO tb_convidados (nome, acompanhantes) VALUES ('$_GET[nome]',$_GET[acompanhantes])";    // Boa Partica: Nome dos Comandos em CAIXA ALTA
    $conexao->query ($sqlGravar);
    $resultado = $conexao->query("SELECT * FROM tb_convidados");
    //print_r($resultado);
    // while($row = $resultado->fetch_assoc()){
    // printf("<br/><tr><td>%s</td></tr>",$row["nome"],"</table>");
    // }
    //foreach($resultado as $convidado){
        //echo "<br>".$convidado["nome"];
    //}

    }
}else{
    $resultado = $conexao->query("SELECT * FROM tb_convidados");
}

?>