<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand">Frontend Bootcamp</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#learn" class="nav-link">What you'll learn</a>
                    </li>
                    <li class="nav-item">
                        <a href="#questions" class="nav-link">Questions</a>
                    </li>
                    <li class="nav-item">
                        <a href="#instructiors" class="nav-link">Instructors</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Showcase -->
    <section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start mt-5">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1>Become a <span class="text-warning">Web Developer</span></h1>
                    <p class="lead my-4">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur inventore accusantium animi reprehenderit
                    </p>
                    <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#enroll">Start the Enrollment</button>
                </div>
                <img class="img-fluid w-50 d-none d-sm-block" src="assets/showcase.svg" alt="">
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="bg-primary text-light p-5">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center">
                <h3 class="mb-3 mb-md-0">Sign up for our newsletter</h3>

                <div class="input-group news-input">
                    <input type="text" class="form-control" placeholder="Enter Email" aria-label="Enter email">
                    <button class="btn btn-dark btn-lg" type="button">Button</button>
                </div>

            </div>
        </div>
    </section>

    <!-- Boxes -->
    <section class="p-5">
        <div class="container">
            <div class="row text-center g-4">

                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-laptop"></i>
                            </div>
                            <h3 class="card-title">
                                Virtual
                            </h3>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, quasi est? Amet corrupti sed deleniti.
                            </p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card bg-secondary text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-person-square"></i>
                            </div>
                            <h3 class="card-title">
                                Hybrid
                            </h3>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, quasi est? Amet corrupti sed deleniti.
                            </p>
                            <a href="#" class="btn btn-dark">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-people"></i>
                            </div>
                            <h3 class="card-title">
                                In person
                            </h3>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, quasi est? Amet corrupti sed deleniti.
                            </p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Learn Sections-->

    <section class="p-5" id="learn">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md">
                    <img src="assets/fundamentals.svg" class="img-fluid" alt="">
                </div>
                <div class="col-md p-5">
                    <h2>Learn the FUNdamentals</h2>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos consequatur omnis nam ipsa nemo numquam, velit laudantium. Non quaerat delectus veniam et, recusandae minima perspiciatis, mollitia accusamus aspernatur perferendis blanditiis.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel aut illo voluptas provident earum velit?</p>
                    <a href="" class="btn btn-light mt-3">
                        <i class="bi bi-chevron-right"></i> Read More
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="p-5 bg-dark text-light" id="learn">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md p-5">
                    <h2>Learn React</h2>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos consequatur omnis nam ipsa nemo numquam, velit laudantium. Non quaerat delectus veniam et, recusandae minima perspiciatis, mollitia accusamus aspernatur perferendis blanditiis.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel aut illo voluptas provident earum velit?</p>
                    <a href="" class="btn btn-light mt-3">
                        <i class="bi bi-chevron-right"></i> Read More
                    </a>
                </div>
                <div class="col-md">
                    <img src="assets/react.svg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Question Accordion -->
    <section id="section" class="p-5">
        <div class="container">
            <h2 class="text-center mb-4">Frequently Asked Questions</h2>
            <div class="accordion accordion-flush" id="questions">
                <!-- item 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-one" aria-controls="flush-collapseOne">
                            Accordion Item #1
                        </button>
                    </h2>
                    <div id="question-one" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#questions">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem sint laudantium explicabo temporibus magnam cumque ducimus, maiores, iure soluta molestiae cupiditate voluptates. Libero inventore dolorem officiis fugiat natus. Dicta, quasi. Velit, voluptatibus architecto totam molestias unde, omnis hic nemo quo blanditiis saepe sunt tenetur, neque odit! Quidem rerum architecto blanditiis?</div>
                    </div>
                </div>
                <!-- item 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-two" aria-controls="flush-collapseOne">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="question-two" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#questions">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem sint laudantium explicabo temporibus magnam cumque ducimus, maiores, iure soluta molestiae cupiditate voluptates. Libero inventore dolorem officiis fugiat natus. Dicta, quasi. Velit, voluptatibus architecto totam molestias unde, omnis hic nemo quo blanditiis saepe sunt tenetur, neque odit! Quidem rerum architecto blanditiis?</div>
                    </div>
                </div>
                <!-- item 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-three" aria-controls="flush-collapseOne">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="question-three" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#questions">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem sint laudantium explicabo temporibus magnam cumque ducimus, maiores, iure soluta molestiae cupiditate voluptates. Libero inventore dolorem officiis fugiat natus. Dicta, quasi. Velit, voluptatibus architecto totam molestias unde, omnis hic nemo quo blanditiis saepe sunt tenetur, neque odit! Quidem rerum architecto blanditiis?</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Instructors -->
    <section id="instructors" class="p-5 bg-primary">
        <div class="container">
            <h2 class="text-center text-white">Our Instructors</h2>
            <p class="lead text-center text-white mb-5">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores quis accusantium quaerat quasi facilis, libero expedita doloribus amet eum odio?
            </p>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="Card-body text-center">
                            <img src="https://randomuser.me/api/portraits/men/11.jpg" class="rounded-circle mb-3" alt="">
                            <h3 class="card-title mb-3">John Doe</h3>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure, nihil perspiciatis? Sequi facilis consectetur laboriosam.</p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="Card-body text-center">
                            <img src="https://randomuser.me/api/portraits/women/11.jpg" class="rounded-circle mb-3" alt="">
                            <h3 class="card-title mb-3">Jane Doe</h3>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure, nihil perspiciatis? Sequi facilis consectetur laboriosam.</p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="Card-body text-center">
                            <img src="https://randomuser.me/api/portraits/men/12.jpg" class="rounded-circle mb-3" alt="">
                            <h3 class="card-title mb-3">Steeve Smith</h3>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure, nihil perspiciatis? Sequi facilis consectetur laboriosam.</p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="Card-body text-center">
                            <img src="https://randomuser.me/api/portraits/women/12.jpg" class="rounded-circle mb-3" alt="">
                            <h3 class="card-title mb-3">Sara Smith</h3>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure, nihil perspiciatis? Sequi facilis consectetur laboriosam.</p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  Contact  -->
    <section class="p-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md">
                    <h2 class="text-center mb-4">Contact Info</h2>
                    <ul class="list-group list-group-flush lead">
                        <li class="list-group-item">
                            <span class="fw-bold">Main Location:</span> 50 Main St Boston MA
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Main Location:</span> 50 Main St Boston MA
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Main Location:</span> 50 Main St Boston MA
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Main Location:</span> 50 Main St Boston MA
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="p-5 bg-dark text-white text-center position-relative">
        <div class="container">
            <p class="lead">Copyright &copy; 2021 Frontend Bootcamp</p>

            <a href="#" class="position-absolute bottom-0 end-0 p-5">
                <i class="bi bi-arrow-up-circle h1"></i>
            </a>
        </div>

    </footer>

    <!-- Modal -->
    <div class="modal fade" id="enroll" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="enrollLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="lead">Fill out this form and we'll get back at you.</p>
                    <form>
                        <div class="mb-3">
                            <label for="first-name" class="col-form-label">First Name</label>
                            <input type="text" id="first-name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="last-name" class="col-form-label">Last Name</label>
                            <input type="text" id="last-name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Email</label>
                            <input type="text" id="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="col-form-label">Phone</label>
                            <input type="text" id="phone" class="form-control">
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>