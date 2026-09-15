<?php
session_start();
include "koneksi.php";
$data_projek =
mysqli_query($koneksi, "SELECT *  FROM projek_portofolio");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Rani's Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
     </head>
     <body>
      <header>
         <h1>Rani's Portfolio</h1>
      </header>
      <nav>
         <a href="#home">Home</a>
         <a href="#about">About Me</a>
         <a href="#projects">My Projects</a>
         <a href="#skills">Skills</a>
         <a href="#contact">Contact</a>
         <?php if
         (isset($_SESSION['login']) && $_SESSION['login'] == true) { ?> 
            <a
            href="halaman_admin.php">Admin</a>
            <a href="logout.php">Logout</a>
         <?php } else { ?>
            <a href="login.php">Login</a>
         <?php } ?>           
      </nav>
      <div class="running-text">
         <p>Welcome to my portfolio - Information Systems student - Let's Create Something Meaningful!</p>
      </div>
      <div class="content">
      <main>
         <section id="home">
            <h2>Welcome to My Portfolio</h2>
            <p>Hi!I'm Rani, an Information Systems student with a passion for technology, creativity, and continuous learning. Explore my portfolio to learn more about me, my skills, and the projects I have created.</p>
            <a href="mailto:wirahayuzahrani18@students.unnes.ac.id?subject=Hello%20Rani" class="btn btn-primary">Say Hello!</a>
         </section>
         <section id="about">
            <h2>About Me</h2>
            <p>Hello! I'm Rani, an Information Systems student who is passionate about technology, creativity, and continuous learning. I am interested in web development and exploring how technology can be used to create useful and user-friendly solutions. Besides technology, I also enjoy video editing and creating Instagram carousel content, where I can combine creativity, storytelling, and visual design.
               As a student, I am continuously developing my skills and gaining new experiences through academic projects and personal learning. I believe that every learning process is an opportunity to grow, and I am excited to continue exploring technology and creativity to create meaningful digital experiences.</p>
            <a href="Rani_CV.pdf" target="_blank">Download My CV</a>
         </section>
         <section id="projects">
            <h2>My Projects</h2>
            <p>Here are some of the projects I have worked on:</p>
            <div  class="projects">
                  <?php while ($projek = mysqli_fetch_assoc($data_projek))
               { ?>
                  <div class="project-card">
                    <h3><?php echo $projek['judul'];?></h3>
                    <img src="images/<?php echo $projek['gambar'];?>">
                    <p><?php echo $projek['deskripsi'];?></p>
                  </div>
               <?php } ?>
               <div class="project-card">
                  <h3>Lokavent</h3>
                  <img src="lokavent.jpeg" alt="Lokavent Project">
                  <p>A web-based event management application that allows users to create, manage, and promote events. It includes features such as event registration, ticketing, and social media integration.</p>
               </div>
               <div class="project-card">
                  <h3>NightGuards</h3>
                  <img src="logonightguards.jpeg" alt="NightGuards Project">
                  <p>A mobile application that helps users establish healthy sleep habits by providing reminders and tips for better sleep. It includes features such as sleep tracking, bedtime reminders, and personalized sleep recommendations.</p>
               </div>
            </div>
         </section>
         <section id="skills">
            <h2>My Skills</h2>
            <p>Here are some of the skills I have developed:</p>
            <div class="skill-container">
               <div class="skill-item">
                  <h3>HTML</h3>
                  <p>Proficient in creating semantic and accessible web pages.</p>
               </div>
               <div class="skill-item">
                  <h3>CSS</h3>
                  <p>Skilled in designing responsive and visually appealing layouts.</p>
               </div>
               <div class="skill-item">
                  <h3>Video Editing</h3>
                  <p>Experienced in creating engaging video content for various platforms.</p>
               </div>
               <div class="skill-item">
                  <h3>Content Creation</h3>
                  <p>Adept at crafting compelling narratives and visual stories.</p>
               </div>
            </div>
         </section>
      </main>
      <aside>
         <img src="profil3.jpeg" alt="Profile Image">
         <h3>Rani</h3>
         <p>Information Systems Student</p>
         <h3>Skills</h3>
         <ul>
            <li>HTML</li>
            <li>CSS</li>
            <li>Video Editing</li>
            <li>Content Creation</li>
         </ul>
         <h3>Contact</h3>
         <p class="contact-info">Email: wirahayuzahrani18@students.unnes.ac.id</p>
         <p class="contact-info">Phone: +62 8820 0060 48587</p>
         <p class="contact-info">Address: GunungPati, Semarang, Indonesia</p>
         <a href="https://www.linkedin.com/in/wirahayutrisanti/" target="_blank">Linkedin</a>
      </aside>
      </div>
      <footer id="contact">
         <a href="https://www.instagram.com/zahrrrr_12/" target="_blank">Instagram</a>
         <a href="https://github.com/wirahayuzahrani-student" target="_blank">GitHub</a>
         <a href="https://wa.me/62882006048587" target="_blank">WhatsApp</a>
         <p>&copy; 2026 Rani's Portfolio. All rights reserved.</p>
      </footer>
   </body>
</html>
