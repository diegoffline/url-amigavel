<?php
function getPage(){

/**
*  função getPage() que é chamada no arquivo layout/layout.php  
* criada com 2 variaveis : 
* uma que armazenará a url e outra para o método, que no caso será o GET
* mapeando as url amigaveis 
*   /  inclui a página home.php do diretorio pages
*  /contato inclui a página contato.php do diretorio pages
* /sobre inclui a página sobre.php do diretorio pages
* e qualque outra url não mapeada no switch retornará a / incluindo home.php
*
*/
  $url = $_SERVER['REQUEST_URI'];
  $metodo = $_SERVER["REQUEST_METHOD"];

  if($metodo =='GET'){

    switch ($url) {
      case '/':
        include('pages/home.php');
        break;

      case '/contato':
          include('pages/contato.php');
          break;

      case '/sobre':
        include('pages/sobre.php');
        break;
              

      
        
      default:
        include('pages/home.php');
        break;
        
        
    }
  }
}