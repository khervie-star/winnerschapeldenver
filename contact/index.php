<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Winners Chapel International Denver</title>

      <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Navbar -->
    <?php include "../reusables/nav.php" ?>

    <!-- Body -->
    <div class="header w-screen">
        <div class="h-[50vh] bg-[url('../../winners/asset/field.jpg')] bg-cover relative">
              <div class="absolute top-0 mt-0 right-0 bottom-0 left-0 bg-[rgba(0,0,0,0.4)]"></div>
              <div class="w-full text-center relative">
                <h2 class="text-white font-bold text-[48px]">Contact</h2>
              </div>
        </div>
        <div class="w-full flex justify-center gap-4">
<div></div>
<div class="form">
          <div
        class="max-w-screen-xl mt-24 px-8 grid gap-8 grid-cols-1 md:grid-cols-2 md:px-12 lg:px-16 xl:px-32 py-16 mx-auto bg-gray-100 text-gray-900 rounded-lg shadow-lg">
        <div class="flex flex-col justify-between">
          <div>
            <h2 class="text-4xl lg:text-5xl font-bold leading-tight">Lets talk about everything!</h2>
            <div class="text-gray-700 mt-8">
             
            </div>
          </div>
          <div class="mt-8 text-center">
           
          </div>
        </div>
        <div class="">
          <div>
            <span class="uppercase text-sm text-gray-600 font-bold">Full Name</span>
            <input class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
              type="text" placeholder="">
          </div>
          <div class="mt-8">
            <span class="uppercase text-sm text-gray-600 font-bold">Email</span>
            <input class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
              type="text">
          </div>
          <div class="mt-8">
            <span class="uppercase text-sm text-gray-600 font-bold">Message</span>
            <textarea
              class="w-full h-32 bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
          </div>
          <div class="mt-8">
            <button
              class="uppercase text-sm font-bold tracking-wide bg-indigo-500 text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline">
              Send Message
            </button>
          </div>
        </div>
      </div>
</div>
        </div>
    </div>

 <!-- Foooter -->
    <?php include "../reusables/footer.php"; ?>


</body>
</html>