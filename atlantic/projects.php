<?php $currentPage = "projects" ?>

<html>
    <?php include './components/head.php';?>

    <body>
        <?php include './components/navbar.php';?>
        <main>
            <div id="slider">
                <div class="slides">
                    <?php
                        for ($i = 1; $i <= 38; $i++) {
                            echo "<div class='slide'><img src='./images/slideshow/{$i}.jpg' alt='Slide {$i}' /></div>";
                        }
                    ?>
                </div>

                <div id="overlay-text">
                    <h1>Recent and ongoing projects</h1>
                </div>
            </div>

            <div id="mid">
                <div id="spotlight">
                    <h1>Featured Projects</h1>
                    <div id="spot-display">
                        <div class="spot-project">
                            <h2>Project Title 1</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Sed vel justo et ligula fermentum iaculis.</p>
                            <a href="#">Read more</a>
                        </div>

                        <div class="spot-project">
                            <h2>Project Title 2</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Sed vel justo et ligula fermentum iaculis.</p>
                            <a href="#">Read more</a>
                        </div>

                        <div class="spot-project">
                            <h2>Project Title 3</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Sed vel justo et ligula fermentum iaculis.</p>
                            <a href="#">Read more</a>
                        </div>
                    </div>
                </div>

                <h1 id="other">Other Projects</h1>

                <div id="project-display">
                    <div class="project">
                        <h2>Project Title 1</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Sed vel justo et ligula fermentum iaculis.</p>
                        <a href="#">Read more</a>
                    </div>

                    <div class="project">
                        <h2>Project Title 2</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Sed vel justo et ligula fermentum iaculis.</p>
                        <a href="#">Read more</a>
                    </div>

                    <div class="project">
                        <h2>Project Title 3</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Sed vel justo et ligula fermentum iaculis.</p>
                        <a href="#">Read more</a>
                    </div>

                    <div class="project">
                        <h2>Project Title 4</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Sed vel justo et ligula fermentum iaculis.</p>
                        <a href="#">Read more</a>
                    </div>

                    <div class="project">
                        <h2>Project Title 5</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Sed vel justo et ligula fermentum iaculis.</p>
                        <a href="#">Read more</a>
                    </div>

                    <div class="project">
                        <h2>Project Title 6</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Sed vel justo et ligula fermentum iaculis.</p>
                        <a href="#">Read more</a>
                    </div>
                </div>
            </div>
        </main>

        <?php include './components/footer.php';?>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const slides = document.querySelectorAll('.slide');
                let currentIndex = 0;
                const totalSlides = slides.length;

                function showNextSlide() {
                    slides[currentIndex].style.opacity = 0;
                    currentIndex = (currentIndex + 1) % totalSlides;
                    slides[currentIndex].style.opacity = 1;
                }

                // Initialize the first slide
                slides[currentIndex].style.opacity = 1;

                // Change slides every 3 seconds
                setInterval(showNextSlide, 3000);
            });
        </script>
    </body>
</html>

<style>
    html, body {
        margin: 0;
        padding: 0;
    }

    #slider {
        z-index: 2;
        width: 100%;
        height: 70vh;
        overflow: hidden; 
        position: relative; 
        background-color: rgba(0, 0, 0, 0.5); 
        box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
        margin-bottom: 0;
    }

    #slider::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); 
        z-index: 1; 
    }

    .slides {
        display: flex;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
    }

    .slide {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
        transition: opacity 1s ease-in-out;
    }

    .slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    #overlay-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white; 
        text-align: center;
        z-index: 2;
    }

    #overlay-text h1, #overlay-text p {
        margin: 0;
        padding: 0;
    }

    #overlay-text h1 {
        color: var(--tertiaryColor);
    }

    main {
        background: var(--tertiaryColor);
    }

    #spotlight h1{
        color: var(--primaryColor);
        text-align: center;
    }

    #spot-display {
        height: auto;
        perspective: 1500px; 
        display: grid;
        grid-template-columns: repeat(3, 1fr); 
        grid-gap: 20px;
        padding: 60px;
        box-sizing: border-box;
        margin-top: 30px;
        color: white;
        text-align: center;
        overflow: hidden;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
    }

    .spot-project {
        height: 300px;
        padding: 20px; 
        transform-style: preserve-3d;
        font-size: 1.2rem;
        box-shadow: rgba(0, 0, 0, 0.4) 0px 30px 90px;
        backface-visibility: hidden;
        -webkit-box-reflect: below 5px;
    }

    .spot-project a,
    .project a:visited {
        background-color: var(--primaryColor);
        text-decoration: none;
        color: var(--tertiaryColor);
        padding: 10px 20px;
    }

    .spot-project:first-child{ transform: rotateY(20deg) translateZ(-1px);}
    .spot-project:nth-child(2){ transform: rotateY(0deg) translateZ(-90px);}
    .spot-project:last-child{ transform: rotateY(-20deg) translateZ(-1px);}

    <?php
        for ($i = 1; $i <= 3; $i++) {
            echo ".spot-project:nth-child({$i}) { 
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('./images/project/{$i}.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;}";
        }
    ?>

    #other{
        text-align: center;
        margin: 20px auto 0;
        padding:5px;
        background-color: var(--secondaryColor);
        width: 20%;
    }

    #project-display {
        perspective: 1500px; 
        display: grid;
        grid-template-columns: repeat(3, 1fr); 
        grid-gap: 20px;
        padding: 0px 60px;
        box-sizing: border-box;
        margin-top: 30px;
        color: white;
        text-align: center;
    }

    .project {
        height: 300px;
        padding: 20px; 
        transform-style: preserve-3d;
        font-size: 1.2rem;
    }

    .project a,
    .project a:visited {
        color: var(--tertiaryColor);
        text-decoration: none;
        padding: 10px;
        background-color: var(--primaryColor);
    }

    <?php 
        for ($i = 1; $i <= 6; $i++) {
            echo ".project:nth-child({$i}) {
                background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('./images/slideshow/{$i}.jpg');
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }";
        }
    ?>
</style>