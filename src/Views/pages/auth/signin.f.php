<?= view('layouts.header', ['title' => "Giriş yap"]) ?>

<style>
    html,
    body {
        height: 90%;
    }

    body {
        display: flex;
        align-items: center;
    }

    .form-signin {
        width: 100%;
        max-width: 330px;
        margin: auto;
    }
</style>

<main class="form-signin">
    <form method="POST" class="text-center" request-form="signin">
        <h1 class="h3 mb-3 fw-normal">Giriş yap</h1>

        <div class="form-floating">
            <input type="text" id="email" name="email" class="form-control mt-1" placeholder="E-mail adresi">
            <label for="email">E-mail adresi</label>
        </div>
        <div class="form-floating">
            <input type="password" id="password" name="password" class="form-control mt-1" placeholder="Şifre">
            <label for="password">Şifre</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary mt-1" type="submit">Giriş yap</button>
    </form>
</main>

<?= view('layouts.footer') ?>