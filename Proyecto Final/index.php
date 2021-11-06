<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Prroyecto Final Desarrollo Web</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
      rel="stylesheet"
      type="text/css"
    />
    <!-- Google fonts-->
    <link
      href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic"
      rel="stylesheet"
      type="text/css"
    />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body>
    <!-- Navigation-->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">Cotizador Amazon</a>
        <a class="btn btn-primary" href="php/vistas/login.php">Login</a>
      </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
      <div class="container position-relative">
        <div class="row justify-content-center">
          <div class="col-xl-6">
            <div class="text-center text-white">
              <!-- Page heading-->
              <h1 class="mb-5">Cotiza tus productos de Amazon</h1>
              <!-- Signup form-->
              <!-- * * * * * * * * * * * * * * *-->
              <!-- * * SB Forms Contact Form * *-->
              <!-- * * * * * * * * * * * * * * *-->
              <!-- This form is pre-integrated with SB Forms.-->
              <!-- To make this form functional, sign up at-->
              <!-- https://startbootstrap.com/solution/contact-forms-->
              <!-- to get an API token!-->
              <form
                class="form-subscribe"
                id="contactForm"
                data-sb-form-api-token="API_TOKEN"
              >
                <!-- Email address input-->
                <div class="row">
                  <div class="col">
                    <input
                      class="form-control form-control-lg"
                      id="emailAddress"
                      type="email"
                      placeholder="Link del producto"
                      data-sb-validations="required,email"
                    />
                    <div
                      class="invalid-feedback text-white"
                      data-sb-feedback="emailAddress:required"
                    >
                      Por favor, ingrese un link de producto.
                    </div>
                    <div
                      class="invalid-feedback text-white"
                      data-sb-feedback="emailAddress:email"
                    >
                      El link del producto es erroneo.
                    </div>
                  </div>
                  <div class="col-auto">
                    <button
                      class="btn btn-primary btn-lg disabled"
                      id="submitButton"
                      type="submit"
                    >
                      Cotizar
                    </button>
                  </div>
                </div>
                <!-- Submit success message-->
                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->
                <div class="d-none" id="submitSuccessMessage">
                  <div class="text-center mb-3">
                    <div class="fw-bolder">Form submission successful!</div>
                    <p>To activate this form, sign up at</p>
                    <a
                      class="text-white"
                      href="https://startbootstrap.com/solution/contact-forms"
                      >https://startbootstrap.com/solution/contact-forms</a
                    >
                  </div>
                </div>
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <div class="d-none" id="submitErrorMessage">
                  <div class="text-center text-danger mb-3">
                    Error sending message!
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Image Showcases-->
    <section class="showcase">
      <div class="container-fluid p-0">
        <div class="row g-0">
          <div
            class="col-lg-6 order-lg-2 text-white showcase-img"
            style="background-image: url('assets/img/compra.jpg')"
          ></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2><br> ¿Quiénes somos?</h2>
            <p class="lead mb-0">
              Somos una empresa que se dedica a realizar cotizaciones en amazon,
              de forma directa y sin intermediarios. Ponemos a tu disposición
              nuestros servicios de importación, tus productos favoritos estarán
              en Guatemala en el menor tiempo posible y te lo enviamos hasta tu
              domicilio. <br /> <br>
              nuestro equipo está conformado por personal altamente calificado y
              con experiencia en el área para brindarte un servicio de calidad,
              eficaz y con el precio mas bajo posible.
            </p>
          </div>
        </div>
        <div class="row g-0">
          <div
            class="col-lg-6 text-white showcase-img"
            style="background-image: url('assets/img/comercio.jpg')"
          ></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h2>haz tus cotizaciones y pedidos</h2>
            <p class="lead mb-0">
              Prueba nuestro sitio de cotizaciones y realiza tu primer pedido,
              al momento de realizar el pago total, nosotros nos encargamos del
              resto y te lo traemos mas rapido de lo que crees.
            </p>
          </div>
        </div>
        <div class="row g-0">
          <div
            class="col-lg-6 order-lg-2 text-white showcase-img"
            style="background-image: url('assets/img/logistica.jpg')"
          ></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>Te facilitamos todo el proceso</h2>
            <p class="lead mb-0">
              Puedes realizar tu cotizacion, pedir tu producto y pagarlo en un solo lugar,
              no tienes que preocuparte por mas detalles, nosotros nos encargamos de toda
              la logistica para entregarte tu producto hasta la puerta de tu casa.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer-->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="php/vistas/about.php">Sobre Nosotros</a>
              </li>
            </ul>
            <p class="text-muted small mb-4 mb-lg-0">
              &copy; Desarrollo Web 2021. Derechos Reservados.
            </p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item me-4">
                <a href="#!"><i class="bi-facebook fs-3"></i></a>
              </li>
              <li class="list-inline-item me-4">
                <a href="#!"><i class="bi-twitter fs-3"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#!"><i class="bi-instagram fs-3"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  </body>
</html>
