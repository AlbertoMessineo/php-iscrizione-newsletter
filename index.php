<?php
require_once __DIR__ . '/session.php';
require_once __DIR__ . '/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php include __DIR__ . '/head.php'; ?>

<body>
    <header class="container text-center p-5">
        <h1>Iscriviti anche tu alla nostra Newsletter!</h1>
    </header>
    <main class="container p-3">
        <!---------------------- FORM ----------------------------->
        <form action="index.php" method="GET">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label my-2 mb-3">
                    <h4>Indirizzo email</h4>
                </label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="input-email">
                <div id="emailHelp" class="form-text my-3">Non condivideremo la tua mail con nessun altro.</div>
                <button type="submit" class="btn btn-primary">Invia</button>
            </div>
            <?php 
             if ($_SESSION['email']) : 
             ?>
                <div class="alert red-am alert-<?php if ($correct_mail=== false) : ?>warning<?php endif; ?> mt-5" role="alert">
                    <?php if ($correct_mail === false) : ?>Per accedere è necessaria una mail valida, inserisci "@" e "."!<?php endif; ?>
                </div>
            <?php endif; ?>
        </form>
        <!---------------------END FORM---------------------------->
    </main>
</body>

</html>