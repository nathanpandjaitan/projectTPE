<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>StarComp | {{ $title }} </title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="/css/pure.css" rel="stylesheet">

</head>

<body>

    <!-- Navbar -->
    <nav class="relads font-viga z-10 ">
        <div class="w-4/5 bg-50 min-h-full flex items-center justify-between ">
            <a href="/">StarComp</a>
            <div class="w-1/5 flex justify-between mt-4">
                @auth
                <a href="">Cart</a>
                <div>
                    <svg class="w-5 h-5 inline-block" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <a href=""> Hi, <span class="text-red-500">{{ auth()->user()->name }}</span>!</a>
                </div>
                <form action="/logoutUser" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                </form>
                @else
                <a href="/">Dashboard</a>
                <a href="/loginUser">Login</a>
                @endauth
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->


    <!-- Detail Produk -->
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded"
                    src="{{ url('img') }}/{{ $produk->gambar }}">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest">{{  $produk->nama_brg }}</h2>
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{  $produk->keterangan }}</h1>
                    <p class="leading-relaxed">Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha
                        taximy chia microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage
                        brooklyn. Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle
                        pour-over, neutra jean shorts keytar banjo tattooed umami cardigan.</p>



                    <p class="leading-relaxed text-black mt-3 uppercase">{{  $produk->kategori }}</p>
                    <p class="text-black "> Stok : {{ $produk->stok }}</p>

                    <div class="flex mt-5">
                        <span class="title-font font-medium text-2xl text-gray-900">Price : Rp.{{  $produk->harga }}</span>
                    </div>

                    <div class="">
                    <form action="{{ url('pesan') }}/{{ $produk->id }}" method="post">
                      @csrf 
                      <input type="number" name="jumlah_pesan" id="jumlah_pesan" class="form-control"  style="border: 1px solid gray" >
                      <button type="submit"
                            class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Button</button>
                    </form>
                    </div>
                    <div class="tomboll">
                        <a href="/" class="py-1 px-2 rounded-xl mt-4 warna">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Akhir Detail Produk -->






    <!-- Footer -->
    <footer class="text-gray-400 bg-black body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-purple-500 rounded-full"
                    viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <span class="ml-3 text-xl">StarComp</span>
            </a>
            <p class="text-sm text-gray-400 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-800 sm:py-2 sm:mt-0 mt-4">©
                2021 Starcomp —
                <a href="https://twitter.com/nathanpdjtn" class="text-gray-500 ml-1" target="_blank"
                    rel="noopener noreferrer">@nathanpdjtn</a>
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">

                <a class="ml-3 text-gray-400">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        <path
                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                        </path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-400">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
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
