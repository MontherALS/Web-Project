<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monther Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar">
        <div class="nav-logo">Monther Portfolio</div>

        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <section id="home" class="home-section">
        <img src="image/HeaderGif2.gif" alt="Header" class="header-gif">

        <?php include 'personal_data.php'; ?>
    </section>

    <section id="skills" class="skills-section">
        <h2>My Skills</h2>

        <div class="skills-list">
            <div class="skill-card">
                <img src="image/HtmlGif.gif" alt="HTML Image">
                <span>HTML</span>
            </div>

            <div class="skill-card">
                <img src="image/CssGif.gif" alt="CSS Image">
                <span>CSS</span>
            </div>

            <div class="skill-card">
                <img src="image/JsGif.gif" alt="JavaScript Image">
                <span>JavaScript</span>
            </div>

            <div class="skill-card">
                <img src="image/ReactGif.gif" alt="React Image">
                <span>React</span>
            </div>

            <div class="skill-card">
                <img src="image/NodejsGif.gif" alt="Node.js Image">
                <span>Node.js</span>
            </div>
        </div>
    </section>

<section id="projects" class="projects-section">
    <h2>My Projects</h2>

    <div class="projects-grid">
        <?php include 'projects_data.php'; ?>
    </div>

    <div class="project-slider">
        <img id="sliderImage" src="image/project1.jpg" alt="Project Image">

        <br><br>

        <button id="nextBtn" class="btn">Next Image</button>
    </div>
</section>

    <section id="contact" class="contact-section">
        <h2>Contact Me</h2>

        <div class="contact-card">
            <form action="form_message.php" method="POST" class="contact-form">

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Your Name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Your Email" required>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" placeholder="Write your message here..." required></textarea>
                </div>

                <button type="submit" class="btn">Send Message</button>

            </form>
        </div>

        <div class="contact-social">
            <a href="https://www.linkedin.com/in/monther-alshammari-2453b0342/" class="social-btn" target="_blank" rel="noopener noreferrer">
                <img src="image/LinkedinGif.gif" alt="LinkedIn">
                <span>LinkedIn</span>
            </a>

            <a href="https://github.com/MontherALS" class="social-btn" target="_blank" rel="noopener noreferrer">
                <img src="image/GitubGif.gif" alt="GitHub">
                <span>GitHub</span>
            </a>
        </div>
    </section>

    <footer>
        <p>Made by Monther</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>