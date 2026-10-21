<?php 
declare(strict_types=1);

class Pessoas{

private string $nome;
private int $cpf;
private string $email;

public function __construct(string $nome, int $cpf, string $email){

$this->nome = $nome;
$this->cpf = $cpf;
$this->email = $email;
}

}

$soares = new Pessoas('eduardo', 10293091012, 'soriatrabalhador@gmail.com');


class Produtos{

    private int $id;
    private string $nome;
    private float $preco;
    private int $quantidade;

    public function __construct(
        int $id,
        string $nome,
        float $preco,
        int $quantidade
    ) {
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

    public function exibirDados(): void
    {
        echo "ID: {$this->id}<br>";
        echo "Produto: {$this->nome}<br>";
        echo "Preço: R$ " . number_format($this->preco, 2, ',', '.') . "<br>";
        echo "Quantidade: {$this->quantidade}<br>";
    }
}

$produto = new Produtos(1, 'Teclado', 149.90, 10);

$produto->exibirDados();
?>