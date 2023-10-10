<?php

    class Usuarios {
        private $id;
        private $name;
        private $email;

        public function getId(){
            return $this->id;
        }

        public function setId($n){
            $this->id = trim($n);
        }

        public function getName(){
            return $this->name;
        }

        public function setName($n){
            $this->name = trim($n);
        }


        public function getEmail(){
            return $this->email;
        }

        public function setEmail($n){
            $this->email = ucwords(strtolower(trim($n)));
        }
        
    }

    interface UsuarioDAO {
        public function add(Usuarios $u);
        public function findAll();
        public function findById($id);
        public function update(Usuarios $u);
        public function delete($id);
    }