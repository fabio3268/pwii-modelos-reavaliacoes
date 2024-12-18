<!DOCTYPE html>
<html>
<head>
    <title>..:: Prova INF-3 ::..  </title>
    <link rel="stylesheet" href="<?= url("themes/web/assets/styles.css"); ?>">
</head>
<body>
<nav class="navbar background">
    <ul class="nav-list">
        <li><a href="<?= url(); ?>">HOME</a></li>
        <li><a href="<?= url("/sobre"); ?>">Sobre nós</a></li>
        <li><a href="<?= url("/contato"); ?>">Contato</a></li>
        <li><a href="<?= url("/registro"); ?>">Registro</a></li>
        <li><a href="<?= url("/login"); ?>">Login</a></li>
        <li><a href="<?= url("/lista-usuarios"); ?>">Lista Usuário</a></li>
    </ul>
</nav>
<?= $this->section("content"); ?>
</body>
</html>
