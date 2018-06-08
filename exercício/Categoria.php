<?php

class Categoria
{

    //atributos

    private $id;
    private $nome;
    private $desc;


    //construct

    public function __construct($id_cat, $nome_cat, $desc_cat){
        $this->id = $id_cat;
        $this->nome = $nome_cat;
        $this->desc = $desc_cat;
    }


    //metodos

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    public function getDesc()
    {
        return $this->desc;
    }

    public function setDesc($desc): void
    {
        $this->desc = $desc;
    }

}