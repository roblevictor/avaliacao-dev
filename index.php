<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>House Of Burguer</title>
</head>

<body>
  <nav class="navbar col-12 position-fixed navbar-expand-lg navbar-dark bg-dark" style="z-index: 999;">
    <div class="container-fluid col-11 m-auto">
      <a class="navbar-brand" href="#">House Of Burger</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Cardapio">Cardápio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#sobre">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#formulario">Contato</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br><br><br>
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/hamburguer1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/hamburguerveg.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/combo2.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!---->

  <div id="Cardapio" class="row row-cols-1 row-cols-md-2 g-4 col-11 m-auto">
    <div class="col">
      <h2 class="text-center">Cardápio</h2>
      <div class="card">
        <img src="img/hamburger.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Hamburguer Artesanal</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
            content. This content is a little bit longer.</p>

          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Veja mais
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Hamburguer Artesanal</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="img/hamburger.jpg" class="d-block w-100" alt="Foto colorida hamburguer artesanal">
                  <h2>Hamburgueres Artesanais de Costela</h2>
                  <p>O Lorem Ipsum: é um texto modelo, da indústria, tipográfica . . . . . . R$ 25,90</p>
                  <p> O Lorem Ipsum: é um texto modelo, da indústria, tipográfica . . . . . . R$ 34,90</p>
                  <p> O Lorem Ipsum: é um texto modelo, da indústria, tipográfica . . . . . . R$ 35,90</p>
                  <p> O Lorem Ipsum: é um texto modelo, da indústria, tipográfica . . . . . . R$ 34,90</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!---->
    <div class="col">
      <div class="card">
        <img src="img/hamburgervegetariano.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Hamburguer Vegetariano</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
            content. This content is a little bit longer.</p>

          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Veja mais
          </button>

          <!-- Modal -->
          <div class="modal fade" id="modalvegetariano" tabindex="-1" aria-labelledby="modalvegetarianolLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalvegetarianolLabel">Hamburguer Vegetariano</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="img/hamburgervegetariano.jpg" class="d-block w-100"
                    alt="foto colorida hamburger Vegetariano">
                  <h2>Hamburguer Vegetariano</h2>
                  <p>O Lorem Ipsum: é um texto modelo, da indústria, tipográfica . . . . . . R$ 26,90</p>
                  <p> O Lorem Ipsum: é um texto modelo, da indústria, tipográfica . . . . . . R$ 30,90</p>
                  <p> O Lorem Ipsum: é um texto modelo, da indústria, tipográfica . . . . . . R$ 35,00</p>
                  <p>O Lorem Ipsum: é um texto modelo, da indústria, tipográfica . . . . . . R$ 38,90 </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!---->
    <div class="col">
      <div class="card">
        <img src="img/combo.jpg" class="card-img-top" alt="foto colorida combo hamburger,batata e refrigerante ">
        <div class="card-body">
          <h5 class="card-title">Combos e Bebidas</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
            content.</p>

          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Veja mais
          </button>

          <!-- Modal -->
          <div class="modal fade" id="modalcombo" tabindex="-1" aria-labelledby="modalcomboLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalcomboLabel">Combos e Bebidas</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="img/combo.jpg" class="d-block w-100" alt="foto colorida combo com batata e refrigerante">
                  <h2>Combos e Bebidas</h2>
                  <p> hamburguer bacon,batata frita, rerigerante/suco . . . . . . R$ 55,90
                    <p>Verdinho: Hamburguer Vegetariano de soja, batata frita, refrigerante/suco . . . . . . R$ 58,90
                    </p>
                    <p>Pé na jaca: Hamburguer de jaca, batata frita, refrigerante/suco. . . . . . R$ 52,90</p>
                    <p>O Lorem Ipsum: é um texto modelo, da indústria, tipográfica . . . . . . R$ 34,90</p>
                    <p>Refrigerante lata . . . . . . R$ 5,50</p>
                    <p> Refrigerante 2L . . . . . . R$ 12,00</p>
                    <p> Suco naatural(laranja, maracuja, morango) . . . . . . R$ 10,00</p>
                    <p>Agua . . . . . . R$ 3,00 </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!---->

  <hr>


  <div class="col-11 m-auto ">
    <h2 id="sobre" class="text-center">Sobre Nós</h2>
    <p class="text-center">Mussum Ipsum, cacilds vidis litro abertis. A ordem dos tratores não altera o pão
      duris.Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget.Copo furadis é disculpa de
      bebadis, arcu quam euismod magna.Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.

      Mais vale um bebadis conhecidiss, que um alcoolatra anonimis.Leite de capivaris, leite de mula manquis sem
      cabeça.Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.Posuere libero varius.
      Nullam a nisl ut ante blandit hendrerit. Aenean sit amet nisi.

      Aenean aliquam molestie leo, vitae iaculis nisl.Suco de cevadiss deixa as pessoas mais interessantis.Casamentiss
      faiz malandris se pirulitá.Interagi no mé, cursus quis, vehicula ac nisi.</p>


  </div>
  <hr>
  <div class="col-11 m-auto">
    <h2 class="text-center">Contato</h2>
    <div class=" m-auto" style="width: 150px">
        <i class="fab fa-whatsapp" style="font-size: 150px; color: green;"></i>
    </div>
  </div>

  <br><br><br>
  <hr>
  <article class="col-12">
    <h2 id="formulario">Formulário de Contato</h2>
    <form action="#">
      <div class="form-group row">
        <label for="nome" class="col-sm-2 col-form-label">Nome</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nome" placeholder="Digite seu nome" required>
          <span class="error" style="display: none;" id="erroNome">Caixa nome obrigatório</span>
        </div>
      </div>
      <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">E-mail</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" placeholder="Digite seu email" required>
          <span class="error" style="display: none;" id="erroEmail">Caixa e-mail obrigatório</span>
        </div>
      </div>
      <div class="form-group row">
        <label for="mensagem" class="col-sm-2 col-form-label">Mensagem</label>
        <div class="col-sm-10">
          <textarea class="form-control form-control-sm" id="mensagem" required></textarea>
          <span class="error" style="display: none;" id="erroMensagem">Caixa mensagem obrigatório</span>

          <div class="button">
            <button type="submit" onclick="validarInputs(event)" class="btn btn-primary my-1">Enviar</button>
            <small class="form-text text-muted">Caixa obrigatórios.</small>
          </div>
        </div>
      </div>
    </form>
  </article>
  <hr>

  <footer style="background-color: #333;" class="page-footer font-small blue p-5">
    <div class="text-center">
      <p>Copyright © 2022</p>
    </div>
  </footer>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</body>

</html>
