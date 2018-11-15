<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar Sesión | CBIT Noticias</title>

    <?php include './php/includes/styles.php' ?>
</head>
<body>
    <?php include './php/includes/menu.php' ?>

    <main>
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <section class="form-elegant mt-3">
                        <div class="card">
                            <div class="card-body mx-4">
                                <div class="text-center">
                                    <h3 class="dark-grey-text mb-5"><strong>Iniciar Sesión</strong></h3>
                                </div>

                                <div class="md-form">
                                    <input type="email" id="email" name="email" class="form-control">
                                    <label for="email">Correo</label>
                                </div>

                                <div class="md-form pb-3">
                                    <input type="password" id="password" name="password" class="form-control">
                                    <label for="password">Contraseña</label>
                                    <p class="font-small red-text d-flex justify-content-end">¿Olvidaste tu <a href="#" class="red-text font-weight-bold ml-1"> Contraseña?</a></p>
                                </div>

                                <div class="text-center mb-3">
                                    <button type="button" class="btn cbit-gradient btn-block btn-rounded z-depth-1a">iniciar sesión</button>
                                </div>
                            </div>

                            <div class="modal-footer mx-5 pt-3 mb-1">
                                <p class="font-small grey-text d-flex justify-content-end">¿No eres un miembro? <a href="#" class="red-text ml-1"> Regístrate</a></p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <?php include './php/includes/footer.php' ?>
    </main>
    
    <?php include './php/includes/scripts.php' ?>
</body>
</html>