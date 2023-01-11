<?php include 'header.php' ?>
<?php include 'navbar.php' ?>

    <div class="px-4 py-5 my-5 text-center">
        
    <form class="needs-validation" novalidate action="./db/form_registro.php" method="POST">
                <div class="row g-3">
                    <div class="col-sm-6">
                    <label for="firstName" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="lastName" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>

                <div class="col-12">
                    <label for="username" class="form-label">Username</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text">@</span>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                    <div class="invalid-feedback">
                        Your username is required.
                        </div>
                    </div>
                </div>

                <hr class="my-4">

                <button class="w-100 btn btn-primary btn-lg" type="submit">Registrar</button>
            </form>
    </div>

<?php include 'footer.php' ?>