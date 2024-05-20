<?php
require 'db_config.php';

$sql = "SELECT id, title, content, category, created_at FROM artikel ORDER BY created_at DESC";
$result = $conn->query($sql);

if (!$result) {
    die("Error: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equif="X-U-Compactible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TEPE - Software Engineer</title>
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="style/responsive.css">
  </head>
  <body>  
    <header>
      <div class="main-container">
        <div class="nav">
          <div class="logo">
            <a href="/">TePe</a>
          </div>
          <nav>
            <ul>
              <li><a href="#services">services</a></li>
              <li><a href="#portofolios">portofolios</a></li>
              <li><a href="#galeri">galeri</a></li>
              <li><a href="#skills">skills</a></li>
              <li><a href="#contact">contact</a></li>
              <li>
                <a href="resum.pdf" target="_blank"
                  ><button class="btn">resum</button></a
                >
              </li>
            </ul>
          </nav>
          <div class="burger">
            <div class="line-1"></div>
            <div class="line-2"></div>
            <div class="line-3"></div>
          </div>
        </div>
        <section id="hero">
          <div class="hero-left">
            <h3 class="pre-tittle">My name is</h3>
            <h1 class="hero-name">Zaki <span> Tri Pamungkas </span></h1>
            <p>
              I am Zaki Tri Pamungkas, an Informatics Engineering Student at
              Muhammadiyah University of Surakarta in 2022. Has experience in
              various organizations, one of which is as Chair Department of PSDM
              (Student Resource Development) BEM FKI UMS with implementation
              work program 90% complete. Apart from that, I am also a social
              media staff at the PDM Karanganyar Library and Information
              Council. I have an interest in a career in the IT field and am
              proficient in it using Microsoft Office Tools along with editing
              applications
            </p>
          </div>
          <div class="hero-right">
            <img src="image/giphy.gif" alt="person standing" />
          </div>
        </section>
      </div>
    </header>
    <!--services-->
    <section id="services">
      <div class="services main-container">
        <h3 class="pre-tittle">Services</h3>
        <h1 class="section-tittle services-tittle">Specialized In</h1>

        <div class="grid-5">
          <!--service 1-->
          <div class="service">
            <div class="service-icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
              >
                <path
                  d="M7.127 22.562l-7.127 1.438 1.438-7.128 5.689 5.69zm1.414-1.414l11.228-11.225-5.69-5.692-11.227 11.227 5.689 5.69zm9.768-21.148l-2.816 2.817 5.691 5.691 2.816-2.819-5.691-5.689z"
                />
              </svg>
            </div>
            <h4>UI/UX Design</h4>
            <p>
              Turn what you have in mind of a digital product into reality. for
              any platform you consider.
            </p>
          </div>

          <!--service 2-->
          <div class="service">
            <div class="service-icon">
              <svg
                width="24"
                height="24"
                xmlns="http://www.w3.org/2000/svg"
                fill-rule="evenodd"
                clip-rule="evenodd"
              >
                <path
                  d="M15.246 17c-.927 3.701-2.547 6-3.246 7-.699-1-2.32-3.298-3.246-7h6.492zm7.664 0c-1.558 3.391-4.65 5.933-8.386 6.733 1.315-2.068 2.242-4.362 2.777-6.733h5.609zm-21.82 0h5.609c.539 2.386 1.47 4.678 2.777 6.733-3.736-.8-6.828-3.342-8.386-6.733zm14.55-2h-7.28c-.29-1.985-.29-4.014 0-6h7.281c.288 1.986.288 4.015-.001 6zm-9.299 0h-5.962c-.248-.958-.379-1.964-.379-3s.131-2.041.379-3h5.962c-.263 1.988-.263 4.012 0 6zm17.28 0h-5.963c.265-1.988.265-4.012.001-6h5.962c.247.959.379 1.964.379 3s-.132 2.042-.379 3zm-8.375-8h-6.492c.925-3.702 2.546-6 3.246-7 1.194 1.708 2.444 3.799 3.246 7zm-8.548-.001h-5.609c1.559-3.39 4.651-5.932 8.387-6.733-1.237 1.94-2.214 4.237-2.778 6.733zm16.212 0h-5.609c-.557-2.462-1.513-4.75-2.778-6.733 3.736.801 6.829 3.343 8.387 6.733z"
                />
              </svg>
            </div>
            <h4>WEB Development</h4>
            <p>
              Simplify and beautify your products and business without any
              difficulties and confusion
            </p>
          </div>

          <!--service 3-->
          <div class="service">
            <div class="service-icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
              >
                <path
                  d="M14.078 4.232l-12.64 12.639-1.438 7.129 7.127-1.438 12.641-12.64-5.69-5.69zm-10.369 14.893l-.85-.85 11.141-11.125.849.849-11.14 11.126zm2.008 2.008l-.85-.85 11.141-11.125.85.85-11.141 11.125zm18.283-15.444l-2.816 2.818-5.691-5.691 2.816-2.816 5.691 5.689z"
                />
              </svg>
            </div>
            <h4>Design Grafis</h4>
            <p>
              Embellish your products with additional digital designs, and reach
              more customers
            </p>
          </div>

          <!--service 4-->
          <div class="service">
            <div class="service-icon">
              <svg
                width="24"
                height="24"
                xmlns="http://www.w3.org/2000/svg"
                fill-rule="evenodd"
                clip-rule="evenodd"
              >
                <path
                  d="M7.5 21c.828 0 1.5.672 1.5 1.5s-.672 1.5-1.5 1.5-1.5-.672-1.5-1.5.672-1.5 1.5-1.5zm9 0c.828 0 1.5.672 1.5 1.5s-.672 1.5-1.5 1.5-1.5-.672-1.5-1.5.672-1.5 1.5-1.5zm-4.5 0c.828 0 1.5.672 1.5 1.5s-.672 1.5-1.5 1.5-1.5-.672-1.5-1.5.672-1.5 1.5-1.5zm8-12v2c0 4.418-3.582 8-8 8s-8-3.582-8-8v-2h2v2c0 3.309 2.691 6 6 6s6-2.691 6-6v-2h2zm-4 2c0 2.209-1.791 4-4 4s-4-1.791-4-4v-7c0-2.209 1.791-4 4-4s4 1.791 4 4v7z"
                />
              </svg>
            </div>
            <h4>Public Speaking</h4>
            <p>
              Make your event lively and more colorful with a lively MC and
              presenter
            </p>
          </div>

          <!--service 5-->
          <div class="service">
            <div class="service-icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
              >
                <path
                  d="M22 6v16h-20v-16h20zm2-6h-24v24h24v-24zm-12.879 14l-4.707-4.707-1.414 1.414 3.293 3.293-3.293 3.293 1.414 1.414 4.707-4.707zm7.879 3h-7v2h7v-2z"
                />
              </svg>
            </div>
            <h4>Aplication Develpoment</h4>
            <p>
              Make your dreams come true, and make things easier for clients by
              creating a simple application project
            </p>
          </div>

          <!--service 6-->
          <div class="service">
            <div class="service-icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
              >
                <path
                  d="M18 10.031v-6.423l-6.036-3.608-5.964 3.569v6.499l-6 3.224v7.216l6.136 3.492 5.864-3.393 5.864 3.393 6.136-3.492v-7.177l-6-3.3zm-1.143.036l-4.321 2.384v-4.956l4.321-2.539v5.111zm-4.895-8.71l4.272 2.596-4.268 2.509-4.176-2.554 4.172-2.551zm-.569 6.134v4.96l-4.25-2.421v-5.134l4.25 2.595zm-5.83 14.842l-4.421-2.539v-5.176l4.421 2.595v5.12zm-3.773-8.702l4.778-2.53 4.237 2.417-4.668 2.667-4.347-2.554zm4.917 3.587l4.722-2.697v5.056l-4.722 2.757v-5.116zm10.586 5.115l-4.722-2.757v-5.116l4.722 2.754v5.119zm-4.074-8.861l4.247-2.39 4.769 2.594-4.367 2.509-4.649-2.713zm9.638 6.323l-4.421 2.539v-5.116l4.421-2.538v5.115z"
                />
              </svg>
            </div>
            <h4>3D Artist</h4>
            <p>
              Make your dreams come true, and make things easier for clients by
              creating a simple application project
            </p>
          </div>

          <!--service 7-->
          <div class="service">
            <div class="service-icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
              >
                <path
                  d="M12 0l-11 6v12.131l11 5.869 11-5.869v-12.066l-11-6.065zm7.91 6.646l-7.905 4.218-7.872-4.294 7.862-4.289 7.915 4.365zm-16.91 1.584l8 4.363v8.607l-8-4.268v-8.702zm10 12.97v-8.6l8-4.269v8.6l-8 4.269zm-1.01-16.638l3.726 2.055-3.7 1.974-3.706-2.021 3.68-2.008z"
                />
              </svg>
            </div>
            <h4>Mockup</h4>
            <p>
              Make your dreams come true, and make things easier for clients by
              creating a simple application project
            </p>
          </div>

          <!--service 8-->
          <div class="service">
            <div class="service-icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
              >
                <path
                  d="M6.613 18.581m9.387-9.581c0 2.209-1.791 4-4 4s-4-1.791-4-4 1.791-4 4-4 4 1.791 4 4zm-2 0c0-1.103-.896-2-2-2s-2 .897-2 2 .896 2 2 2 2-.897 2-2zm-9 0c0 3.86 3.141 7 7 7s7-3.14 7-7-3.141-7-7-7-7 3.14-7 7zm16 0c0 4.97-4.029 9-9 9s-9-4.03-9-9 4.029-9 9-9 9 4.03 9 9zm-.404 12.501c1.007 1.142-.014 2.679-1.448 2.481-1.795-.245-3.236-1.702-7.147-1.702-3.91 0-5.352 1.458-7.146 1.702-1.436.198-2.456-1.34-1.449-2.481l2.898-3.289c.559.388 1.156.725 1.79.994l-2.025 2.298c1.295-.524 3.065-1.225 5.933-1.225s4.638.7 5.933 1.224l-2.025-2.298c.634-.27 1.231-.606 1.79-.994l2.896 3.29z"
                />
              </svg>
            </div>
            <h4>Foto/Videografi</h4>
            <p>
              Make your dreams come true, and make things easier for clients by
              creating a simple application project
            </p>
          </div>
        </div>
      </div>
    </section>
    <!--end services-->

    <!--portofolio-->
    <section id="portofolios">
      <div class="portofolios main-container">
        <h3 class="pre-tittle">My Works</h3>
        <h1 class="section-tittle">Featured Portofolio</h1>

        <div class="grid-5">
            <!--portofolio 1-->
          <div class="portofolio">
            <div class="portofolio-cover">
            <img src="image/pepskuy.jpeg" alt="aplikasi pepskuy" />
          </div>
          <div class="portofolio-info">
            <div class="portofolio-tittle">
              <h4>PEPSKUY APP</h4>
              <a href="https://www.linkedin.com/posts/zaki-tri-pamungkas-059830255_pmm4unsrat-pertukaranmahasiswamerdeka-kemendikbudri-activity-7160215605977968640-e7zV?utm_source=share&utm_medium=member_desktop" class="portofolio-link">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z"
                  />
                </svg>
              </a>
            </div>
            <div class="portofolio-tags">
              <div>react</div>
              <div>ngrok</div>
            </div>

            <p>
              Growing together with technology! With a spirit of innovation, I
              am currently developing a simple yet meaningful web-based
              application aimed at facilitating the selection of tribal leaders
              in PMM 4 UNSRAT. Through the utilization of NGROK, we are not only
              creating a platform but also laying the groundwork for positive
              change in the participation and democracy of our community.
            </p>
          </div>
        </div>

        <!--portofolio 2-->
        <div class="portofolio">
            <div class="portofolio-cover">
            <img src="image/feed.png" alt="feed instagram" />
          </div>
          <div class="portofolio-info">
            <div class="portofolio-tittle">
              <h4>Design Feed IG</h4>
              <a href="https://www.instagram.com/ifortune.id/" class="portofolio-link">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z"
                  />
                </svg>
              </a>
            </div>
            <div class="portofolio-tags">
              <div>Canva</div>
            </div>

            <p>
              We were determined to create an attractive and attention-grabbing Instagram feed design for our PUBG Mobile eSports team. With a structured approach and organized management, we will create consistent content, showcasing epic match moments, team achievements and behind-the-scenes moments that show our passion and dedication. Through creative design and relevant content, we will build a strong brand image for our team on the Instagram platform, attract new fans and followers, and strengthen our community ties with our loyal fans.
            </p>
          </div>
        </div>
                  <!--portofolio 3-->
                  <div class="portofolio">
                    <div class="portofolio-cover">
                    <img src="image/pdh.png" alt="design PDH" />
                  </div>
                  <div class="portofolio-info">
                    <div class="portofolio-tittle">
                      <h4>Design PDH</h4>
                      <a href="https://drive.google.com/drive/u/2/folders/1MjkNEe1xWRiOXskkiw0OsCgLqaqgEAo1" class="portofolio-link">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                        >
                          <path
                            d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z"
                          />
                        </svg>
                      </a>
                    </div>
                    <div class="portofolio-tags">
                      <div>Corel Draw</div>
                    </div>
        
                    <p>
                      Regarding the 4th student exchange activity at Sam Ratulangi University (UNSRAT), we are committed to creating a program design with a distinctive nuance and strong characteristics. Through this design, we want to display the unique identity of UNSRAT as well as the important values ​​that are the basis of student exchange, such as cultural diversity, cross-border learning experiences, and intercultural collaboration. By using smart and effective design elements, we will communicate the essence and purpose of this activity, as well as inspire active participation from students and other stakeholders.
                    </p>
                  </div>
                </div>
        
                <!--portofolio 4-->
                <div class="portofolio">
                    <div class="portofolio-cover">
                    <img src="image/poster.png" alt="design poster" />
                  </div>
                  <div class="portofolio-info">
                    <div class="portofolio-tittle">
                      <h4>Design Poster</h4>
                      <a href="https://www.tiktok.com/@ifortpzvrz/photo/7340924438415691013?lang=id-ID" class="portofolio-link">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                        >
                          <path
                            d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z"
                          />
                        </svg>
                      </a>
                    </div>
                    <div class="portofolio-tags">
                      <div>Canva</div>
                    </div>
        
                    <p>
                      With the spirit of competition burning, I have designed a poster for the Mobile Legends competition between groups in the Nusantara Module at the PMM 4 UNSRAT event. This poster not only shows enthusiasm for skill in the game, but also reflects the spirit of unity and collaboration between participants from various groups "Through dynamic and attractive designs, we want to inspire maximum participation and create a memorable experience for all participants and Mobile Legends fans at UNSRAT.
                    </p>
                  </div>
                </div>
                          <!--portofolio 5-->
          <div class="portofolio">
            <div class="portofolio-cover">
            <img src="image/ux.png" alt="aplikasi pelukku" />
          </div>
          <div class="portofolio-info">
            <div class="portofolio-tittle">
              <h4>UI/UX Design</h4>
              <a href="https://lnkd.in/gGx2VTqC" class="portofolio-link">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z"
                  />
                </svg>
              </a>
            </div>
            <div class="portofolio-tags">
              <div>Figma</div>
              <div>Canva</div>
            </div>

            <p>
              I am the type of person who is tireless in trying new things. Exploring boundaries and pursuing challenges is an integral part of who I am. One of my exploration journeys shines through in the UI/UX work that I want to share with you.
              A revolutionary app I designed, aimed at encouraging environmental awareness. The points system I implemented was the main attraction. Every positive action, from taking out trash to completing environmental missions, will earn users points that can be collected.
              These points are not just numbers, but the key to various rewards and exclusive merchandise. With an innovative approach, this application not only rewards, but also provides deep satisfaction for users who care about the environment.
              this project we create together thanks my best partner Amalia Mumtazah
            </p>
          </div>
        </div>
      </div>
    </section>
    <!--end portofolio-->

<!--Blog-->
<section id ="blog">
<div class="blog main-container">
  <h3 class="pre-tittle"> My Blog</h3>
  <h1 class="section-tittle">This is About my Opinion</h1>
  <?php if ($result->num_rows > 0): ?>
      <ul>
          <?php while($row = $result->fetch_assoc()): ?>
              <li>
                  <h3><?= htmlspecialchars($row['title']) ?></h3>
                  <p><?= nl2br(htmlspecialchars($row['content'])) ?></p>
                  <p><small>Kategori: <?= htmlspecialchars($row['category']) ?> | Tanggal: <?= $row['created_at'] ?></small></p>
              </li>
          <?php endwhile; ?>
      </ul>
  <?php else: ?>
      <p>Tidak ada artikel yang ditemukan.</p>
  <?php endif; ?>
  <?php $conn->close(); ?>
</div>
</section>
<!--end blog-->

   <!--galeri-->

   <section id="galeri">
    <div class="galeri main-container">
      <h3 class="pre-tittle">All about</h3>
      <h1 class="section-tittle">Moment & Memories</h1>

      <div class="galerii">
        <img src="image/img1.jpeg" alt="image1"> 
        <img src="image/img2.jpg" alt="image2"> 
        <img src="image/img3.jpg" alt="image3"> 
        <img src="image/img4.jpg" alt="image4"> 
        <img src="image/img5.jpeg" alt="image5"> 
        <img src="image/img6.jpeg" alt="image6"> 
        <img src="image/img7.JPG" alt="image7"> 
        <img src="image/img8.jpg" alt="image8"> 
        <img src="image/img9.jpeg" alt="image9"> 
        <img src="image/img10.JPG" alt="image10"> 
      </div>
    </div>
   </section>
   <!--end galeri-->

     <!--skilss-->
     <section id="skills">
        <div class="skills main-container">
            <h3 class="pre-tittle">Learning Path</h3>
            <h1 class="section-tittle">Skills & Education</h1>

            <div class="skills-grid">
                <div class="skills-left">
                    <div class="education">
                        <div class="line">
                            <div></div>
                        </div>
                        <div class="education-info">
                            <img src="image/UMS.png" alt="UMS">
                            <h4 class="education-tittle"> Muhammadiyah Surakarta University</h4>
                            <p> Bachelor Degree - Informatic Engeneering</p>
                            <h4 class="education-years">2022 - NOW</h4>
                        </div>
                        <div class="education-info">
                            <img src="image/MAN.png" alt="MAN">
                            <h4 class="education-tittle"> MAN 1 KARANGANYAR</h4>
                            <p> High School Graduate - Science</p>
                            <h4 class="education-years">2019 - 2022</h4>
                        </div>
                    </div>
                </div>
                <div class="skills-right">
                    <p>
                      For 5+ years, I have been continuously learning in the field of front-end and experimenting with new technologies and frameworks, and here you can see a summary of my skills. Field of front-end and experimenting with new technologies.  </p>
                    <div class="skills-list">
                        <ul>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>JAVA SCRIPT</li>
                            <li>PYTHON</li>
                            <li>BOOTSTRAPS</li>
                            <li>MYSQL</li>
                        </ul>

                        <ul>
                            <li>CANVA</li>
                            <li>COREL DRAAW</li>
                            <li>FIGMA</li>
                            <li>AUDACITY</li>
                            <li>PREMIER PRO</li>
                            <li>CAPCUT</li>
                            <li>BLENDER</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
     </section>
      <!--end skilss-->

      <!--contact-->
      <section id="contact">
        <div class="contact main-container">
            <div class="contact-left">
                <form class="contact-form" action="https://formspree.io/f/mqkrnvbl" method="post">
                    <div>
                        <input type="text" placeholder="Name" name="name">
                    </div>
                    <div>
                        <input type="email" placeholder="Email" name="email">
                    </div>
                    <div>
                        <textarea name="message" id="message" placeholder="Message" cols="30" rows="10"></textarea>
                    </div>
                    <div>
                        <button class="btn-submit">Send Message</button>
                    </div>
                </form>
            </div>
            <div class="contact-right">
                <!--addres-->
                <div class="contact-item">
                    <div class="contact-item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 19c4.5-3.893 8-6.872 8-11.23 0-4.291-3.582-7.77-8-7.77s-8 3.479-8 7.77c0 4.358 3.5 7.337 8 11.23zm-5.761-10h2.761v-2h-2.786c.393-2.446 2.324-4.379 4.786-4.799v2.799h2v-2.799c2.462.42 4.393 2.353 4.786 4.799h-2.786v2h2.761c-.452 2.368-2.354 4.223-4.761 4.632v-2.632h-2v2.632c-2.406-.409-4.309-2.264-4.761-4.632zm13.761 7h-1.801c-.629.673-1.316 1.335-2.041 2h2.605l.5 1h-4.218l-1.146 1h1.025l.858 2h-7.487l.858-2h.947c-.389-.336-.772-.669-1.147-1h-1.995l-1.011-1h1.895c-.725-.664-1.41-1.327-2.039-2h-1.803l-4 8h24l-4-8zm-12.794 6h-3.97l1.764-3.528 1.516 1.528h1.549l-.859 2zm8.808-2h3.75l1 2h-3.892l-.858-2z"/></svg>
                    </div>
                    <div class="contact-item-detail">
                        <h4>Addres</h4>
                        <p>Munggur Kidul, Bejen, Karanganyar, Jawa Tengah</p>
                    </div>
                </div>
                <div class="contact-right">
                    <!--phone-->
                    <div class="contact-item">
                        <div class="contact-item-icon">
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M2.59 1.322l2.844-1.322 4.041 7.889-2.724 1.342c-.538 1.259 2.159 6.289 3.297 6.372.09-.058 2.671-1.328 2.671-1.328l4.11 7.932s-2.764 1.354-2.854 1.396c-.604.276-1.228.402-1.862.397-5.678-.043-12.143-10.564-12.113-17.454.011-2.351.777-4.279 2.59-5.224zm1.93 1.274l-1.023.504c-5.294 2.762 4.177 21.185 9.648 18.686l.972-.474-2.271-4.383-1.026.501c-3.163 1.547-8.262-8.219-5.055-9.938l1.007-.498-2.252-4.398zm8.98 6.404c.828 0 1.5.672 1.5 1.5s-.672 1.5-1.5 1.5-1.5-.672-1.5-1.5.672-1.5 1.5-1.5zm9 0c.828 0 1.5.672 1.5 1.5s-.672 1.5-1.5 1.5-1.5-.672-1.5-1.5.672-1.5 1.5-1.5zm-4.5 0c.828 0 1.5.672 1.5 1.5s-.672 1.5-1.5 1.5-1.5-.672-1.5-1.5.672-1.5 1.5-1.5z"/></svg> </div>
                        <div class="contact-item-detail">
                            <h4>Phone</h4>
                            <p>+6285725265355</p>
                        </div>
                    </div>
                    <div class="contact-right">
                        <!--email-->
                        <div class="contact-item">
                            <div class="contact-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M14.666 8.334v3.666l1.463-2.215-1.463-1.451zm-3.092 4.167c.66-.384 1.242-.864 1.758-1.447v1.369c-.445.393-.926.731-1.449 1.018l-.309-.94zm-3.255 2.041c-.652.083-1.57.125-2.319.125v-.97c.688 0 1.551-.037 2.152-.113l.167.958zm2.789-.725l-.036.015c-.586.246-1.22.437-1.91.573l-.167-.958c.655-.131 1.257-.315 1.809-.556l.304.926zm10.892-13.817l-3 11-4.064-3.62 3.9-4.117-5.229 3.614-3.607-.877 12-6zm-3.015 14.779c0 4.546-5.777 9.221-8.221 9.221h-8.764v-22h11.527l-4 2h-5.527v18h5.938c4.155 0 2.638-6 2.638-6 3.349.921 6.003.403 6.003-3.21.28.65.406 1.318.406 1.989z"/></svg> </div>
                            <div class="contact-item-detail">
                                <h4>Email</h4>
                                <p> zakitripamungkas03@gmail.com </p>
                            </div>
                        </div>
            </div>
        </div>
      </section>
      <!--end contact-->

       <!--footer-->
       <footer>
        <div class="foter-icons">
            <a href="https://www.instagram.com/zaki_tepe/">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm0 7.082c1.602 0 1.792.006 2.425.035 1.627.074 2.385.845 2.46 2.459.028.633.034.822.034 2.424s-.006 1.792-.034 2.424c-.075 1.613-.832 2.386-2.46 2.46-.633.028-.822.035-2.425.035-1.602 0-1.792-.006-2.424-.035-1.63-.075-2.385-.849-2.46-2.46-.028-.632-.035-.822-.035-2.424s.007-1.792.035-2.424c.074-1.615.832-2.386 2.46-2.46.632-.029.822-.034 2.424-.034zm0-1.082c-1.63 0-1.833.007-2.474.037-2.18.1-3.39 1.309-3.49 3.489-.029.641-.036.845-.036 2.474 0 1.63.007 1.834.036 2.474.1 2.179 1.31 3.39 3.49 3.49.641.029.844.036 2.474.036 1.63 0 1.834-.007 2.475-.036 2.176-.1 3.391-1.309 3.489-3.49.029-.64.036-.844.036-2.474 0-1.629-.007-1.833-.036-2.474-.098-2.177-1.309-3.39-3.489-3.489-.641-.03-.845-.037-2.475-.037zm0 2.919c-1.701 0-3.081 1.379-3.081 3.081s1.38 3.081 3.081 3.081 3.081-1.379 3.081-3.081c0-1.701-1.38-3.081-3.081-3.081zm0 5.081c-1.105 0-2-.895-2-2 0-1.104.895-2 2-2 1.104 0 2.001.895 2.001 2s-.897 2-2.001 2zm3.202-5.922c-.397 0-.72.322-.72.72 0 .397.322.72.72.72.398 0 .721-.322.721-.72 0-.398-.322-.72-.721-.72z"/></svg>
            </a>
            <a href="https://www.linkedin.com/in/zaki-tri-pamungkas-059830255/"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 8c0 .557-.447 1.008-1 1.008s-1-.45-1-1.008c0-.557.447-1.008 1-1.008s1 .452 1 1.008zm0 2h-2v6h2v-6zm3 0h-2v6h2v-2.861c0-1.722 2.002-1.881 2.002 0v2.861h1.998v-3.359c0-3.284-3.128-3.164-4-1.548v-1.093z"/></svg>   </a>
        </a>
        <a href="https://github.com/ZAKITRIPAMUNGKAS"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm0 6c-3.313 0-6 2.686-6 6 0 2.651 1.719 4.9 4.104 5.693.3.056.396-.13.396-.289v-1.117c-1.669.363-2.017-.707-2.017-.707-.272-.693-.666-.878-.666-.878-.544-.373.041-.365.041-.365.603.042.92.619.92.619.535.917 1.403.652 1.746.499.054-.388.209-.652.381-.802-1.333-.152-2.733-.667-2.733-2.965 0-.655.234-1.19.618-1.61-.062-.153-.268-.764.058-1.59 0 0 .504-.161 1.65.615.479-.133.992-.199 1.502-.202.51.002 1.023.069 1.503.202 1.146-.776 1.648-.615 1.648-.615.327.826.121 1.437.06 1.588.385.42.617.955.617 1.61 0 2.305-1.404 2.812-2.74 2.96.216.186.412.551.412 1.111v1.646c0 .16.096.347.4.288 2.383-.793 4.1-3.041 4.1-5.691 0-3.314-2.687-6-6-6z"/></svg>  </div>
        </a>
        </div>
        <p>&#169; 2024 - Made by TePe</p>
                  </footer>

        <!--end footer-->
      <script src="scripts/main.js"> </script>
  </body>
</html>
