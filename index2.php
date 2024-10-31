<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head >

    <body style="background-image:url(img/1.png);background-size: 800px;background-repeat:no-repeat;">
        <header>
            <?php include 'log/header.php'?>
        </header>
        <main>
            <div style="margin-top: 200px;margin-left: 500px;width: 280px;height:240px;border: 2px solid black;text-align: center;border-radius: 20px;background-color: green;">
            <form>
                <div class="mb-3">
                        <label for="" class="form-label">USUARIO</label>
                        <input
                            type="text"
                            name=""
                            id=""
                            class="form-control"
                            placeholder=""
                            style="width: 250px;margin-left: 20px;"
                        />
                </div>
                   <div class="mb-3">
                        <label for="" class="form-label">CLAVE</label>
                        <input
                            type="text"
                            name=""
                            id=""
                            class="form-control"
                            placeholder=""
                            style="width: 250px;margin-left: 20px;"
                        />
                </div>
                <button type="button" class="btn btn-danger">ENTRAR</button>
                <button type="reset" class="btn btn-danger">BORRAR</button><br>
                <a href="">Olvido su clave</a>
            </form>
        </div>

        <script>

        </script>
        
        </main>
        <footer>
            <?php include 'log/footer.php'?>
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
