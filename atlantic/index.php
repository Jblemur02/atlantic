<?php $currentPage = "home" ?>

<html>
<?php include './components/head.php'; ?>

<head>
    <style>
        #landing {
            position: relative;
            margin: 0 auto;
            padding: 0;
            width: 100%;
            height: 85vh;
            overflow: hidden;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('./images/topBack.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        }

        #landing-text {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100%;
            width: 100%;
        }

        #landing-text h1 {
            font-size: 4em;
            color: var(--tertiary);
        }

        #landing-text a {
            padding: .75%;
            color: white;
            background-color: var(--primaryColor);
            font-size: 1.3em;
        }

        #landing-text a:hover {
            background-color: var(--primaryAccent);
        }

        h1 {
            color: var(--primaryColor);
            text-align: center;
        }

        h1 span {
            color: var(--primaryColor);
        }

        #description {
            background-color: var(--primaryAccent);
            text-align: center;
            padding: 1em;
            height: 40vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 0 20%;
        }

        #description h1 {
            color: var(--tertiaryColor);
            font-size: 2.5em;
        }

        #description p {
            color: var(--tertiaryColor);
            font-size: 1.2em;
        }

        #information {
            margin: 2% auto;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
            width: 90%;
            display: flex;
            gap: 1px;
            flex-direction: row;
            padding: 0;
            height: 30vh;
        }

        #information h1 {
            color: var(--primaryColor);
            margin: 0;
        }

        #information p {
            color: var(--tertiaryColor);
            font-size: 1.1rem;
        }

        .info {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background-size: cover;
            background-position: center;
            color: white;
            margin: 0 auto;
        }

        .info-inside {
            position: relative;
            background-color: transparent;
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            background-image: linear-gradient(rgba(255, 255, 255, 0.3), rgba(0, 0, 0, 0.2));
            width: 80%;
            padding: 5%;
            height: 100%;
            text-align: center;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            align-content: center;
            flex-direction: column;
        }

        .info:first-child {
            background-image: url('./images/slideshow/5.jpg');
        }

        .info:nth-child(2) {
            background-image: url('./images/slideshow/6.jpg');
        }

        .info:last-child {
            background-image: url('./images/slideshow/4.jpg');
        }

        .info a {
            color: var(--tertiaryColor);
            background: var(--primaryColor);
            padding: 7px 14px;
            text-decoration: none;
        }

        .info a:hover {
            background: var(--primaryAccent);
        }

        #quicklinks {
            margin: 50px auto;
            background-color: transparent;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            height: 40vh;
        }

        .quicklink {
            flex: 1;
            margin: 20px;
            height: 100%;
            display: flex;
            align-items: center;
            overflow: hidden;
            position: relative;
            box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
        }

        .quicklink a {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .quicklink img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            overflow: hidden;
            -webkit-box-reflect: below 5px linear-gradient(to bottom, rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.4));
        }

        .quicklink-overlay {
            position: absolute;
            top: -100%;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: top 0.5s ease;
        }

        .quicklink:hover .quicklink-overlay {
            top: 0;
        }

        .quicklink-overlay-text {
            color: white;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <?php include './components/navbar.php'; ?>
    </header>

    <div id="landing">
        <div id="landing-text">
            <h1>Atlantic Civil Construction</h1>
            <a href="contact.php">Work With Us</a>
        </div>
    </div>

    <div id="description">
        <h1>Building Dreams, one project at a time</h1>
        <p>
            Atlantic Civil is a dynamic construction company specializing in civil engineering projects that shape infrastructure and urban landscapes. Known for its commitment to quality, safety, and innovation, Atlantic Civil excels in delivering large-scale public and private projects, from roadways and bridges to commercial developments. With a focus on sustainability and community impact, the company leverages cutting-edge technology and industry expertise to meet the diverse needs of its clients. Atlantic Civil's reputation is built on a foundation of reliability, precision, and a strong dedication to exceeding client expectations in every project they undertake.</p>
    </div>

    <div id="information" class="animate-on-scroll">
        <div class="info">
            <div class="info-inside">
                <h1>Our Team</h1>
                <p>Dedicated Professionals</p>
                <a href="careers.php">Check out Our Team</a>
            </div>
        </div>

        <div class="info">
            <div class="info-inside">
                <h1>Our Mission</h1>
                <p>Build dreams one project at a time</p>
                <a href="about.php">See Our Mission</a>
            </div>
        </div>

        <div class="info">
            <div class="info-inside">
                <h1>Our Achievements</h1>
                <p>Award winning company</p>
                <a href="about.php">See Our Awards</a>
            </div>
        </div>
    </div>

    <div>
        <h1>Recent Work</h1>
    </div>

    <div id="quicklinks" class="animate-on-scroll">
        <div class="quicklink">
            <a href="about.php">
                <img src="./images/slideshow/11.jpg" alt="Construction Project">
                <div class="quicklink-overlay">
                    <div class="quicklink-overlay-text">Example Project #1</div>
                </div>
            </a>
        </div>

        <div class="quicklink">
            <a href="projects.php">
                <img src="./images/slideshow/10.jpg" alt="Construction Project">
                <div class="quicklink-overlay">
                    <div class="quicklink-overlay-text">Example Project #2</div>
                </div>
            </a>
        </div>
    </div>


    <?php include './components/footer.php'; ?>
</body>

<script>

</script>

</html>