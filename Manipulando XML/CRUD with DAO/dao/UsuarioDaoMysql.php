<?php

require_once 'classes/Usuarios.php';


class UsuarioDaoXml implements UsuarioDAO{

    private $xmlFile;
    private $path = 'usuarios.xml';
    private $pathId = 'id.xml';
    private $xmlIdFile;

    public function __construct(){
        $this->xmlFile = simplexml_load_file($this->path);
        $this->xmlIdFile = simplexml_load_file($this->pathId);  
    }

    //FUNÇÃO QUE LIDA COM A ADIÇÃO DE USUARIOS NO XML
    private function handleAdd(Usuarios $u, $newId){
        
        $xmlId = $this->xmlIdFile;
        $idAtual = $xmlId->idUser;
        $idAtual = $idAtual + 1;      

        $novoRegistro = $this->xmlFile->addChild('usuario');
        $novoRegistro->addChild('id', $newId ? $idAtual:$u->getId());
        $novoRegistro->addChild('name', $u->getName());
        $novoRegistro->addChild('email', $u->getEmail());

        $this->xmlFile->asXML($this->path);

        if(true){
            $dom = dom_import_simplexml($this->xmlIdFile->idUser);
            $dom->parentNode->removeChild($dom);
            $this->xmlIdFile->asXML('id.xml');
           
            $novoId = $this->xmlIdFile->addChild('idUser', $idAtual);
            $this->xmlIdFile->asXML($this->pathId);
        }
    }

    //FUNÇÃO QUE DELETA USUARIOS DO XML
    private function handleDel($id){
        foreach($this->xmlFile->usuario as $item){
            if($item->id == $id){
                $dom = dom_import_simplexml($item);
                $dom->parentNode->removeChild($dom);
                $this->xmlFile->asXML('usuarios.xml');        
            }            
        }        
    }

    public function add(Usuarios $u){
       
        $this->handleAdd($u, true);

    }

    public function findAll(){
        $array = [];

        $xml = $this->xmlFile;
        if(count($xml->children()) > 0){
           $data = $xml->usuario    ;

            foreach($data as $item){
                $u = new Usuarios();
                $u->setId($item->id);
                $u->setEmail($item->email);
                $u->setName($item->name);

                $array[] = $u;
            }        
        }

        return $array;
    }

    public function findById($id){
 
        
        $xml = $this->xmlFile;
        if(count($xml->children()) > 0){
            foreach($xml as $item){
                if($item->id == $id){
                    $u = new Usuarios();
                    $u->setId($item->id);
                    $u->setEmail($item->email);
                    $u->setName($item->name);

                    return $u;
                }
            }
        }
        
        return false;
    }
    public function update(Usuarios $u){
        $this->handleDel($u->getId());
        $this->handleAdd($u, false);
    }


    public function delete($id) {
        $this->handleDel($id);
    }      
}