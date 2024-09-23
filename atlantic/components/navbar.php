<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playwrite+AT:ital,wght@0,100..400;1,100..400&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </head>

    <!-- <div style="
    width: 2px;
    height:100%;
    background-color: var(--primaryColor);
    position:absolute;
    top: 0;
    left: 50%;
    z-index: 99999999999999999999;
    "> -->
        
    </div>
    <body>
        <nav>
            <ul>
                <div class="nav-top">
                    <li id="logo"><img src="./images/logo.png" alt="Logo"></li>
                    <li id="qoute">"Experience you can trust"</li>
                </div>
                <div class="nav-bottom">
                    <li><a href="about.php" <?php if ($currentPage === 'about') echo 'class="active"'; ?>>About</a></li>
                    <li><a href="careers.php" <?php if ($currentPage === 'careers') echo 'class="active"'; ?>>Careers</a></li>
                    <li><a href="index.php" <?php if ($currentPage === 'home') echo 'class="active"'; ?>>Home</a></li>
                    <li><a href="projects.php" <?php if ($currentPage === 'projects') echo 'class="active"'; ?>>Projects</a></li>
                    <li><a href="contact.php" <?php if ($currentPage === 'contact') echo 'class="active"'; ?>>Contact</a></li>
                </div>
            </ul>
        </nav>
    </body>
</html>

<style>
nav {
    height:15vh;
    background-color: var(--tertiaryColor);
    width: 100%;
    position: relative;
    top: 0;
    left: 0;
    z-index: 100;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
    display: flex;
    align-items: center;
    overflow: hidden;
}

ul {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin: 0;
    padding: 0;
    list-style-type: none;
    width: 100%;
    height: 100%;
    padding-top: 1%;
}

.nav-top {
    height: 50%;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    align-content: center;
    color: var(--secondaryColor);
    width: 100%;
}

.nav-bottom {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    height: 50%;
    margin: 0 auto;
}

#qoute {
    font-family: 'Playwrite AT', serif;
    font-size: 2em;
    font-weight: 400;
    display: flex;
    align-items: center;
    justify-content: center;
    font-style: italic;
}

#logo img {
    height:100%;
}

nav a {
    display: inline-block;
    color: var(--secondaryColor);
    padding: 14px 20px;
    transition: all 0.3s ease;
}


ul li {
    height: 100%;
    display: inline;
    padding: 0;
}

ul li a:hover {
    background-color: var(--primaryAccent);
    color: var(--tertiaryColor);
}

ul li a:active,
ul li a.active {
    background-color: var(--tertiaryColor);
    color: var(--primaryColor);
}

nav span {
    color: var(--primaryColor);
}

@media only screen and (max-width: 600px) {
    nav {
        flex-direction: column;
        align-items: flex-start;
    }

    .nav-right {
        justify-content: flex-start;
    }

    ul {
        flex-direction: column;
        align-items: flex-start;
    }

    li {
        margin: 5px 0;
    }
}
</style>
