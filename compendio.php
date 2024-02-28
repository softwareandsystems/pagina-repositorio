<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Libros ICSI</title>
  <link rel="stylesheet" href="style2.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <header>
    <div class="nav container">
      <a href="#" class="logo">Bibloteca ICSI</a>
      <a href="iniciar.php" class="login">Iniciar sesión</a>
    </div>
  </header>
  <section class="home" id="home">
      <div class="home-text container">
         <h2 class="home-title">Libros INGENIERÍA DE COMPUTACIÓN Y SISTEMAS</h2>
        <span class="home-subtitle">Aquí encontrarás los libros PDF de INGENIERÍA DE COMPUTACIÓN Y SISTEMAS</span>
      </div>
  </section>
  <div class="post-filter container">
  <span class="filter-item active-filter" data-filter="all">Todos</span>
    <span class="filter-item" data-filter="I Ciclo">I CICLO</span>
    <span class="filter-item" data-filter="II Ciclo">II CICLO</span>
    <span class="filter-item" data-filter="III Ciclo">III CICLO</span>
    <span class="filter-item" data-filter="IV Ciclo">IV CICLO</span>
    <span class="filter-item" data-filter="V Ciclo">V CICLO</span>
    <span class="filter-item" data-filter="VI Ciclo">VI CICLO</span>
    <span class="filter-item" data-filter="VII Ciclo">VII CICLO</span>
    <span class="filter-item" data-filter="VIII Ciclo">VIII CICLO</span>
    <span class="filter-item" data-filter="IX Ciclo">IX CICLO</span>
    <span class="filter-item" data-filter="X Ciclo">X CICLO</span>
    <span class="filter-item" data-filter="desarrollo">Desarrollo de Software</span>
     <span class="filter-item" data-filter="seguridad">Seguridad de la Información</span>
  </div>
  <section class="post container">
  <div class="post-box I CICLO">
    <img src="a535ee4fbbecab2bde8fc2833f15f79d.webp" alt="como programar en java 1" class="post-img">
    <h2 class="category">Algoritmia y Programación</h2>
    <a href= '' class="post-title">
      Cómo programar en Java 10e
    </a>
    <span class="post-date"> 31 Dec 2022</span>
  <p class= "post-description">Este libro presenta las tecnologías de computación de vanguardia para estudiantes, profesores y desarrolladores de software. En esta edición nos enfocamos en las mejores prácticas de ingeniería de software, tomando como base nuestro reconocido método de “código activo”, donde los conceptos se presentan en el contexto de programas funcionales, completos, que se ejecutan en las versiones recientes de Windows®, OSX® y Linux®, en lugar de hacerlo a través de fragmentos de código.</p>
    <div class="profile">
      <img src="istockphoto-1396076705-170667a.webp" alt="imagen-autor" class="profile-img">
      <span class="profile-name">
        Paul Deitel - Harvey Deitel</span>
    </div>
  </div>


    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script>
      $(document).ready(function(){
        $(".filter-item").click(function(){
          const value = $(this).attr("data-filter");
          if(value == "all"){
            $(".post-box").show("1000");
          } else {
            $(".post-box").hide("1000");
            $("." + value).show("1000");
          }
          $(this).addClass("active-filter").siblings().removeClass("active-filter");
        });

        $(window).on("scroll", function() {
          $("header").toggleClass("shadow", $(window).scrollTop() > 0);
        });
      });
    </script>


  </body>