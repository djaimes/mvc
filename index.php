<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Control Escolar 1.0</title>
    <link rel="stylesheet" href="/mvc/public/css/estilos.css">
    <link rel="stylesheet" href="/mvc/public/css/menuh.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" charset="utf-8"></script>
    <script src="/mvc/public/js/mvc.js" charset="utf-8"></script>
  </head>
  <body>
    <header>
      <section id="logo">
        <img id="logotipouac" src="/mvc/public/images/escudouacgris.png" alt="Escudo UAC">
      </section>
      <section id="banner">
        <div id="sistema">
          <span>CONTROL ESCOLAR 1.0</span>
        </div>
      </section>
      <section id="login">
        <img id="perfilusuario" src="/mvc/public/images/perfil.png" alt="Perfil">
        <img src="" alt="">
        <span id="nombreUsuario">usuario</span>
      </section>
    </header>
    <nav>
      <div class="" id="menu">
        <ul class="ultabs">
          <li><a href="#tab1">Inicio</a></li>
          <li><a href="#tab2">Profesores</a></li>
          <li><a href="#tab3">Alumnos</a></li>
          <li><a href="#tab4">Estadísticas</a></li>
          <!-- Perfil debe alinearse a la deercha -->
          <li class="opcionALaDerecha" ><a href="#tab5">Salir</a></li>
        </ul>
      </div>
    </nav>
    <main>
      <div id="divmain"></div>
          <article id="tab1" class="">
            <div class="">
              <form id="formLogin" method="post" >
                <label>Usuario</label>
                <input id="loginUsuario" name="loginUsuario" placeholder="usuario" >
                <label>Contraseña</label>
                <input id="loginContrasena" name="loginContrasena" type="password" placeholder="contraseña">
                <input id="loginSubmit" name="submit" type="submit" value="Entrar">
              </form>
            </div>
          </article>
          <article id="tab2" class="">
            <div class = "" id = "divprofesores">
              <div id="divprofesoresinput" class="">
                <form id="formConsultaProfesor" class="" method="post">
                  <label for="buscaProfesor">Id del profesor</label>
                  <input id="buscaProfesor" type="text" name="" value="" placeholder="id">
                  <input id="buscaProfesorSubmit" type="submit" name="consultar" value="Consultar">
                </form>
              </div>
              <div id="divprofesoresdatos" class="">
              </div>
            </div>
          </article>
          <article id="tab3" class="">
            <h1>Alumnos</h1>
            <span>Este es el div para los alumnos</span>
          </article>
          <article id="tab4" class="">
            <h1>Estadísticas</h1>
            <span>Este es el div para las estadísticas</span>
          </article>
          <article id="tab5" class="">
            <h1>Salir</h1>
            <span>Este es el div para salir</span>
          </article>
      </div>
    </main>
    <footer>
      <span>Universidad Autónoma de Campeche | Programación de aplicaciones web</span>
    </footer>
  </body>
</html>
