<?
session_start();
include './php/function.php'
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- my-css -->
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <header>
        <div class="container mt-5 text-center">
            <!-- Title -->
            <h1 class="text-success">Strong Password Generator</h1>
        </div>
    </header>

    <main>
        <!-- Container -->
        <div class="container mt-5 text-light text-center" id="main-container">
            <div class="d-flex flex-column align-items-center">
                <div class="d-flex gap-5 align-items-center mt-3">
                    <p>
                        Numero caratteri password:
                    </p>
                    <!-- Get method -->
                    <form method="GET" class="d-flex">
                        <div class="p-3">
                            <div class="mb-3">
                                <!-- Input for length password -->
                                <input type="number" name="password_length" id="password_length" class="form-control"
                                    value="" min="1">
                            </div>
                        </div>
                        <div class="p-3">
                            <!-- Generate button -->
                            <button type="submit" class="btn btn-success" name="submit">
                                Generate
                            </button>
                            <!-- Reset button to reload page -->
                            <button type="reset" class="btn btn-warning" id="reset_button">
                                <a href="http://localhost/php-strong-password-generator/">Reset</a>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="d-flex gap-5 align-items-center mt-3">
                    <p>
                        Ripetere più caratteri?:
                    </p>
                    <form class="d-flex">
                        <div class="col">
                            <div class="mb-3">
                                <div class="form-check">
                                    <!-- Input for confirm repeat characters-->
                                    <input class="form-check-input" type="radio" name="permission" id="permission_yes"
                                        value="yes">
                                    <label class="form-check-label" for="permission_yes"> Yes </label>
                                </div>
                                <div class="form-check">
                                    <!-- Input for denial repeat characters -->
                                    <input class="form-check-input" type="radio" name="permission" id="permission_no"
                                        value="no">
                                    <label class="form-check-label" for="permission_no"> No </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <?php
                // Echo paragraph password generated
                echo '<p>Your generated password is: ' . $newPassword . '</p>'
                    ?>
            </div>
        </div>
    </main>
    </main>
</body>

</html>