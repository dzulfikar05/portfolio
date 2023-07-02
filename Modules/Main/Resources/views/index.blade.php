<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dzulfikar</title>
    <link href="plugins/bootstrap53/bootstrap.min.css" rel="stylesheet">
    {{-- <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'> --}}
    <link href='fonts.googleapis.com/css?family=Comfortaa:400,700'; rel='stylesheet' type='text/css'>

    <link href="plugins/custom/main.css" rel="stylesheet">
    <link href="plugins/custom/main-mob.css" rel="stylesheet">
    {{-- <link href="plugins/icon-awesome/all-min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="header">
        <div class="container mt-5">
            <div class="col-12">
                <div class="text-secondary fs-6">HELLO WORLD !</div>

            </div>
        </div>
    </div>
    <div class="content">
        <div class="container ">

            <div class="col-12 d-flex row mb-5 reveal">
                <span class="headline-main mt-3">I am Dzulfikar</span>
                <span class="fs-3 mt-3">Malang-based as <span class="fw-bold px-2 text-white"
                        style="background: rgb(18,96,204);
                    background: linear-gradient(128deg, rgba(18,96,204,1) 0%, rgba(41,197,246,1) 79%);">Web
                        Developer</span></span>
                <span class=" slogan text-secondary">Copy, Paste, and Learn</span>
            </div>

            <div class="pt-md-5 d-flex row reveal">

                <div class="col-md-4">
                    <img src="assets/pp.png" class="pp-main" alt="Dzulfikar Muhammad Al Ghifari">
                </div>
                <div class="col-md-5 ">
                    <div class="mx-md-5">
                        <span class="fs-4">
                            Software Engginer fresh graduate from SMK PGRI 3 Malang.
                        </span>
                        <p class="fs-5 mt-3 mt-md-5 fw-light">
                            I have a passion for web programming. I am a Web Developer based in Malang. I usually work
                            with PHP, JavaScript, jQuery, and MySql. I have completed several web development projects
                            with experience in Front End Web Development, and Back End Web Development.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 mt-5 mt-md-0">
                    <div class="d-flex justify-content-center">
                        <button class="btn text-white w-100 w-md-75"
                            style="background: rgb(18,96,204);
                        background: linear-gradient(128deg, rgba(18,96,204,1) 0%, rgba(41,197,246,1) 79%);"><i
                                class="fa fa-file"></i> Link to My CV</button>
                    </div>
                    <div class="mt-4">
                        <span class="fs-5 ">Find Me Online</span>
                        <div class="flex-row mt-3">
                            <a class="text-dark" style="text-decoration: none"
                                href="https://www.linkedin.com/in/dzulfikar-muhammad-al-ghifari-0b88b2232/"
                                target="blank">
                                <img src="assets/linkedin.png" alt="" height="18px" style="object-fit: cover">
                                Linkedin
                            </a>
                        </div>
                        <div class="flex-row mt-2">
                            <a class="text-dark" style="text-decoration: none"
                                href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=fikaralghifari0504@gmail.com"
                                target="blank">
                                <img src="assets/email.png" alt="" height="20px" style="object-fit: cover">
                                Email
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 pt-5 mb-0 mb-md-5 reveal">
                <span class="text-experience fw-bold ">Experience</span>
                <div class="mb-4 mb-md-5"></div>
                <hr>
                </hr>
                <div class="row mt-4 mt-md-5">
                    <div class="col-md-4 row">
                        <span class="fw-bold fs-5">Sekawan Media Informatika</span>
                        <span class=" text-secondary fs-5">(Jan 2022 - Des 2022)</span>
                    </div>
                    <div class="col-md-8 row mt-4 mt-md-0">
                        <span class="fw-bold fs-5 mb-2">Back End Developer</span>
                        <span class="text-secondary fs-5">- Building web applications with php framework</span>
                        <span class="text-secondary fs-5">- Maintain the app with feature additions and bug
                            fixing</span>
                        <span class="fw-bold fs-5 mb-2 mt-4">Tools Used:</span>
                        <span class="text-secondary fs-5">VSCode, XAMPP, Laragon, Navicat, Postman</span>
                    </div>
                </div>
            </div>
            <div class="pt-5 d-flex justify-content-center reveal">
                <p class="text-experience fw-bold mt-5">Interested to hire me or work with me?</p>
            </div>
            <div class="pt-3 pb-5 d-flex justify-content-center reveal">
                <a class="btn text-white"
                    style="background: rgb(18,96,204);
                background: linear-gradient(128deg, rgba(18,96,204,1) 0%, rgba(41,197,246,1) 79%);"
                    href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=fikaralghifari0504@gmail.com"
                    target="blank">Email Me</a>
            </div>
        </div>
    </div>
    <div class="footer mb-5">
        <div class="mt-5"></div>
        <hr>
        </hr>
        <div class="container ">
            <div class="mt-5">

            </div>
            <span class="mt-5">All rights reserved. © Dzulfikar Muhammad Al Ghifari 2023.</span>
        </div>
    </div>
    <script src="plugins/bootstrap53/bootstrap.bundle.min.js"></script>
    <script>
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");
            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 150;
                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                } else {
                    reveals[i].classList.remove("active");
                }
            }
        }
        window.addEventListener("scroll", reveal);

        // To check the scroll position on page load
        reveal();
    </script>
</body>

</html>
