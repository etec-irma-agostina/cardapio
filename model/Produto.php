<?php

class Produto
{

    private int $id;
    private string $nome;
    private string $descricao;
    private string $imagem;
    private float $preco;

    /**
     * @param int $id
     * @param string $nome
     * @param string $descricao
     * @param string $imagem
     * @param float $preco
     */
    public function __construct(int $id, string $nome, string $descricao, string $imagem, float $preco)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->imagem = $imagem;
        $this->preco = $preco;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }

    public function getImagem(): string
    {
        return $this->imagem;
    }

    public function setImagem(string $imagem): void
    {
        $this->imagem = $imagem;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    public function setPreco(float $preco): void
    {
        $this->preco = $preco;
    }

    public function getPrecoFormatado(): string
    {
        return "R$ " . number_format($this->preco, 2, ",", ".");
    }




}