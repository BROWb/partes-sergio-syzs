<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <section class="container">
        <nav class="navbar">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="#">COMPONENTES</a>
                <ul class="dropdown">
                    <li><a href="#">PLACA-MÃE</a></li>
                    <li><a href="#">CPU</a></li>
                    <li><a href="#">MEMÓRIA RAM</a></li>
                    <li><a href="#">DISCO RÍGIDO</a></li>
                    <li><a href="#">SSD</a></li>
                    <li><a href="#">GPU</a></li>
                    <li><a href="#">PSU</a></li>
                  </ul>
                </li>
                <li><a href="quemsomos.php">QUEM SOMOS</a></li>
                <li>
                <a href="#">MANUTENÇÕES</a>
                  <ul class="dropdown">
                    <li><a href="#">PLACA-MÃE</a></li>
                    <li><a href="#">CPU</a></li>
                    <li><a href="#">MEMÓRIA RAM</a></li>
                    <li><a href="#">DISCO RÍGIDO</a></li>
                    <li><a href="#">SSD</a></li>
                    <li><a href="#">GPU</a></li>
                    <li><a href="#">PSU</a></li>
                  </ul>
                </li>
            </ul>
          </nav>

        <div class="img1">
        <img src="img1.png" width="60%";>
        
        <article>
          <h3>
          O que é o hardware:
          </h3>
           <h5>Hardware é uma palavra de origem inglesa que, no âmbito da informática, é utilizada para designar a parte física de um computador. São todos os componentes palpáveis de um dispositivo eletrônico, como placas, memória, processador, teclado, monitor, etc.
           </h5>
           <br>
           <h3>
           Hardware interno:
           </h3>
           <h5>
           Se refere aos componentes localizados no interior do dispositivo, essenciais para o seu funcionamento. Ou seja, sem um deles, o celular, tablet ou PC não funciona corretamente ou, simplesmente, é inutilizado.

Exemplos: placas de memória RAM, discos rígidos, SSDs internos, leitores de mídia (CD, DVD ou Blue Ray), placas-mãe, processadores, coolers, fontes, placas de vídeo, etc.
<h5>
            <h3>
            Hardware externo:
            </h3>
            <h5>São todos os componentes conectados externamente a um dispositivo, por portas como USB, VGA, Ethernet, HDMI, de áudio, etc. Em geral, agregam funções não essenciais ao computador, como imprimir um documento, ouvir áudio ou ampliar a capacidade de armazenamento. São, em suma, todos os periféricos conectados.

Exemplos: impressoras, scanners, monitores, mouses, teclados, webcams, fones de ouvido, microfones, auto-falantes, cabos, unidades de armazenamento externas (HDs, cartões SSD, pendrives), projetores, joysticks etc.</h5>
           Se refere aos componentes localizados no interior do dispositivo, essenciais para o seu funcionamento. Ou seja, sem um deles, o celular, tablet ou PC não funciona corretamente ou, simplesmente, é inutilizado.

Exemplos: placas de memória RAM, discos rígidos, SSDs internos, leitores de mídia (CD, DVD ou Blue Ray), placas-mãe, processadores, coolers, fontes, placas de vídeo, etc.
           </h5>
        </article>
    </section>
<style>
    body{
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    width: 100%;
    color: rgb(0, 0, 0);
    text-align: justify;
}
*{
    margin: 0;
    padding: 0;
}
article{
    width: 80%;
    background: #ffffff1a;
    padding: 30px 30px;
    margin: 20px 20px 20px 0;
   
  

    
    
}
.navbar{
    display: inline;
}
   
    
.navbar ul{
  
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-image: linear-gradient(to right, #3b0063, #a200ff, #00000070);

}
.navbar ul li{
    margin-bottom: 5px;
    padding: 10px;
    text-align: justify;
    display: inline-block;
    position:relative;

   
}
.navbar ul li a{
    display: block;
    color: white;
    text-align: justify;
    padding: 14px 16px;
    text-decoration: none;
}
.navbar ul li a:hover {
    background-color: #111;
   
}
.navbar ul li ul.dropdown li{
  display: block;
}

.navbar ul li ul.dropdown li a{
  font-size:10px
}

.navbar ul li ul.dropdown{
  width:100%
  z-index: 999;
  display:none;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
  }
  
  li {
    float: left;
  }
  
  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  

.navbar ul li a:hover {
    background-color: #111;
  }

.navbar ul li:hover ul.dropdown{
display:block;
}

.img1{

    width: 200px;
    
    
  }
 
.img1{
  width: 100%;
  height: 100%;
    
   
}
hr{
    padding: 0, 3px, 0, 3px;
}
h1{
text-align: left;
color: #111;
}
.img3{
  margin-bottom: 5px;

}
ol li{
  list-style-type: nome;
}


</style>
</body>
</html>