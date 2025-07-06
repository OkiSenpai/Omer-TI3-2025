<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login | TI3-2025</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
      html, body {
        height: 100%;
      }
      body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
      }
      main {
        flex: 1;
      }

    .vh-100 {
      height: 100vh;
    }

    .imgContainerLogin {
  
   
      overflow: hidden;
      padding: 0;
    }

    .imgContainerLogin img {
      max-width: 100%;
      max-height: 100%;
      width: auto;
      height: auto;
      display: block;
      margin: 0 auto;
      object-fit: contain; 
    }

   
    @media (max-width: 767.98px) {
      .imgContainerLogin {
        height: 200px; 
      }
    }
     html, body {
        height: 100%;
      }
      body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
      }
      main {
        flex: 1;
      }
  </style>
</head>

<body>
  <?php require_once "../view/public/nav.php"; ?>

  <section class="vh-80">
    <div class="container-fluid" style="max-height: 100%;">
      <div class="row" style="max-height:60vh;">
        <div
          class="col-sm-6 d-flex flex-column justify-content-center align-items-center text-black"
          style="padding: 2rem"
        >
          <form style="width: 23rem;" method="post" action="">
            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

            <div class="form-outline mb-4">
              <label class="form-label" for="login">User Name</label>
              <input
                type="text"
                id="login"
                name="login"
                class="form-control form-control-lg"
                required
              />
            </div>

            <div class="form-outline mb-4">
              <label class="form-label" for="password">Password</label>
              <input
                type="password"
                id="password"
                name="password"
                class="form-control form-control-lg"
                required
              />
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg w-100" type="submit">Login</button>
            </div>

            <?php if (isset($error)) : ?>
            <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>

          <?php if(isset($jsRedirect)): echo $jsRedirect;?>
            <div class="alert alert-success">✅ Vous êtes bien connecté... un instant...</div>
            <?php endif; ?>
          </form>
        </div>

        <div class="col-sm-6 px-0 imgContainerLogin d-none d-md-flex justify-content-center align-items-center"  style="max-height:80vh;">
          <img src="../public/assets/bruxelles.webp" alt="Login image" />
        </div>
      </div>
    </div>
  </section>
<?php require_once "../view/public/footer.php"; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
