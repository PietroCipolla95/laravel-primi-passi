<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Step</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>

<body class="bg-secondary">

    <header>
        <nav class="navbar navbar-expand navbar-dark bg-dark d-flex justify-content-center py-4">
            <ul class="nav navbar-nav align-items-center">
                <li class="nav-item">
                    <a class="nav-link text-danger" href="/about">About Us</a>
                </li>
                <li class="nav-item mx-5">
                    <a class="nav-link text-danger border border-danger px-5 fs-3" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="/contact">Contacts</a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="my-5">

        <h1 class="text-danger text-center">
            {{$title}}
        </h1>

        <h6 class="text-center">
            {{$sub_title}}
        </h6>

        <div class="px-5 my-5">
            <div class="d-flex justify-content-between align-items-center py-5">
                <p class="w-25 my-3 p-3 border-start border-top border-danger">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure, impedit mollitia sequi dolore vel inventore voluptatum labore deleniti incidunt eius fugit odit distinctio veniam accusamus rem quaerat facere, facilis fuga aliquid, corporis aut soluta! Recusandae optio tempore alias quidem! Recusandae, enim veritatis consectetur distinctio aut ducimus repellendus labore sit voluptates? Omnis suscipit quod animi aliquam asperiores illo excepturi aperiam pariatur officia natus. Eum cupiditate aliquam earum. A ipsa soluta deleniti, consequuntur dicta possimus. Totam expedita excepturi ducimus eaque doloremque vero, molestiae obcaecati omnis nemo reprehenderit libero. Doloremque sint ipsa eum nemo dolorum? Omnis, inventore ducimus in sit distinctio odit ratione?
                </p>
                <span class="text-info fs-4 fw-bold border-bottom border-info py-2">
                    {{$message}}
                </span>
                <p class="w-25 my-3 p-3 border-end border-top border-danger">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure, impedit mollitia sequi dolore vel inventore voluptatum labore deleniti incidunt eius fugit odit distinctio veniam accusamus rem quaerat facere, facilis fuga aliquid, corporis aut soluta! Recusandae optio tempore alias quidem! Recusandae, enim veritatis consectetur distinctio aut ducimus repellendus labore sit voluptates? Omnis suscipit quod animi aliquam asperiores illo excepturi aperiam pariatur officia natus. Eum cupiditate aliquam earum. A ipsa soluta deleniti, consequuntur dicta possimus. Totam expedita excepturi ducimus eaque doloremque vero, molestiae obcaecati omnis nemo reprehenderit libero. Doloremque sint ipsa eum nemo dolorum? Omnis, inventore ducimus in sit distinctio odit ratione?
                </p>
            </div>
        </div>


    </main>





    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</body>

</html>