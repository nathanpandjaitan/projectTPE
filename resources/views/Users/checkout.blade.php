<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>StarComp | {{ $title }} </title>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
  <link href="/css/pure.css" rel="stylesheet">

  <!-- BootStrap -->


</head>

<body>

   <!-- Navbar -->
    <nav class="relads font-viga z-10 ">
        <div class="w-4/5 bg-50 min-h-full flex items-center justify-between ">
            <a href="/">StarComp</a>
            <div class="w-1/5 flex justify-between mt-3 ">
              <?php
                $pesanan_utama = \App\Models\Pesanan::where('user_id', auth()->user()->id)->where('status',0)->first();
                if(!empty($pesanan_utama))
                {
                    $notif = \App\Models\PesananDetail::where('pesanan_id', $pesanan_utama->id)->count();
                }
                
              ?>
                @auth
                <a href="/checkout" role="button" class="relative flex">
                    <svg class="flex-1 w-7 h-7 fill-current" viewbox="0 0 24 24">
                        <path
                            d="M17,18C15.89,18 15,18.89 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20C19,18.89 18.1,18 17,18M1,2V4H3L6.6,11.59L5.24,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42A0.25,0.25 0 0,1 7.17,14.75C7.17,14.7 7.18,14.66 7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.58 17.3,11.97L20.88,5.5C20.95,5.34 21,5.17 21,5A1,1 0 0,0 20,4H5.21L4.27,2M7,18C5.89,18 5,18.89 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20C9,18.89 8.1,18 7,18Z" />
                    </svg>
                    @if(!empty($notif))
                    <span
                        class="absolute right-0 top-0 rounded-full bg-red-600 w-4 h-4 top right p-0 m-0 text-white font-mono text-xs  leading-tight text-center">{{ $notif }}
                    </span>
                    @endif
                </a>
                
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

  <div class="bg-gray-50 min-h-screen">
      <nav>
          <div class="flex justify-between items-center p-4 bg-white">
              <div class="flex items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden" viewBox="0 0 20 20"
                      fill="currentColor">
                      <path
                          d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 cursor-pointer" fill="none"
                      viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h8m-8 6h16" />
                  </svg>
              </div>
              <div class="flex items-center space-x-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 cursor-pointer" fill="none"
                      viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                  </svg>
                  <div class="w-10">
                      <img class="rounded-full"
                          src="https://forbesthailand.com/wp-content/uploads/2021/08/https-specials-images.forbesimg.com-imageserve-5f47d4de7637290765bce495-0x0.jpgbackground000000cropX11699cropX23845cropY1559cropY22704.jpg"
                          alt="" />
                  </div>
              </div>
          </div>
      </nav>
      <div>
          <div class="p-4">
              <div class="bg-white p-4 rounded-md">
                  <div>
                      <h2 class="mb-4 text-xl font-bold text-gray-700">Checkout</h2>
                      @if(!empty($pesanan))
                      <p class="flex justify-end mb-2">Tanggal Pesan : {{ $pesanan->tanggal  }}</p>
                      <div>
                          <div>
                              <div
                                  class="flex justify-between bg-black rounded-md py-2 px-4 text-white font-bold text-md">
                                  <div>
                                      <span>No</span>
                                  </div>
                                  <div>
                                      <span>Nama Barang</span>
                                  </div>
                                  <div>
                                      <span>Jumlah</span>
                                  </div>
                                  <div>
                                      <span>Harga</span>
                                  </div>
                                  <div>
                                      <span>Total Harga</span>
                                  </div>
                                  <div>
                                      <span>Action</span>
                                  </div>
                              </div>
                              @foreach ($pesanan_details as $key => $pesanan_detail)
                              <div class="place-items-center">
                                  <div class="flex justify-between border-t text-sm font-normal mt-4 space-x-4">
                                    
                                      <div class="px-2 flex">
                                         
                                          <span>{{ $key+1 }}</span>
                                      </div>
                                      <div>
                                          <span> {{ $pesanan_detail->produk->keterangan }}</span>
                                      </div>
                                      <div class="px-2">
                                          <span>{{ $pesanan_detail->jumlah }}</span>
                                      </div>
                                      <div class="px-2">
                                          <span>Rp. {{number_format($pesanan_detail->produk->harga) }}</span>
                                      </div>
                                      <div class="px-2">
                                           <span>Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</span>
                                      </div>
                                      <div class="px-2 ">
                                          <span>
                                            <form action="{{ url('checkout') }}/{{ $pesanan_detail->id }}" method="post">
                                              @csrf
                                              {{ method_field('DELETE') }}
                                              <button type="submit" class="mr-4 bg-red-500 rounded-2xl "><i class="fa fa-trash  w-5 h-5" ></i></button>
                                            </form>
                                          </span> 
                                        </div>
                                  </div>
                              </div>
                              @endforeach
                          </div>
                      </div>
                  </div>
                  <div class="flex justify-between pl-12 pr-56 mt-3 bg-gray-400">
                <span  class="px-2 ">Total Harga :</span>
                <span class="px-2 ">Rp. {{ number_format($pesanan->jumlah_harga) }}</span>
                </div>
                <div class="mt-3 flex justify-end pr-20">
                <a href="{{ url('konfirmasi-checkout') }}" class="py-1 px-2 rounded-xl mt-4 bg-green-500"> <i class="fa fa-shopping-cart"></i> Check Out</a>
                </div>
              </div>
              
          </div>
      </div>
      @endif
  </div>


  <!-- Footer -->
  <footer class="text-gray-400 bg-black body-font fixed bottom-0 w-full">
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

  @include('sweetalert::alert')

  <script src="https://use.fontawesome.com/06eab83285.js"></script>

</body>

</html>
