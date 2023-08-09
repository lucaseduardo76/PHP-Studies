<?php

    class Usuarios {
        private $name;
        private $email;

        public function getName(){
            return $this->$name;
        }

        public function setName($n){
            $this->name = $n;
        }


         public function getEmail(){
            return $this->$email;
        }

        public function setEmail($n){
            $this->email = ucwords(strtolower(trim($n)));
        }
        
    }

    interface UsuarioDAO {
        public function add(Usuario $u);
        public function findAll();
        public function findById($id);
        public function update(Usuario $u);
        public function delete($id);
    }