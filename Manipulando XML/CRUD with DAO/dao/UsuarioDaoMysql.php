<?php

require_once 'classes/Usuarios.php';


class UsuarioDaoXml implements UsuarioDAO{

    private $xmlFile;
    private $path;

    public function __construct($driver){
        $this->xmlFile =simplexml_load_file($driver);
        $this->path = $driver;
    }

    public function add(Usuarios $u){
       
        $novoRegistro = $this->xmlFile->addChild('usuario');
        $novoRegistro->addChild('id', $u->getId());
        $novoRegistro->addChild('name', $u->getName());
        $novoRegistro->addChild('email', $u->getEmail());

        $this->xmlFile->asXML($this->path);

    }

    public function findAll(){
        /*$xml = simplexml_load_file($xmlFile);
            $registros = $xml->registro;
            
            foreach($registros as $item){
                echo  'Campo 1: '. $item->campo1.'<br>';
                echo 'Campo 2: '. $itm->campo2 .'<br>';
            }*/

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
            foreach($data as $item){
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
        /*$sql = $this->pdo->prepare("UPDATE musicos SET name = :name, email = :email WHERE id = :id");
        $sql -> bindValue(':id', $u->getId());
        $sql -> bindValue(':name', $u->getName());
        $sql -> bindValue(':email', $u->getEmail());
        $sql -> execute();*/
    }


    public function delete($id) {


    $array = [];
    
    
       $data = $this->xmlFile;

        foreach($data as $item){

            $dom = dom_import_simplexml($item);
            $dom->parentNode->removeChild($dom);
            $data->asXML($this->xmlFile);

            if($item->id != $id){
                $u = new Usuarios();
                $u->setId($item->id);
                $u->setEmail($item->email);
                $u->setName($item->name);

                $array[] = $u;
            }
        }        
    

   
    foreach($array as $u){
        $novoRegistro = $this->xmlFile->addChild('usuario');
        $novoRegistro->addChild('id', $u->getId());
        $novoRegistro->addChild('name', $u->getName());
        $novoRegistro->addChild('email', $u->getEmail());
    
        $this->xmlFile->asXML($this->path);
    }
   
    }      
}