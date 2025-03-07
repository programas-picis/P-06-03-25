<!doctype html>

<html
  lang="en"
  class="layout-wide customizer-hide"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">


<body>
  <!-- Content -->

  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register -->
        <div class="card px-sm-6 px-0">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <a href="index.html" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                <img src="/intranet-amaro/assets/img/favicon/comunidades.png" alt="Logo" width="36" height="38" />
                </span>
                <span class="app-brand-text demo text-heading fw-bold">Grupo Amaro Holiwis</span>
              </a>
            </div>

            <!-- /Logo -->
            <h4 class="mb-1">Bienvenido a la Intranet!👋</h4>
            <p class="mb-6">Inicia sesión en tu cuenta y comienza a navegar en la Intranet corporativa.</p>

            <form id="formAuthentication" class="mb-6" action="index.html">
              <div class="mb-6">
                <label for="email" class="form-label">Cedula</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email-username"
                  placeholder="Ingrese su cedula"
                  autofocus />
              </div>
              <div class="mb-6 form-password-toggle">
                <label class="form-label" for="password">Contraseña</label>
                <div class="input-group input-group-merge">
                  <input
                    type="password"
                    id="password"
                    class="form-control"
                    name="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password" />
                  <span class="input-group-text cursor-pointer"><i class="icon-base bx bx-hide"></i></span>
                </div>
              </div>
              <div class="mb-6">
                <label for="email" class="form-label">Empresa</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email-username"
                  placeholder=""
                  autofocus />
              </div>
              <div class="mb-8">
                <div class="d-flex justify-content-between">
                  <a href="auth-forgot-password-basic.html">
                    <span>Olvidaste tu contraseña?</span>
                  </a>
                </div>
              </div>
              <div class="mb-6">
                <button class="btn btn-primary d-grid w-100" type="submit">Iniciar Sesion</button>
              </div>
            </form>

            <!-- <p class="text-center">
              <span>New on our platform?</span>
              <a href="auth-register-basic.html">
                <span>Create an account</span>
              </a>
            </p> -->
          </div>
        </div>
        <!-- /Register -->
      </div>
    </div>
  </div>

  <!-- Core JS -->

  <script src="/intranet-amaro/assets/vendor/libs/jquery/jquery.js"></script>

  <script src="/intranet-amaro/assets/vendor/libs/popper/popper.js"></script>
  <script src="/intranet-amaro/assets/vendor/js/bootstrap.js"></script>

  <script src="/intranet-amaro/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="/intranet-amaro/assets/vendor/js/menu.js"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->

  <!-- Main JS -->

  <script src="/intranet-amaro/assets/js/main.js"></script>

  <!-- Page JS -->

  <!-- Place this tag before closing body tag for github widget button. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>