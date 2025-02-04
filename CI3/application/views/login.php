<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/fav/apple-icon.png">
  <link rel="icon" type="image/ico" href="assets/img/fav/favicon.ico">
  <title>
    ERP Anchorstec - Login
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />

</head>

<body class="">
  <main class="main-content mt-0">
    <section>
      <div class="page-header min-vh-75 vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-6">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Bem vindo!</h3>
                  <p class="mb-0">Insira seu email e sua senha para realizar o login.</p>
                </div>
                <div class="card-body">
                  <form role="form" method="post" id="loginForm">
                    <label>Email</label>
                    <div class="mb-3">
                      <input type="email" id="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                    </div>
                    <label>Senha</label>
                    <div class="mb-3">
                      <input type="password" id="password" class="form-control" placeholder="Senha" aria-label="Password" aria-describedby="password-addon">
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                      <label class="form-check-label" for="rememberMe">Lembrar do login</label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">
                        Entrar
                      </button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    Ainda não tem uma conta?
                    <a href="http://localhost/anchors/CI3/index.php/cadastro" class="text-info text-gradient font-weight-bold">Cadastro</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('assets/img/curved-images/curved6.jpg')"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <script>
    // Quando o documento for carregado, verifique se o email está armazenado
    window.onload = function() {
      // Verifique se o e-mail está no localStorage
      const savedEmail = localStorage.getItem('email');
      const rememberMe = document.getElementById('rememberMe');
      const emailField = document.getElementById('email');

      // Se o email estiver armazenado e a opção "Lembrar do login" estiver marcada
      if (savedEmail) {
        emailField.value = savedEmail; // Preenche o campo de e-mail com o valor armazenado
        rememberMe.checked = true; // Marca a opção "Lembrar do login"
      }
    };

    document.getElementById('loginForm').addEventListener('submit', function(event) {
      var email = document.getElementById('email').value;
      var password = document.getElementById('password').value;
      var rememberMe = document.getElementById('rememberMe').checked;

      // Verifica se os campos estão vazios
      if (email === '' || password === '') {
        alert('Por favor, preencha seu email e senha!');
        event.preventDefault(); // Impede o envio do formulário
      } else {
        // Se a opção "Lembrar do login" estiver ativada
        if (rememberMe) {
          localStorage.setItem('email', email); // Armazena o e-mail no localStorage
        } else {
          localStorage.removeItem('email'); // Remove o e-mail caso a opção não esteja marcada
        }
        alert('Login realizado com sucesso!');
        window.location.href = 'http://localhost/anchors/CI3/index.php/dashboard';
        event.preventDefault(); // Impede o envio do formulário
      }
    });
  </script>
  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>

</body>

</html>