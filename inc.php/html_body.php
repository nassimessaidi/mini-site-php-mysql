<?php  

function footer(){
echo '
<footer>
        <div class="footer-content">
          <div class="main-footer">
            <div id="contact">
              <h4>Contact us</h4>

              <div class="contact-section">
                <p>Email &nbsp;&nbsp;:</p>
                <a href="mailto:contact@TravelInfo.com"
                  >Contact@TravelInfo.com</a
                >
              </div>
              <div class="contact-section">
                <p>Phone &nbsp;:</p>
                <a href="tel:+212600000000">+212 6 15 41 23 65</a>
              </div>
              <div class="contact-section">
                <p>Fax &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
                <a href="tel:+212600000000">+212 5 18 00 10 20</a>
              </div>
            </div>

            <div class="seperator"></div>

            <div id="about">
              <h4>About Us</h4>
              <div class="about-img-frame">
                <img src="images/icon/logo.jpg" alt="" />
              </div>
              <p>
                Travel info is a website that gives you a lot of information
                about any place you want the visit with a lot of details and
                flight tickets and reservation of hotels also.
              </p>
            </div>
          </div>
        </div>
        <div class="footer-bar">
          All rights reserved to Travel info &copy;2020
        </div>
      </footer>
';
}

function sub_footer(){
echo '
<footer>
        <div class="footer-content">
          <div class="main-footer">
            <div id="contact">
              <h4>Contact us</h4>

              <div class="contact-section">
                <p>Email &nbsp;&nbsp;:</p>
                <a href="mailto:contact@TravelInfo.com"
                  >Contact@TravelInfo.com</a
                >
              </div>
              <div class="contact-section">
                <p>Phone &nbsp;:</p>
                <a href="tel:+212600000000">+212 6 15 41 23 65</a>
              </div>
              <div class="contact-section">
                <p>Fax &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</p>
                <a href="tel:+212600000000">+212 5 18 00 10 20</a>
              </div>
            </div>

            <div class="seperator"></div>

            <div id="about">
              <h4>About Us</h4>
              <div class="about-img-frame">
                <img src="../images/icon/logo.jpg" alt="" />
              </div>
              <p>
                Travel info is a website that gives you a lot of information
                about any place you want the visit with a lot of details and
                flight tickets and reservation of hotels also.
              </p>
            </div>
          </div>
        </div>
        <div class="footer-bar">
          All rights reserved to Travel info &copy;2020
        </div>
      </footer>
';
}


function headers(){
  echo '
  <style>.fa, .far, .fas {
    font-family: "Font Awesome 5 Free";
    font-size: 30px;
}</style>
  ';
echo '
<header>
          <div class="logo">
            <a href="Index.php"
              ><img src="images/icon/logo.jpg" alt="logo"
            /></a>
          </div>
          <nav>
            <div class="burger">
              <div class="line1"></div>
              <div class="line2"></div>
              <div class="line3"></div>
            </div>
            <ul class="nav-bar">
              <li><a href="Index.php">home</a></li>
              <li><a href="php/Marrakech.php">Marrakech</a></li>
              <li><a href="php/Chefchaouen.php">Chefchaouen</a></li>
              <li><a href="php/Asilah.php">Asilah</a></li>
              <li><a href="php/login.php">
              <i class="fa fa-user-circle" aria-hidden="true" title="Login to you Account"></i>
              </a></li>
            </ul>
          </nav>
</header>
';  
}

function sub_headers(){
   echo '
  <style>.fa, .far, .fas {
    font-family: "Font Awesome 5 Free";
    font-size: 30px;
}</style>
  ';
echo '
<header>
          <div class="logo">
            <a href="../Index.php"
              ><img src="../images/icon/logo.jpg" alt="logo"
            /></a>
          </div>
          <nav>
            <div class="burger">
              <div class="line1"></div>
              <div class="line2"></div>
              <div class="line3"></div>
            </div>
            <ul class="nav-bar">
              <li><a href="../Index.php">home</a></li>
              <li><a href="../php/Marrakech.php">Marrakech</a></li>
              <li><a href="../php/Chefchaouen.php">Chefchaouen</a></li>
              <li><a href="../php/Asilah.php">Asilah</a></li>
              <li><a href="login.php">
              <i class="fa fa-user-circle" aria-hidden="true" title="Login to you Account"></i>
              </a></li>
            </ul>
          </nav>
</header>
';    
}


