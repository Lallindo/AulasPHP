<?php
class Cliente
{

    public function __construct(
        public int $id = 0,
        public string $nome = '', 
        public string $cpf = '',
        public string $email = ''
    ){}

    // Atributos
    //public $nome;
    //public $cpf;

    // Método
    public function inserir_cliente($conexao) {
        $sql = "INSERT INTO clientes (cliente_id, cliente_nome, cliente_cpf, cliente_email) VALUES (?,?,?,?)"; // Frase do SQL para adicionar ao banco;
        $stm = $conexao->prepare($sql); // Prepara a frase, evitando injeção de SQL;
        $stm->bindValue(1,$this->id); 
        $stm->bindValue(2,$this->nome); 
        $stm->bindValue(3,$this->cpf);
        $stm->bindValue(4,$this->email);
        // Substitui os pontos de interrogação na frase
        $stm->execute(); // Executa o comando no BD;
        return "Cliente inserido ao BD com sucesso"; // Retorna uma frase; 
    }

    public function mostrar_dados() {
    }

    public function conexao() {
        $parametros = "mysql:host=localhost;dbname=bancophp;charset=utf8mb4"; // Informações sobre o bando de dados
        $conexao = new PDO($parametros, "root", "");
        return $conexao;
    }

}; // Fim da classe

?>