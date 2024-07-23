<nav class="nav nav-pills nav-justified position-absolute w-100 d-flex justify-content-end pe-5 pt-5">
    <div class="d-flex gap-3">
        <a class="nav-link shadow-sm" style="background-color: white;" href="register">Register</a>
        <a class="nav-link active shadow-sm" href="" aria-current="page">Login</a>
    </div>
</nav>

<div style="background-color: #F0F4FC; height: 100vh" class="d-flex justify-content-center">

    <main class="container d-flex justify-content-between m-auto align-items-center">
        <section class="container w-50 m-0">
            <h1>Login for Access to [Your Platform Name]</h1>
            <p>Here, we believe that building a strong professional network begins with your participation.
                We are delighted to offer a modern and user-friendly service to ensure you have the best experience</p>
            <img src="/assets/images/home.png" class="img-fluid" alt="...">
        </section>
        <div class="container " style="width: 30%; height: 50vh">
            <form method="post">
                <h4><b>Login</b></h4><br>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" name="username" value="<?= $_POST['username'] ?? '' ?>" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                    <input type="password" class="form-control" placeholder="Password" aria-label="Password" name="password" value="<?= $_POST['password'] ?? '' ?>" aria-describedby="basic-addon1">
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>

            <?php if (isset($model['error'])) : ?>
                <div class="alert alert-danger mt-5" role="alert">
                    <?= $model['error'] ?>
                </div>
            <?php endif; ?>
        </div>
    </main>

</div>