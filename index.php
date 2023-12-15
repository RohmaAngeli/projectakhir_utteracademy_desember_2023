<html>
    <head>
        <title>Angelic</title>
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    </head>
    <body>
        <header>
            <!-- <h1>Judul website</h1>
            <h2>Subjudul atau Deskripsi</h2> -->
            <nav>
                <a href="index.php?page=home"><div><img src="assets/img/logo_name.png" alt="Logo Name" class="logoimg" align="left"></div></a>
                
                <div class="frame">
                <a href="index.php?page=home" <?php //if($active=='home') echo "class='active'"; ?>>Home</a>
                <a href="index.php?page=aboutme" <?php //if($active=='aboutme') echo "class='active'"; ?>>About me</a>
                <a href="index.php?page=blog" <?php //if($active=='blog') echo "class='active'"; ?>>Blog</a>
                <a href="index.php?page=portofolio" <?php //if($active=='portofolio') echo "class='active'"; ?>>Portofolio</a>
                <a href="index.php?page=contact" <?php //if($active=='contact') echo "class='active'"; ?>>Contact</a>
                <!-- <a href="index.php?page=gallery" <?php //if($active=='gallery') echo "class='active'"; ?>>Gallery</a> -->
                </div>

                <div style="width:10%;"></div>

                <!-- <div>
                    <button class="custom-btn btn-6"><span>Login</span></button>
                    <button class="custom-btn btn-6"><span>Register</span></button>
                </div> -->
            </nav>
        </header>
    <section>
        <div>
            <?php
            //pemanggilan halaman dengan switch...case..
            if (isset($_GET['page'])){
                $page = $_GET['page'];
                switch ($page) {
                case 'home':
                    include "page_guest/beranda.php"; 
                    break;
                case 'aboutme':
                    include "page_guest/aboutme.php"; 
                    break;
                case 'blog':
                    include "page_guest/blog.php"; 
                    break;
                case 'portofolio':
                    include "page_guest\portofolio.php";
                    break;
                case 'contact':
                    include "page_guest\contactus.php";
                    break;
                default:
                    echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                    break;
                }
            }
            else{
                include "page_guest/beranda.php";
            }
            ?>
        </div>
    </section>

        <footer class="footer-distributed">

			<div class="footer-left">

				<a href="index.php?page=home"><span><img src="assets/img/logo_name.png" alt="Logo Name" class="logoimg" style=" height: 20%;" align="left"></span></a>

				<p class="footer-links">
                    
					<a href="index.php?page=home" class="link-1">Home</a>
					
					<a href="index.php?page=aboutme">About me</a>
				
					<a href="index.php?page=blog">Blog</a>
				
					<a href="index.php?page=portofolio">Portofolio</a>
					
					<a href="index.php?page=contact">Contact</a>
					
					<!-- <a href="index.php?page=aboutme">Gallery</a> -->
				</p>

				<p class="footer-company-name">By Rohma Angeli © 2023</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="25" fill="white" style="margin-top: 5px"><title>map-marker</title><path d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z" /></svg></i>
					<p><a href="https://maps.app.goo.gl/qqg4PP1cw7Ltb1AeA" target="_blank" rel="noopener noreferrer"><span>Jl. Mergan Kelurahan D1</span> Malang, Jawa Timur, Indonesia</a></p>
				</div>

				<div>
					<i class="fa fa-phone"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"  fill="white" width="25" height="25" style="margin-top:2%;" valign="center"><title>phone</title><path d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z" /></svg></i>
					<p><a href="tel:+62 895 0149 3030">+62 895 0149 3030</a></p>
				</div>

                <div>
					<i class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="25" height="25" valign="center" style="margin-top:2%;"><title>email</title><path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" /></svg></i>
					<p><a href="mailto:rohmaangelin@gmail.com">rohmaangelin@gmail.com<br></a></p>
				</div>


			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>Thank you!</span>
					Hope you enjoy your surfing experience here and find useful information. If you have any questions or would like to collaborate, please feel free to contact me.
				</p>

				<div class="footer-icons" >
                    <a href="https://www.instagram.com/angel_studygram/" target="_blank" rel="noopener noreferrer" onMouseOver="this.style.backgroundColor='#2196f3'" onMouseOut="this.style.backgroundColor='#33383b'"><i class="fa fa-facebook" ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="25" width="25" fill="white" style="margin-top: 5px" ><title>instagram</title><path d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z" /></svg></i></a>

                    <a href="https://www.facebook.com/rohma.angeli?mibextid=ZbWKwL" onMouseOver="this.style.backgroundColor='#2196f3'" target="_blank" rel="noopener noreferrer" onMouseOut="this.style.backgroundColor='#33383b'"><i class="fa fa-facebook" ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="25" width="25" fill="white" style="margin-top: 5px"><title>facebook</title><path d="M12 2.04C6.5 2.04 2 6.53 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96A10 10 0 0 0 22 12.06C22 6.53 17.5 2.04 12 2.04Z" /></svg></i></a>
                    
					<a href="https://twitter.com/angel_studygram?t=ZAdKKzCvRGvolfPaAAsrCA&s=09" target="_blank" rel="noopener noreferrer" onMouseOver="this.style.backgroundColor='#2196f3'" onMouseOut="this.style.backgroundColor='#33383b'"><i class="fa fa-twitter"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="25" width="25" fill="white" style="margin-top: 5px"><title>twitter</title><path d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 3,4.79C2.63,5.42 2.42,6.16 2.42,6.94C2.42,8.43 3.17,9.75 4.33,10.5C3.62,10.5 2.96,10.3 2.38,10C2.38,10 2.38,10 2.38,10.03C2.38,12.11 3.86,13.85 5.82,14.24C5.46,14.34 5.08,14.39 4.69,14.39C4.42,14.39 4.15,14.36 3.89,14.31C4.43,16 6,17.26 7.89,17.29C6.43,18.45 4.58,19.13 2.56,19.13C2.22,19.13 1.88,19.11 1.54,19.07C3.44,20.29 5.7,21 8.12,21C16,21 20.33,14.46 20.33,8.79C20.33,8.6 20.33,8.42 20.32,8.23C21.16,7.63 21.88,6.87 22.46,6Z" /></svg></i></a>

					<a href="https://www.linkedin.com/in/rohma-angeli-1a7039298?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" rel="noopener noreferrer" onMouseOver="this.style.backgroundColor='#2196f3'" onMouseOut="this.style.backgroundColor='#33383b'"><i class="fa fa-linkedin"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="25" width="25" fill="white" style="margin-top: 5px"><title>linkedin</title><path d="M19 3A2 2 0 0 1 21 5V19A2 2 0 0 1 19 21H5A2 2 0 0 1 3 19V5A2 2 0 0 1 5 3H19M18.5 18.5V13.2A3.26 3.26 0 0 0 15.24 9.94C14.39 9.94 13.4 10.46 12.92 11.24V10.13H10.13V18.5H12.92V13.57C12.92 12.8 13.54 12.17 14.31 12.17A1.4 1.4 0 0 1 15.71 13.57V18.5H18.5M6.88 8.56A1.68 1.68 0 0 0 8.56 6.88C8.56 5.95 7.81 5.19 6.88 5.19A1.69 1.69 0 0 0 5.19 6.88C5.19 7.81 5.95 8.56 6.88 8.56M8.27 18.5V10.13H5.5V18.5H8.27Z" /></svg></i></a>

					<a href="https://github.com/RohmaAngeli" onMouseOver="this.style.backgroundColor='#2196f3'" target="_blank" rel="noopener noreferrer" onMouseOut="this.style.backgroundColor='#33383b'"><i class="fa fa-github"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="25" width="25" fill="white" style="margin-top: 5px"><title>github</title><path d="M12,2A10,10 0 0,0 2,12C2,16.42 4.87,20.17 8.84,21.5C9.34,21.58 9.5,21.27 9.5,21C9.5,20.77 9.5,20.14 9.5,19.31C6.73,19.91 6.14,17.97 6.14,17.97C5.68,16.81 5.03,16.5 5.03,16.5C4.12,15.88 5.1,15.9 5.1,15.9C6.1,15.97 6.63,16.93 6.63,16.93C7.5,18.45 8.97,18 9.54,17.76C9.63,17.11 9.89,16.67 10.17,16.42C7.95,16.17 5.62,15.31 5.62,11.5C5.62,10.39 6,9.5 6.65,8.79C6.55,8.54 6.2,7.5 6.75,6.15C6.75,6.15 7.59,5.88 9.5,7.17C10.29,6.95 11.15,6.84 12,6.84C12.85,6.84 13.71,6.95 14.5,7.17C16.41,5.88 17.25,6.15 17.25,6.15C17.8,7.5 17.45,8.54 17.35,8.79C18,9.5 18.38,10.39 18.38,11.5C18.38,15.32 16.04,16.16 13.81,16.41C14.17,16.72 14.5,17.33 14.5,18.26C14.5,19.6 14.5,20.68 14.5,21C14.5,21.27 14.66,21.59 15.17,21.5C19.14,20.16 22,16.42 22,12A10,10 0 0,0 12,2Z" /></svg></i></a>

				</div>

			</div>

		</footer>

        <script>   
            AOS.init(); 
       </script>
    </body>
</html>