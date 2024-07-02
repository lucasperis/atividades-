<?php

     class Usuario{

        public       $nome;
        protected    $cpf;
        private      $endereco;


        function Usuario(){
            $this->preparaUsuario();

     }

 
      private function prepararUsuario(){
          $this->nome = "leonardo"
          $this->cpf = "99999999999":
          $this->endereco = "Rua fulano da tal numero 0";

      }

      public function getcpf (){
          return $this->cpf;

      }

      public function getnome(){

      }

      function getendereco(){

      }

} 
   
   $uso = new Usuario();
   
   $uso->getcpf();

   $usu->getnome();

   ?>
