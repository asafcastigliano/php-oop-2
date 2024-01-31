<?php

    class Prodotto {
        public $nome;
        public $immagine;
        public $categoria;

        public function __construct($nome, $immagine, $categoria) {
            $this->nome = $nome;
            $this->immagine = $immagine;
            $this->categoria = $categoria;
        }

        public function mostra() {
            echo "<img src='{$this->immagine}' alt='{$this->nome}'>";
            echo "<h3>{$this->nome}</h3>";
            echo "<p>Categoria: {$this->categoria}</p>";
        }

    }

    class Cibo extends Prodotto {
        public $tipo = 'Cibo';
    }
    
    class Gioco extends Prodotto {
        public $tipo = 'Gioco';
    }
    
    class Accessorio extends Prodotto {
        public $tipo = 'Accessorio';
    }

    $prodotto = [
        new Cibo("Royal Canin Mini Adult", "https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg", "Cane"),
        new Cibo("Almo Nature Holistic Maintenance Medium Large Tonno e Riso", "https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg", "Cane"),
        new Cibo("Almo Nature Cat Daily Lattina", "https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg", "Gatto"),
        new Cibo("Mangime per Pesci Guppy in Fiocchi", "https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg", "Pesci"),
        new Accessorio("Voliera Wilma in Legno", "https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg", "Uccelli"),
        new Accessorio("Cartucce Filtranti per Filtro EasyCrystal", "https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg", "Pesci"),
        new Gioco("Kong Classic", "https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg", "Cane"),
        new Gioco("Topini di peluche Trixie", "https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg", "Gatto")
    ]

?>