<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Actividades Extraescolares</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
               .container {
          position: relative;
          width: 50%;
      }

      .image {
          display: block;
          width: 60%;
          height: auto;
      }

      .overlay {
          position: absolute;
          bottom: 0;
          left: 10%;
          right: 0;
          background-color: #008CBA;
          overflow: hidden;
          width: 0;
          height: 100%;
          transition: .5s ease;
      }

      .container:hover .overlay {
          width: 100%;
          left: 0;
      }

      .text {
          color: white;
          font-size: 20px;
          position: absolute;
          top: 50%;
          left: 50%;
          -webkit-transform: translate(-50%, -50%);
          -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
          white-space: nowrap;
      }
      .w3-content, .w3-auto {
        margin-left: auto;
        margin-right: auto;
    }
    .w3-content {
        max-width: 980px;
    }
    .w3-row-padding, .w3-row-padding > .w3-half, .w3-row-padding > .w3-third, .w3-row-padding > .w3-twothird, .w3-row-padding > .w3-threequarter, .w3-row-padding > .w3-quarter, .w3-row-padding > .w3-col {
        padding: 0 8px;
    }
        </style>
    </head>
    <body>
        <div class="container" align="center">
        <img src="{{ asset('../img/header.png') }}" class="img-fluid" alt="Responsive image" width="1500">
    </div>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Inicio</a>
                    @else
                        <a href="{{ route('login') }}">Acceso</a>
                    <!--     <a href="{{ route('register') }}">Registro</a> -->
                    @endauth
                </div>
            @endif

            <div class="content">
              <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="title m-b-md">
                Actividades Extraescolares
            </div>  
            <br>
            <div class="w3-content" style="max-width:800px">

                <div class="w3-row-padding" style="margin:0 -16px">

                    <div class="w3-half">
                        <div class="w3-example">
                            <h3>Basquetbol</h3>
                            <div class="container">
                              <img src="../img/basque.png" alt="Avatar" class="image">
                              <div class="overlay">
                                <div class="text">Basquetbol</div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="w3-half">
                    <div class="w3-example">
                        <h3>Baile jazz</h3>
                        <div class="container">
                          <img src="../img/moderno.jpg" alt="Avatar" class="image">
                          <div class="overlay">
                            <div class="text">Baile jazz</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w3-row-padding" style="margin:0 -16px">

                <div class="w3-half">
                    <div class="w3-example">
                        <h3>Rondalla</h3>
                        <div class="container">
                          <img src="../img/rondalla.jpg" alt="Avatar" class="image">
                          <div class="overlay">
                            <div class="text">Rondalla</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="w3-half">
            <div class="w3-example">
                <h3>Teatro</h3>
                <div class="container">
                  <img src="../img/teatro.jpg" alt="Avatar" class="image">
                  <div class="overlay">
                    <div class="text">Teatro</div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<footer class="footer">
    <div class="container center">
      <div class="row justify-content-center">
        <img class="img-fluid " alt="Responsive image" src="{{ asset('img/footer.png') }}" title="footer" width="1500">
        <br>
        <span class="text-muted">
          Av. Tecnológico s/n. Fraccionamiento La Virgen
          <br>
          Metepec, Edo. De México, México C.P. 52149
          <br>
          Tel. (52) (722) 2 08 72 00
      </span>
  </div>
</div>
</footer>
            </div>
        </div>
    </body>
</html>
