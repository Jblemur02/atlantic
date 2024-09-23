<?php $currentPage="contact"?>

<html>
    <head>
        <?php include "./components/head.php";?>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const name = document.getElementById('name');
                const email = document.getElementById('email');
                const message = document.getElementById('message');
                const contactForm = document.getElementById('contact-form');
                const errorElement = document.getElementById('error');
                const successMsg = document.getElementById('success-msg');
                const submitBtn = document.getElementById('submit');

                const validate = (e) => {
                    e.preventDefault();

                    if (name.value.length < 3) {
                        errorElement.innerHTML = 'Your name should be at least 3 characters long.';
                        return false;
                    } 

                    if (!(email.value.includes('.') && (email.value.includes('@')))) {
                        errorElement.innerHTML = 'Please enter a valid email address.';
                        return false;
                    } 

                    if (!emailIsValid(email.value)) {
                        errorElement.innerHTML = 'Please enter a valid email address.';
                        return false;
                    }

                    if (message.value.length < 15) {
                        errorElement.innerHTML = 'Please write a longer message.';
                        return false;
                    }

                    errorElement.innerHTML = '';
                    successMsg.innerHTML = 'Thank you! I will get back to you as soon as possible.'; 

                    e.preventDefault();
                    setTimeout(function () {
                        successMsg.innerHTML = '';
                        contactForm.reset();
                    }, 6000);

                    return true;
                }

                const emailIsValid = email => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);

                submitBtn.addEventListener('click', validate);
            });
        </script>

        <style>
            :root {
                --primary-color: #010712;
                --secondary-color: #818386;
                --bg-color: #FCFDFD;
                --button-color: #3B3636;
                --h1-color: #3F444C;
            }

            * {
                transition: all 0.3s ease-in-out;
                overflow-x: hidden;
            }

            .contact-container {
                position:relative;
                display: flex;
                width: 100vw;
                height: 100vh;
                background: var(--bg-color);
                overflow-y:hidden;
            }

            .left-col {
                width: 45vw;
                height: 100%;
                background: var(--bg-color);
                display: flex;
            }

            .left-col iframe {
                width: 100%;
                height: 100%;
                border: 0;
            }

            .right-col {
                background: var(--bg-color);
                width: 55vw;
                height: 100vh;
                padding: 5rem 3.5rem;
            }

            h1, label, button, .description {
                font-weight: 400;
                letter-spacing: 0.1rem;
            }

            h1 {
                color:var(--h1-color);
                text-transform: uppercase;
                font-size: 2.5rem;
                letter-spacing: 0.5rem;
                font-weight: 300;
            }

            p {
                color: var(--secondary-color);
                font-size: 0.9rem;
                letter-spacing: 0.01rem;
                width: 40vw;
                margin: 0.25rem 0;
            }

            label, .description {
                color: var(--secondary-color);
                text-transform: uppercase;
                font-size: 0.625rem;
            }

            form {
                width: 31.25rem;
                position: relative;
                margin-top: 2rem;
                padding: 1rem 0;
            }

            input, textarea, label {
                width: 40vw;
                display: block;
            }

            input::placeholder, textarea::placeholder {
                color: var(--primary-color);
            }

            input, textarea {
                color: var(--primary-color);
                font-weight: 500;
                background: var(--bg-color);
                border: none;
                border-bottom: 1px solid var(--secondary-color);
                padding: 0.5rem 0;
                margin-bottom: 1rem;
                outline: none;
            }

            textarea {
                resize: none;
            }

            button {
                text-transform: uppercase;
                font-weight: 300;
                background: var(--button-color);
                color: var(--bg-color);
                width: 10rem;
                height: 2.25rem;
                border: none;
                border-radius: 2px;
                outline: none;
                cursor: pointer;
            }

            input:hover, textarea:hover, button:hover {
                opacity: 0.5;
            }

            button:active {
                opacity: 0.8;
            }

            /* Toggle Switch */
            .description {
                margin-left: 1.25rem;
            }

            #error, #success-msg {
                width: 40vw;
                margin: 0.125rem 0;
                font-size: 0.75rem;
                text-transform: uppercase;
                font-family: 'Jost';
                color: var(--secondary-color);
            }

            #success-msg {
                transition-delay: 3s;
            }

            @media only screen and (max-width: 950px) {
                .logo {
                    width: 8rem;
                }
                h1 {
                    font-size: 1.75rem;
                }
                p {
                    font-size: 0.7rem;
                }
                input, textarea, button {
                    font-size: 0.65rem;
                }
                .description {
                    font-size: 0.3rem;
                    margin-left: 0.4rem;
                }
                button {
                    width: 7rem;
                }
            }
        </style>
    </head>

    <body>
        <?php include "./components/navbar.php";?>

        <main>
            <div class="contact-container">
                <div class="left-col">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3507.7372283134223!2d-81.4423754!3d28.4573366!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e77e8f42ff634b%3A0x4d49ab9ae0264182!2s7575%20Kingspointe%20Pkwy%20%2312a%2C%20Orlando%2C%20FL%2032819!5e0!3m2!1sen!2sus!4v1722374719217!5m2!1sen!2sus"></iframe>
                </div>
                
                <div class="right-col">
                    <h1>Contact us</h1>
                    <form id="contact-form" method="post">
                        <label for="name">Full name</label>
                        <input type="text" id="name" name="name" placeholder="Your Full Name" required>
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" placeholder="Subject" required>
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="Your Email Address" required>
                        <label for="message">Message</label>
                        <textarea rows="6" placeholder="Your Message" id="message" name="message" required></textarea>
                        <button type="submit" id="submit" name="submit">Send</button>
                    </form>
                    <div id="error"></div>
                    <div id="success-msg"></div>
                    <div id="companyinfo">
                        <p>Office Hours:</p><br>
                        <p>Monday - Friday : 8 A.M - 5 P.M </p><br>
                        <p>Please submit all bid proposals to: rcivil@atlantic-civil.com</p><br>
                        <p>Corporate Headquarters</p><br>
                        <p>7575 Kingspointe Pkwy Ste 12A</p> <br>
                        <p>Orlando, FL 32819</p>
                    </div>
                </div>
            </div>
        </main>
        <?php include "./components/footer.php";?>
    </body>
</html>
