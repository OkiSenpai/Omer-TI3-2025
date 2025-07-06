<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
 
  <title>Login | TI3-2025</title>
<style>
  @media screen and (max-width: 639px) {

  .imgContainerLogin{
    display: none;
  }
}
</style>
</head>

<body>
  <?php require_once "../view/public/nav.php"; ?>

  <section class="vh-90">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 text-black d-flex flex-column justify-content-center">


          <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
          <form style="width: 23rem; margin: auto;"  method="post" action=""> 
              <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>



              <div class="form-outline mb-4">
                <label class="form-label" for="login">User Name</label>
                <input type="text" id="login" name="login" class="form-control form-control-lg" required />
                
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control form-control-lg" required />
                
              </div>
              <div class="pt-1 mb-4">
                <button class="btn btn-info btn-lg btn-block w-100" type="submit">Login</button>
              </div>
                            <?php if (isset($error)): ?>
                <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
              <?php endif; ?>

              <?php if (isset($jsRedirect)): ?>
                <div class="alert alert-success">✅ Vouz etes bien conecté... un instant...</div>
              <?php endif; ?>
            
            </form>
          </div>
          <?php
          if (isset($jsRedirect)) {
            echo $jsRedirect;
          }
          ?>
        </div>
        <div class="col-sm-6 px-0 d-none d-md-block imgContainerLogin" >
          <img class="vh-90" src="../public/assets/bruxelles.webp"
            alt="Login image" class="w-100 login-image">
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
    crossorigin="anonymous"></script>
</body>
</html>