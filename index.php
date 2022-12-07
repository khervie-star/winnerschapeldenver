<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

      
        <link rel="stylesheet" type="text/css" href="/vendor/carousel/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="/vendor/carousel/css/style3.css" />
		<script type="text/javascript" src="/vendor/carousel/js/modernizr.custom.86080.js"></script>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link href="/css/styles.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              clifford: "#da373d",
            },
          },
        },
      };
    </script>
    <style type="text/tailwindcss">
      @layer utilities {
        .content-auto {
          content-visibility: auto;
        }
      }
      /* Tailwind CSS */
@tailwind base;
@tailwind components;

@layer components {
  .transition-bg {
    transition: background-color 0.5s;
  }
}

@layer utilities {
  .bg-transparent {
    background-color: transparent;
  }
  
  .scrolled {
    background-color: #333;
  }
}
html,
body,
* {
  font-family: "Montserrat", sans-serif !important;
}


nav ul li {
  display: inline-block;
}
nav ul li a {
  display: block;
  padding: 15px;
  text-decoration: none;
  color: #aaa;
  font-weight: 800;
  text-transform: uppercase;
  margin: 0 10px;
}
nav ul li a,
nav ul li a:after,
nav ul li a:before {
  transition: all .5s;
}
nav ul li a:hover {
  color: #555;
}


/* stroke */
nav.stroke ul li a,
nav.fill ul li a {
  position: relative;
}
nav.stroke ul li a:after,
nav.fill ul li a:after {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  width: 0%;
  content: '.';
  color: transparent;
  background: #aaa;
  height: 1px;
}
nav.stroke ul li a:hover:after {
  width: 100%;
}
    </style>
    <title>Index</title>
  </head>
  <body>
    <!-- Navbar block -->
    <?php include './reusables/homepageNavbar.php' ?>

    <!-- Main content of Website -->
    <div class="w-screen h-screen relative">
       <?php include './reusables/background-carousel.php' ?>
    </div>
    <div class="cta relative z-[9999]">
        <div
    data-aos="fade-up"
    data-aos-offset="200"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
        class="text-[50px] text-red-500" 

  >Welcome to </div>
      <div>Winners Chapel International Melbourne</div> 
    </div>

  

    <!-- Footer block -->
       <?php include './reusables/footer.php' ?>
    
    <script src="./js/main.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
      integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
      crossorigin="anonymous"
    ></script>

     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  </body>
</html>
