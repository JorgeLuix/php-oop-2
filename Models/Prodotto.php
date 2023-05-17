<?php

class Prodotto 
{
    private $id, $categoria, $tipo, $titolo, $prezzo, $immagine;

    public function __construct($id, $categoria, $tipo, $titolo, $prezzo, $immagine)
    {
        $this->id = $id;
        $this->categoria = $categoria;
        $this->tipo = $tipo;
        $this->titolo = $titolo;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
    }

    public function getId() {
        return $this->id;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function getTitolo(){
        return $this->titolo;
    }
    public function getPrezzo(){
        return $this->prezzo;
    }
    public function getImmagine(){
        return $this->immagine;
    }
}