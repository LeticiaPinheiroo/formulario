<?php
//classe com o nome Pessoa
class Pessoa{
    //objetos com visibilidade privada
    private $nome;
    private $telefone;
    private $origem;
    //private $celular;
    private $datacontato;
    private $observacao;

    //método de captura de valor de objeto
    public function getNome() {
        return $this->nome;
    }
    //método de alteração de valor de objeto
    public function setNome($nome){
        $this->nome = $nome;
    }
    //método de captura de valor de objeto
    public function getTelefone(){
        return $this->telefone;
    }
    //método de alteração de valor de objeto
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
     //método de captura de valor de objeto
    public function getOrigem(){
        return $this->origem;
    }
    //método de alteração de valor de objeto
    public function setOrigem($origem){
        $this->origem = $origem;
    }
    
     //método de captura de valor de objeto
    public function getDatacontato(){
        return $this->datacontato;
    }
    //método de alteração de valor de objeto
    public function setDatacontato($datacontato){
        $this->datacontato = $datacontato;
    }
     //método de captura de valor de objeto
    public function getObservacao(){
        return $this->observacao;        
    }
    //método de alteração de valor de objeto
    public function setObservacao($observacao){
        $this->observacao = $observacao;
    }

}
?>