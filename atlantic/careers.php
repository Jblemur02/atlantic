<?php $currentPage = "careers"; ?>

<html>

<?php include './components/head.php'; ?>

<body>
    <?php include './components/navbar.php'; ?>
    <div id="title">
        <h1>Join a team of dedicated professionals!</h1>
    </div>

    <main>
        <div id="career-info">
            <h2>Our Values</h2>
            <div class="card card-1">
                <h3>Worker Safety</h3>
                <p>We strive to provide a safe and supportive work environment that promotes collaboration, innovation, and personal growth.</p>
            </div>

            <div class="card card-2">
                <h3>Quality Control</h3>
                <p>We prioritize the quality of our products and services, ensuring that they meet customer expectations and meet or exceed their performance standards.</p>
            </div>

            <div class="card card-3">
                <h3>Environmental Sustainability</h3>
                <p>We invest in our facilities, equipment, and operations to minimize environmental impact and promote sustainability.</p>
            </div>

            <div class="card card-4">
                <h3>Innovation and Technology</h3>
                <p>We invest in our team, our facilities, and our operations to maximize innovation and technology, ultimately leading to better products, services, and solutions.</p>
            </div>

            <div class="card card-5">
                <h3>Customer Satisfaction</h3>
                <p>We strive to create a culture of continuous improvement and growth, where every employee feels valued and encouraged to make a difference.</p>
            </div>

            <div class="card card-6">
                <h3>Integrity and Transparency</h3>
                <p>We maintain a strong commitment to integrity and transparency, where all employees feel comfortable discussing their concerns and concerns with their supervisors.</p>
            </div>

            <div class="card card-7">
                <h3>Teamwork and Collaboration</h3>
                <p>We work together to achieve our goals, create a positive impact on our customers, and create a positive environment for all employees.</p>
            </div>

            <div class="card card-8">
                <h3>Community Engagement</h3>
                <p>We foster a strong sense of community and camaraderie among our employees, where they feel valued and encouraged to contribute and make a difference.</p>
            </div>

            <div class="card card-9">
                <h3>Continuous Improvement</h3>
                <p>We strive to create a culture of continuous improvement and growth, where every employee feels valued and encouraged to make a difference.</p>
            </div>

            <div class="card card-10">
                <h3>Employee Development</h3>
                <p>We invest in our employees, our facilities, and our operations to create a culture of continuous improvement and growth, where every employee feels valued and encouraged to make a difference.</p>
            </div>
        </div>

        <div id="benefits">
            <h2>Employee Benefits</h2>
            <div class="benefit-container">
                <div class="benefit">
                    <h3>Medical Insurance</h3>
                    <p>Comprehensive coverage including dental and vision.</p>
                </div>

                <div class="benefit">
                    <h3>401(k) Plan</h3>
                    <p>Company-matched retirement savings plan.</p>
                </div>

                <div class="benefit">
                    <h3>Paid Holidays and Vacation</h3>
                    <p>Generous time off policy including paid holidays and vacation days.</p>
                </div>
            </div>
        </div>



        <div id="positions">
            <h2>Current Open Positions</h2>
            <div class="position-container">
                <div class="position">
                    <h3>Heavy equipment operator</h3>
                    <p>Heavy Equipment Operator is responsible for handling and managing construction equipment, equipment storage, and maintenance. They will lead the team in managing heavy equipment, ensuring that all employees are safe and well-prepared for their roles.</p>
                    <a href="job-template.php">Apply now</a>
                </div>

                <div class="position">
                    <h3>Pipe Layer</h3>
                    <p>Pipe Layer is responsible for handling and managing construction equipment, equipment storage, and maintenance. They will lead the team in managing pipe, ensuring that all employees are safe and well-prepared for their roles.</p>
                    <a href="job-template.php">Apply now</a>
                </div>

                <div class="position">
                    <h3>Skilled Laborer</h3>
                    <p>Skilled Laborer is responsible for handling and managing construction equipment, equipment storage, and maintenance. They will lead the team in managing labor, ensuring that all employees are safe and well-prepared for their roles.</p>
                    <a href="job-template.php">Apply now</a>
                </div>

                <div class="position">
                    <h3>Roadyway Foreman</h3>
                    <p>Roadyway Foreman is responsible for handling and managing construction equipment, equipment storage, and maintenance. They will lead the team in managing roadway, ensuring that all employees are safe and well-prepared for their roles.</p>
                    <a href="job-template.php">Apply now</a>
                </div>
                
                <div class="position">
                    <h3> General Laborer</h3>
                    <p>General Laborer is responsible for handling and managing general labor facilities, such as construction equipment, equipment storage, and maintenance. They will lead the team in managing labor, ensuring that all employees are safe and well-prepared for their roles.</p>
                    <a href="job-template.php">Apply now</a>
                </div>

                <div class="position">
                    <h3>Superintendent</h3>
                    <p>Superintendent is responsible for overseeing the operations and safety of Atlantic Civil's heavy equipment, pipe layers, roadway, and general labor facilities. They will lead the team in managing equipment, safety protocols, and ensuring that all employees are safe and well-prepared for their roles.</p>
                    <a href="job-template.php">Apply now</a>
                </div>

            </div>

        </div>
    </main>
    <?php include './components/footer.php'; ?>
</body>
</html>

<style>
    #title {
        margin: 0;
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("./images/slideshow/20.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;

        text-align: center;
        width: 100%;
        padding: 0;
        height: 60vh;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
    }

    #title h1 {
        color: var(--tertiaryColor);
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    #career-info {
        width: 100%;
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        grid-gap: 10px;
        padding: 20px; 
        box-sizing: border-box;
        margin-bottom: 10%;
        transform-style: preserve-3d;
        transform: perspective(1000px);
    }

    #career-info h2 {
        grid-column: 1 / -1;
        color: var(--primaryColor);
        text-align: center;
    }

    main div h2{
        background-color: var(--secondaryColor);
        padding: 10px;
    }

    .card {
        height: 50vh;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 20px;
        color: var(--tertiaryColor);
        background: #fff; 
        box-shadow: rgba(0, 0, 0, 0.15) 0px 10px 20px, rgba(0, 0, 0, 0.10) 0px 6px 10px; 
        transform: translateY(-10px);
        transition: transform 0.3s ease, box-shadow 0.3s ease; 
    }

    .card:hover {
        transform: translateY(-15px); 
        box-shadow: rgba(0, 0, 0, 0.25) 0px 20px 30px, rgba(0, 0, 0, 0.15) 0px 10px 15px; 
    }


    .card h3 {
        text-align: center;
        padding: 20px;
    }
    
    .card-1 { transform: rotateX(0deg) rotateY(27deg) translateZ(20px);}
    .card-2 { transform:  rotateX(0deg) rotateY(12deg) translateZ(20px);}
    .card-3 { transform: rotateX(0deg) rotateY(0deg) translateZ(20px); }
    .card-4 { transform:  rotateX(0deg) rotateY(-12deg) translateZ(20px); }
    .card-5 { transform: rotateX(0deg) rotateY(-27deg) translateZ(20px); }
    .card-6 { transform: rotateX(0deg) rotateY(27deg) translateZ(20px); }
    .card-7 { transform:  rotateX(0deg) rotateY(12deg) translateZ(20px); }
    .card-8 { transform: rotateX(0deg) rotateY(0deg) translateZ(20px); }
    .card-9 { transform:  rotateX(0deg) rotateY(-12deg) translateZ(20px); }
    .card-10 { transform:  rotateX(0deg) rotateY(-27deg) translateZ(20px); }

    <?php
        for ($i = 1; $i <= 10; $i++) {
            echo ".card-{$i} {";
            echo "background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('./images/slideshow/{$i}.jpg');";
            echo "background-position: center;";
            echo "background-repeat: no-repeat;";
            echo "background-size: cover;";
            echo "}";
        }
    ?>

    #benefits {
        padding: 20px;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 8px;
    }

    #benefits h2 {
        color: var(--primaryColor);
        margin-bottom: 20px;
        text-align: center;
    }

    .benefit-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px; /* Space between items */
        justify-content: center;
    }

    .benefit {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 15px;
        width: 100%;
        max-width: 300px; /* Adjust as needed */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .benefit h3 {
        color: var(--secondaryColor);
        margin-bottom: 10px;
    }

    .benefit p {
        color: #555;
        font-size: 0.9rem;
    }

    #positions {
        width: 100%;
        background-color: var(--tertiaryColor);
        text-align: center;
        padding: 20px;
        box-sizing: border-box;
    }

    #positions h2 {
        color: var(--primaryColor);
    }

    .position-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr); 
        gap: 20px;
    }

    .position {
        background-color: var(--secondaryColor);
        box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 6px; 
        padding: 20px; 
        text-align: center; 
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: space-between; 
    }

    .position h3 {
        color: var(--primaryColor);
    }

    .position p {
        color: var(--tertiaryColor);
    }

    .position a,
    .position a:visited {
        color: var(--tertiaryColor);
        text-decoration: none;
        padding: 10px;
        background-color: var(--primaryColor);
        border-radius: 4px;
        display: inline-block;
    }

    .position a:hover {
        opacity: 0.8;
        transition: opacity 0.3s ease;
    }

</style>