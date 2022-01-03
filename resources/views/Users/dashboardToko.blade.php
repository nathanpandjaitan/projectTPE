<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>StarComp |  {{ $title }} </title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="/css/pure.css" rel="stylesheet">
  
</head>

<body>

 <!-- Navbar -->
    <nav class="relads font-viga z-10 ">
        <div class="w-4/5 bg-50 min-h-full flex items-center justify-between ">
          <a href="/">StarComp</a>  
            <div class="w-1/5 flex justify-between ">
                <a href="">Cart</a>
                <a href="">User</a>
                <a href="/loginUser">Logout</a>
            </div>
        </div>
    </nav>
    <div class="norepeat flex items-center justify-center text-white">
        <h1 class=> Think Different</h1>
    </div>
     <!-- Akhir Navbar --> 


     <!-- Products -->


    <section class="text-gray-600 body-font flex items-center justify-center flex-col">
      <h1 class="pt-5 text-3xl text-black">Products</h1>
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
      @foreach ($produks as $key => $produk)
      <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ url('img') }}/{{ $produk->gambar }}">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{ $produk->kategori }}</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">{{ $produk->keterangan }}</h2>

          <p class="mt-1">{{ $produk->harga }}</p>
          <div class="tombol ">
            <a href="{{ route('detail.produk', $produk->id) }}" class="py-1 px-2 rounded-xl mt-2 warna">Buy</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
 <!-- Akhir Products-->


    <!-- Footer -->
<footer class="text-gray-400 bg-black body-font">
  <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
    <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-purple-500 rounded-full" viewBox="0 0 24 24">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span class="ml-3 text-xl">StarComp</span>
    </a>
    <p class="text-sm text-gray-400 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-800 sm:py-2 sm:mt-0 mt-4">© 2021 Starcomp —
      <a href="https://twitter.com/nathanpdjtn" class="text-gray-500 ml-1" target="_blank" rel="noopener noreferrer">@nathanpdjtn</a>
    </p>
    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
      
      <a class="ml-3 text-gray-400">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-400">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
        </svg>
      </a>
    </span>
  </div>
</footer>
 <!-- Akhir Footer -->
    </body>

</html>