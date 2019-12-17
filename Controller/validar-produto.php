//Abertura do da sessão
session_start();


//Importação de outros arquivos, necessarios para ultilizar outros codigos
require_once "../Model/conexao.php";
require_once "../Model/Produto.php";


//Criação de objetos
$con =   getConexao();
$user = new Produto();