<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="container">
        <nav class="navbar">
            <ul>
                <li><a href="index.php">HOME</a>
                </li>
                <li><a href="componentes.php">PERIFÉRICOS</a>
                </li>
                <li><a href="quemsomos.php">QUEM SOMOS</a>
                </li>
                <li><a href="manutençoes.php">MANUTENÇÕES</a>
                </li>

                
                <input id="searchbar" onkeyup="search_itens()" type="text"
        name="search" placeholder="Search itens..">
      
    <!-- ordered list -->
    <ol id='list'>
        <li class="itens"><a href="index.php">HOME</a></li>
        <li class="itens"><a href="componentes.php">PERIFÉRICOS</a></li>
        <li class="itens"><a href="quemsomos.php">QUEM SOMOS</a></li>
        <li class="itens"><a href="manutençoes.php">ma</a></li>
      
    </ol>


    <script src="main.js"></script>
           
            </ul>
</nav>

        <div class="img1">
        <img src="img1.png" width="60%";>
        </div>

        <article>
           <h3>Quer saber qual hardware o seu computador possui? Torne-se um especialista em informática com nosso guia rápido sobre esses componentes essenciais e suas funções.
           </h3>
           <br>
           <h4>Em uma definição bem simples, o termo hardware refere-se aos componentes físicos de que um computador precisa para funcionar. O termo envolve tudo que tenha uma placa de circuito e opere dentro de um computador ou notebook, como placa-mãe, placa de vídeo, CPU (unidade de processamento central), ventoinhas, webcam, fonte de alimentação e assim por diante.
           </h4>
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
  

  li a:hover {
    background-color: #111;
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