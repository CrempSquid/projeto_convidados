<?php
$servidor='127.0.0.1';
$usuario='root';
$senha="sebrae123";
$banco= 'Script_BD_etec';

$conexao = new mysqli($servidor, $usuario, $senha, $banco);
if($conexao->connect_error){
    echo "Não foi possível conectar";
}else{
    echo "Conectado com sucesso!";

}
?>