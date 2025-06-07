<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title', 'Aplikasi Hadirin')</title>
  <link rel="icon" href="{{ asset('images/ic_logo.png') }}" type="image/x-icon">
  @vite('resources/css/app.css')
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-purple-50 text-purple-900">
  <section id="home" class="relative overflow-hidden bg-purple-600 text-purple-100 py-8">
    <!-- Brand -->
    <div class="flex justify-between items-center px-4">
      <div class="font-bold text-xl tracking-wider flex items-center">
        <img src="{{ asset('images/ic_logo.png') }}" alt="Logo Internal" class="mr-2 h-6 w-auto"> Attendance
      </div>
      <!-- Icons -->
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
              Dashboard Page Hadirin
            </h1>
            <p class="mx-auto mb-6 max-w-[600px] text-white text-base sm:text-lg">
              Selamat datang! Pilih menu di bawah untuk mengakses halaman.
            </p>

            <ul class="mb-8 flex flex-wrap items-center justify-center gap-3 md:gap-4 lg:gap-5">
              @if(isset($category) && $category === 'tools')
                <li>
                  <a href="{{ route('kegiatans.index') }}" class="inline-flex items-center justify-center rounded-md bg-white text-purple-600 px-4 py-2 text-sm font-medium shadow-lg hover:bg-purple-700 hover:text-white transform hover:scale-105 transition duration-300 ease-in-out md:px-5 md:py-3 md:text-base">
                    Kegiatan
                  </a>
                </li>
                <li>
                  <a href="{{ route('kehadirans.index') }}" class="inline-flex items-center justify-center rounded-md bg-white text-purple-600 px-4 py-2 text-sm font-medium shadow-lg hover:bg-purple-700 hover:text-white transform hover:scale-105 transition duration-300 ease-in-out md:px-5 md:py-3 md:text-base">
                    Kehadiran
                  </a>
                </li>
                <li>
                  <a href="{{ route('kehadirans.scanQrForm') }}" class="inline-flex items-center justify-center rounded-md bg-white text-purple-600 px-4 py-2 text-sm font-medium shadow-lg hover:bg-purple-700 hover:text-white transform hover:scale-105 transition duration-300 ease-in-out md:px-5 md:py-3 md:text-base">
                    Scan QR Hadir
                  </a>
                </li>
                <li>
                  <a href="{{ route('anggotas.index') }}" class="inline-flex items-center justify-center rounded-md bg-white text-purple-600 px-4 py-2 text-sm font-medium shadow-lg hover:bg-purple-700 hover:text-white transform hover:scale-105 transition duration-300 ease-in-out md:px-5 md:py-3 md:text-base">
                    Anggota
                  </a>
                </li>
              @elseif(isset($category) && $category === 'prints')
                <li>
                  <a href="{{ route('prints.daily.form') }}" class="inline-flex items-center justify-center rounded-md bg-white text-purple-600 px-4 py-2 text-sm font-medium shadow-lg hover:bg-purple-700 hover:text-white transform hover:scale-105 transition duration-300 ease-in-out md:px-5 md:py-3 md:text-base">
                    Daily
                  </a>
                </li>
                <li>
                  <a href="{{ route('prints.monthly.form') }}" class="inline-flex items-center justify-center rounded-md bg-white text-purple-600 px-4 py-2 text-sm font-medium shadow-lg hover:bg-purple-700 hover:text-white transform hover:scale-105 transition duration-300 ease-in-out md:px-5 md:py-3 md:text-base">
                    Monthly
                  </a>
                </li>
                <li>
                  <a href="{{ route('prints.annual.form') }}" class="inline-flex items-center justify-center rounded-md bg-white text-purple-600 px-4 py-2 text-sm font-medium shadow-lg hover:bg-purple-700 hover:text-white transform hover:scale-105 transition duration-300 ease-in-out md:px-5 md:py-3 md:text-base">
                    Yearly
                  </a>
                </li>
              @else
                <li>
                  <a href="{{ route('kegiatans.index') }}" class="inline-flex items-center justify-center rounded-md bg-white text-purple-600 px-4 py-2 text-sm font-medium shadow-lg hover:bg-purple-700 hover:text-white transform hover:scale-105 transition duration-300 ease-in-out md:px-5 md:py-3 md:text-base">
                    Kegiatan
                  </a>
                </li>
                <li>
                  <a href="{{ route('kehadirans.index') }}" class="inline-flex items-center justify-center rounded-md bg-white text-purple-600 px-4 py-2 text-sm font-medium shadow-lg hover:bg-purple-700 hover:text-white transform hover:scale-105 transition duration-300 ease-in-out md:px-5 md:py-3 md:text-base">
                    Kehadiran
                  </a>
                </li>
                <li>
                  <a href="{{ route('kehadirans.scanQrForm') }}" class="inline-flex items-center justify-center rounded-md bg-white text-purple-600 px-4 py-2 text-sm font-medium shadow-lg hover:bg-purple-700 hover:text-white transform hover:scale-105 transition duration-300 ease-in-out md:px-5 md:py-3 md:text-base">
                    Scan QR Hadir
                  </a>
                </li>
                <li>
                  <a href="{{ route('anggotas.index') }}" class="inline-flex items-center justify-center rounded-md bg-white text-purple-600 px-4 py-2 text-sm font-medium shadow-lg hover:bg-purple-700 hover:text-white transform hover:scale-105 transition duration-300 ease-in-out md:px-5 md:py-3 md:text-base">
                    Anggota
                  </a>
                </li>
              @endif
            </ul>
            <div class="mt-4">
              <a href="{{ route('landing') }}" class="inline-flex items-center justify-center rounded-md bg-gray-300 text-gray-800 px-4 py-2 text-sm font-medium shadow-md hover:bg-gray-400 md:px-5 md:py-2 md:text-base">
                Kembali ke Home Page
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="container mx-auto px-4 py-6 md:py-8">
    @yield('content')
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  @stack('scripts')
</body>
</html>