<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Hadirin | Landing Page</title>
  <link rel="icon" href="{{ asset('images/ic_logo.png') }}" type="image/x-icon">
  @vite('resources/css/app.css')
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-purple-50 text-purple-900">
  <main class="main relative">
    <section id="home" class="relative bg-purple-600 overflow-hidden text-purple-100 py-8">
      <div class="flex justify-between items-center px-4">
      <div class="font-bold text-xl tracking-wider flex items-center">
        <img src="{{ asset('images/ic_logo.png') }}" alt="Logo Internal" class="mr-2 h-6 w-auto"> Attendance
      </div>
        <div class="inline-flex space-x-3">
          <div class="w-8 h-8 bg-purple-400 bg-opacity-70 rounded-full flex items-center justify-center">
            <i class="text-white text-sm"></i>
          </div>
          <div class="w-8 h-8 bg-purple-500 bg-opacity-70 rounded-full flex items-center justify-center">
            <i class="text-white text-sm"></i>
          </div>
        </div>
      </div>

      <div class="container mx-auto px-4">
        <div class="-mx-5 flex flex-wrap items-center">
          <div class="w-full px-5">
            <div class="mx-auto max-w-[780px] text-center">
              <h1 class="mt-8 mb-4 text-3xl font-bold leading-snug text-white sm:text-4xl lg:text-5xl">
                Welcome to Home Page
              </h1>
              <p class="mx-auto mb-6 max-w-[600px] text-white text-base sm:text-lg">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus qui impedit veniam, nesciunt ex sit illo?
              </p>
              <ul class="mb-10 flex flex-wrap items-center justify-center gap-3 md:gap-4 lg:gap-5">
                <li>
                  <a href="{{ route('anggotas.index') }}" class="inline-flex items-center justify-center rounded-md bg-white text-purple-600 px-4 py-2 text-sm font-medium shadow-lg hover:bg-purple-700 hover:text-white transform hover:scale-105 transition duration-300 ease-in-out md:px-5 md:py-3 md:text-base">
                    Tools
                  </a>
                </li>
                <li>
                  <a href="{{ route('prints.daily.form') }}" class="inline-flex items-center justify-center rounded-md bg-white text-purple-600 px-4 py-2 text-sm font-medium shadow-lg hover:bg-purple-700 hover:text-white transform hover:scale-105 transition duration-300 ease-in-out md:px-5 md:py-3 md:text-base">
                    Prints
                  </a>
                </li>
                <li>
                  <a href="#info" class="inline-flex items-center justify-center rounded-md bg-white text-purple-600 px-4 py-2 text-sm font-medium shadow-lg hover:bg-purple-700 hover:text-white transform hover:scale-105 transition duration-300 ease-in-out md:px-5 md:py-3 md:text-base">
                    Info
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="info" class="py-12 bg-purple-100 text-purple-900">
      <div class="container">
        <div class="text-center max-w-[550px] mx-auto">
          <h6 class="mb-1 block text-base font-semibold text-purple-700 sm:text-lg">
            About
          </h6>
          <h2 class="mb-4 text-2xl font-bold sm:text-3xl">About Hadirin</h2>
          <p class="text-sm sm:text-base">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum dolores autem quidem odit beatae perspiciatis! Rem.
          </p>
          <div class="flex justify-center items-center mt-4 py-3 rounded-md sm:mt-6 sm:py-4">
            <a href="{{ route('dashboard') }}" class="font-semibold px-4 py-2 rounded-md bg-purple-600 text-white text-sm hover:text-gray-900 focus:bg-purple-700 focus:text-white active:bg-purple-800 active:text-white sm:px-5 sm:py-2 md:text-base" role="button">
              Get Started
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="text-black">
    <div class="w-full border-purple-700"></div>
    <div class="container py-6 mx-auto px-4">
      <div class="flex flex-wrap flex-col md:flex-row justify-between items-center">
        <div class="w-full md:w-1/2 order-2 md:order-1">
          <div class="my-1">
            <div class="flex flex-wrap justify-center gap-x-2 md:justify-start text-xs sm:text-sm">
              <a href="#" class="hover:text-purple-300">Privacy Policy</a>
              <a href="#" class="hover:text-purple-300">Legal Notice</a>
              <a href="#" class="hover:text-purple-300">Terms of Service</a>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/2 order-1 md:order-2 mb-2 md:mb-0">
          <div class="my-1 flex justify-center md:justify-end">
            <p class="text-xs sm:text-sm">
              &#169; 2025 Petra Antonio. All rights reserved
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>