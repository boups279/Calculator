<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/2a8d481d0c.js" crossorigin="anonymous"></script>
</head>

<b>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <h1 class="col-12 fs-1 text-center">Super Calculator</h1>
            </div>
        </nav>
    </header>
    <section class="col-12 col-md-12 bg-success rounded" style="height: 63rem; margin-top: 2rem; ">


        <div class="row ms-5 ">
            <div class="col-6 col-md-9 bg-primary position-relative " style="height:55rem;border-top-right-radius: 25%;border-bottom-right-radius: 25%; margin-top: 4rem;">
               
            <?php
$numero_table = [];
if (isset($_GET['numero_table']) && isset($_GET['nombre_minimal']) && isset($_GET['nombre_maximal'])) {
    $numero_table = $_GET['numero_table'];
    $nombre_minimal = $_GET['nombre_minimal'];
    $nombre_maximal = $_GET['nombre_maximal'];
?>
                    <div class="col-6 bg-light position-absolute bottom-0 end-0 text-center fs-4 " style="border-radius: 25%;margin-top:6rem;height: 55rem;">
                        <ul class="list-group list-group-flush">
                            <?php
                            echo "<h1 class='text-secondary'>Voici le table de $numero_table</h1><br>";
                            for ($i = $nombre_minimal; $i <= $nombre_maximal; $i++) {
                            ?>
                                <li class="list-group">
                                    <?php
                                    echo  $numero_table .   ' x ' . $i . '  =  ' . ($i * $numero_table) .'<br>';
                                    ?>
                                </li>
                            <?php }
                            ?>
                        </ul>
                    </div>
    <?php } ?>

                <div class="col-md-11 ms-3" style="margin-top: 8rem;">
                    <form action="">
                        <div class="input-group mb-3 w-50 mt-4">
                            <span class="input-group-text" id="basic-addon1">@</span>
                            <input type="number" name="numero_table" class="form-control text-4 py-4 fs-4" placeholder="Tables" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3 w-50 mt-4">
                            <span class="input-group-text" id="basic-addon1">@</span>
                            <input type="number" name="nombre_minimal" class="form-control py-4 fs-4" placeholder="Nombre Minimal" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3 w-50 mt-4">
                            <span class="input-group-text" id="basic-addon1">@</span>
                            <input type="number" name="nombre_maximal" class="form-control py-4 fs-4" placeholder="Nombre Maximal" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <button type="submit" class="valider position-relative btn bg-info  ms-5 my-5 rounded-pill "><i class="icons fa-solid fa-check "></i></button>
                    </form>
                </div>
            </div>
            <div class="col-1 col-md-2  mt-5 px-3 ms-4">
            <a href="addition.php"><div class="size btn col-1 col-md-8 bg-warning text-light p-2 mt-5  ">+</div></a>
                <a href="soustraction.php">
                    <div class="size btn col-1 col-md-8 bg-warning text-light p-2 mt-5 ">-</div>
                </a>
                <a href="miltiplication.php">
                    <div class="size btn col-1 col-md-8 bg-primary text-light p-2 mt-5  ">×</div>
                </a>
                <a href="division.php">
                    <div class="size btn col-1 col-md-8 bg-warning text-light p-2 mt-5  ">÷</div>
                </a>
            </div>

        </div>

    </section>



</html>