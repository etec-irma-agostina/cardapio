<?php
require('./model/Produto.php');

class ProdutosRepository
{

    private PDO $pdo;

    /**
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getLanches(): array
    {
        $result  = $this->pdo->query("SELECT * FROM produtos");
        $dados = $result->fetchAll(PDO::FETCH_ASSOC);

        $lanches = array_map(function ($produto) {
            return new Produto(
                $produto['id'],
                $produto['nome'],
                $produto['descricao'],
                $produto['imagem'],
                $produto['preco']
            );
        }, $dados);

        return $lanches;
    }


}