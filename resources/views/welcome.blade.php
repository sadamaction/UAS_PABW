<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <style type="text/tailwindcss">
        @layer utilities { .container { @apply max-w-[90%] mx-auto; } .btn { @apply bg-[#0C3E63] text-white px-5 py-3 text-center; } .btn.rounded { @apply rounded-full; } .home::before { /* content: url("./assets/scratch.svg"); position: absolute; bottom: -18px;
        */ } .active { @apply block; } }
    </style>
    <title>Coding Learned</title>
    <style>
        .mobile-nav {
          position: fixed;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
          z-index: 1;
          display: none;
          transition: all 0.3s ease-in-out;
        }
        .mobile-nav.hidden {
          display: none;
        }
        .mobile-nav:not(.hidden) {
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
        }
      </style>
</head>

<body>
    <header class="fixed inset-x-0 z-50 w-full ">
        <nav class="container flex items-center justify-between py-5 mx-auto text-white bg-[#5C50E3]">
          <a href="">
            <img src="Group 1 (1).png" alt="">
          </a>
      
          <div class="block md:hidden">
            <button class="btn-menu focus:outline-none focus:shadow-outline" @click="showMobileNav = !showMobileNav">
              <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                <path d="M2 6h20v3H2zm0 5h20v3H2zm0 5h20v3H2z"></path>
              </svg>
            </button>
          </div>
      
          <div class="hidden ml-12 space-x-4 md:flex">
            <a href="">Home</a>
            <a href="">Study Program</a>
            <a href="">Our Teacher</a>
            <a href="">Organitation</a>
            <a href="">Info</a>
            <a href="">News</a>
            <a href="">About</a>
            <a href="">Contact</a>
          </div>
      
          <div class="hidden md:block">
            @if (Route::has('login'))
            <div class="flex items-center space-x-5">
              @auth
              <a href="{{ url('/dashboard') }}" class="rounded btn">Dashboard</a>
              @else
              <a href="{{ url('/login') }}" class="rounded btn">Login</a>
              @if (Route::has('register'))
              <a href="{{ url('/register') }}" class="rounded btn">Register</a>
              @endif
              @endauth
            </div>
            @endif
          </div>
        </nav>
      </header>
      <!-- Add mobile navigation -->
      <div class="p-5 bg-white rounded-lg shadow-md mobile-nav" v-if="showMobileNav">
        <div class="flex items-center justify-between">
          <h3 class="text-lg font-medium">Menu</h3>
          <button class="btn-close focus:outline-none focus:shadow-outline" @click="showMobileNav = false">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
              <path d="M18.3 5.71a.996.996 0 0 0-1.41 0L12 10.59 7.11 5.7A.996.996 0 1 0 5.7 7.11L10.59 12 5.7 16.89a.996.996 0 1 0 1.41 1.41L12 13.41l4.89 4.89a.996.996 0 1 0 1.41-1.41L13.41 12l4.89-4.89c.38-.38.38-1.02 0-1.4z"/>
            </svg>
          </button>
        </div>
        <div class="mt-5">
          <a href="">Home</a>
          <a href="">Study Program</a>
          <a href="">Our Teacher</a>
          <a href="">Organitation</a>
          <a href="">Info</a>
          <a href="">News</a>
          <a href="">About</a>
          <a href="">Contact</a>
        </div>
        </div>
      
    <section id="Welcome" class="py-10 sm:py-20">
        <div class="container mx-auto">
          <div class="relative bg-[#5C50E3] rounded-lg sm:p-10">
            <div class="grid lg:grid-cols-2">
              <div class="max-w-md text-center lg:text-left">
                <img src="100% good at programming 🚀.png" alt="">
                <h1 class="mt-5 text-2xl font-bold text-white sm:text-4xl">
                  Welcome To The Coding School Website
                </h1>
                <p class="mt-5 text-grey-light">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fermentum massa sit amet porta efficitur.
                </p>
                <a href="" class="inline-block px-5 py-3 mt-8 text-white transition-colors duration-150 bg-yellow-500 rounded-full hover:bg-yellow-600">Registration</a>
              </div>
              <div class="hidden lg:block lg:ml-auto">
                <img src="pngwing 2.png" class="object-contain h-64" alt="">
              </div>
            </div>
          </div>
        </div>
    </section>
    
    <section class="flex flex-col items-center justify-center space-y-10 ">
        <div class="grid items-center grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
          @include('layouts.company')
            <img src="Vector (1).png" alt="" class="transition duration-200 hover:opacity-75">
            <img src="Frame 180.png" alt="" class="transition duration-200 hover:opacity-75">
        </div>
    </section>

    <section class="relative flex flex-col items-center">
        <h3 class="mt-24 mb-5 text-4xl font-bold">Our Course</h3>
        <p class="w-full text-center sm:w-5/12">Lörem ipsum patev antifili astrokålonat. Vanat aheten. Ekofiering makrora, på trekavis. Makrona tregät plang. Bekässade kast, eftersom sore. </p>
        <hr class="w-full border-b-2 border-dashed border-grey sm:w-4/6 mt-28">
        <section class="relative grid grid-cols-1 px-10 mt-10 sm:grid-cols-2 lg:grid-cols-3 sm:px-14">
          @include('layouts.blog')
        </section>
    </section>

    <section id="About" class="py-10 my-[10px]">
        <div class="container">
            <div class="w-full bg-[#5C50E30D] develop-bg rounded-lg p-5 sm:p-[80px]">
                <div class="grid lg:grid-cols-2 sm:grid-cols-1">
                    <div>
                        <div class="mr-auto max-w-[485px]">
                            <img src="About Us 🏫.png" alt="">
                            <h1 class="text-[22px] sm:text-[40px] font-bold text-dark">
                                Profesional And Quality Teacher
                            </h1>
                            <p class="mt-5 text-grey">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fermentum massa sit amet porta efficitur.
                            </p>
                            <a class="text-white bg-[#5C50E3] py-3 px-5 rounded-full mt-8 inline-block">Search Course</a>
                        </div>
                    </div>
                    <div class="hidden sm:flex">
                        <div class="ml-auto">
                            <img src="Mask group.png" class="object-contain develip-quality-image" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Owner-Coding" class="py-10 my-[10px]">
        <div class="container">
            <div class="w-full bg-[#5C50E30D] develop-bg rounded-lg p-5 sm:p-[80px]">
                <div class="grid lg:grid-cols-2 sm:grid-cols-1">
                    <div>
                        <div class="mr-auto max-w-[485px]">
                            <p class="text-yellow">Owner Said</p>
                            <h1 class="text-[22px] sm:text-[40px] font-bold text-dark">
                                Owner Coding Learned
                            </h1>
                            <p class="mt-5 text-grey">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fermentum massa sit amet porta efficitur.
                            </p>
                            <div class="mt-6">
                                <img src="Group 1597882812.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="hidden sm:flex">
                        <div class="ml-auto">
                            <img src="Frame 1597882774.png" class="object-contain develip-quality-image" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Student-Say" class="py-10 my-[10px]">
        <div class="container">
            <div class="w-full develop-bg rounded-lg p-5 sm:p-[80px]">
                <div class="grid lg:grid-cols-2 sm:grid-cols-1">
                    <div>
                        <div class="mr-auto max-w-[485px]">
                            <h1 class="text-[22px] sm:text-[40px] font-bold text-dark">
                                What Student Say About Coding Learned
                            </h1>
                            <p class="mt-5 text-grey">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fermentum massa sit amet porta efficitur.
                            </p>
                        </div>
                    </div>
                    <div class="hidden sm:flex">
                        <div class="ml-auto">
                            <img src="pngwing 8.png" class="object-contain develip-quality-image" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    </div>

    <section class="bg-[#030024] text-white py-14">
        <div class="container flex flex-col items-center space-x-12 space-y-5 md:flex-row md:space-y-0 md:items-start md:justify-center">
            <div class="flex flex-col">
                <div class="flex items-center gap-5 mb-5">
                    <img src="Group 1 (1).png" alt="" width="100">
                </div>

                <p class="max-w-[380px]">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis, justo nec porttitor auctor, erat sapien faucibus lectus, vel tempor dolor augue et lectus.
                </p>
                <ul class="flex gap-5 mt-5">
                    <li>
                        <img src="Vector (01).png" alt="">
                    </li>
                    <li>
                        <img src="Vector (2).png" alt="">
                    </li>
                    <li>
                        <img src="Vector (3).png" alt="">
                    </li>
                    <li>
                        <img src="Vector (4).png" alt="">
                    </li>
                </ul>
            </div>

            <div class="flex px-32 py-14 gap-14">
                <div>
                    <p class="py-2 font-bold">Home</p>
                    <ul class="flex flex-col gap-2 mt-3 space-y-1">
                        <li>Course</li>
                        <li>Teacher</li>
                        <li>Study</li>
                        <li>About</li>
                        <li>Contact</li>
                    </ul>
                </div>

                <div>
                    <p class="py-2 font-bold">Feature</p>
                    <ul class="flex flex-col gap-2 mt-3 space-y-1">
                        <li>Payment</li>
                        <li>Virtual Acount</li>
                        <li>Go-Pay</li>
                    </ul>
                </div>

                <div>
                    <p class="py-2 font-bold">Company</p>
                    <ul class="flex flex-col gap-2 mt-3 space-y-1">
                        <li>Carrees</li>
                        <li>Contact</li>
                        <li>FAQ</li>
                        <li>Partners</li>
                        <li>Privacy & Policy</li>
                    </ul>
                </div>

                <div>
                    <p class="py-2 font-bold">Subscribe To Cheers On Us</p>
                    <ul class="flex flex-col gap-2 mt-3 space-y-1">
                        <li><img src="Frame 1597882839.png" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-[#212121] py-5">
        <p class="text-center text-white ">© 2022 Mangcoding. All rights reserved.</p>
    </footer>

    <script>
    const btnMenu = document.querySelector('.btn-menu');
    const mobileNav = document.querySelector('.mobile-nav');

    btnMenu.addEventListener('click', () => {
    mobileNav.classList.toggle('hidden');
    });

        window.addEventListener("load", function() {
    document.querySelectorAll(".flex").forEach(function(section) {
      section.style.opacity = 1;
      section.style.transform = "translateY(0)";
      section.style.transition = "all 0.5s ease-out";
    });
  });
      </script>

</body>

</html>
