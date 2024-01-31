<?php

    class Prodotto {
        public $nome;
        public $prezzo;
        public $immagine;
        public $categoria;

        public function __construct($nome, $prezzo, $immagine, $categoria) {
            $this->nome = $nome;
            $this->prezzo = $prezzo;
            $this->immagine = $immagine;
            $this->categoria = $categoria;
        }

        public function mostra() {
            echo "<img src='{$this->immagine}' alt='{$this->nome}'>";
            echo "<h3>{$this->nome}</h3>";
            echo "<p>Prezzo: {$this->prezzo}€</p>";
            echo "<p>Categoria: {$this->categoria}</p>";
        }

    }

?>