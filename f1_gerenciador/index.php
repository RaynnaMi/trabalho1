<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Formula One</title>
</head>
<body>
<section class="vh-100 " style="background-color: #8A0000;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" data-bs-theme="dark" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-flex">
              <img src="https://w0.peakpx.com/wallpaper/837/957/HD-wallpaper-f1-f1-logo.jpg"
              alt="" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-white">

                <form method="post" action="login.php"  class="needs-validation" novalidate >

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Formula One</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Faça login na sua conta</h5>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form2Example17">*email</label>
                    <input name = "email" type="email" id="form2Example17" class="form-control form-control-lg required" />
                    <div class="invalid-feedback">insira dados validos</div>
                    <div class="valid-feedback">Valido.</div>
   
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form2Example27">*Senha</label>
                    <input name = "senha"type="password" id="form2Example27" class="form-control form-control-lg  required" />
                    <div class="invalid-feedback">insira dados validos</div>
                    <div class="valid-feedback">Valido.</div>
                  </div>

                  <div class="pt-1 mb-4">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-danger btn-lg btn-block" type="submit" value="entrar" name ="submit">Login</button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  // JavaScript para evitar a exibição de feedback "inválido" até que o formulário seja enviado
  (function() {
    'use strict';
    var forms = document.querySelectorAll('.needs-validation');
    Array.prototype.slice.call(forms)
      .forEach(function(form) {
        form.addEventListener('submit', function(event) {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
  })();
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>  
</body>
</html>
