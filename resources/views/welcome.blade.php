<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    
    <title>{{ config('app.name', 'HH-Bread-and-Co') }}</title>
    <link rel="icon" href="{{ asset('images/site-assets/logo-header.png') }}" type="image/png">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Be+Vietnam+Pro:wght@400;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "surface-dim": "#dbdad7",
                      "on-secondary": "#ffffff",
                      "tertiary-fixed-dim": "#ffb783",
                      "on-surface": "#1a1c1a",
                      "tertiary-container": "#ffc7a1",
                      "on-secondary-fixed-variant": "#4b4642",
                      "on-primary-fixed": "#221b00",
                      "primary-container": "#f4d03f",
                      "on-error-container": "#93000a",
                      "primary": "#705d00",
                      "outline": "#7e7762",
                      "on-tertiary-container": "#8e4700",
                      "surface-container-highest": "#e3e2e0",
                      "on-secondary-fixed": "#1e1b18",
                      "on-error": "#ffffff",
                      "on-primary": "#ffffff",
                      "primary-fixed-dim": "#e7c433",
                      "surface-container-high": "#e9e8e5",
                      "surface-variant": "#e3e2e0",
                      "on-tertiary-fixed": "#301400",
                      "primary-fixed": "#ffe174",
                      "surface-bright": "#faf9f6",
                      "on-tertiary": "#ffffff",
                      "inverse-primary": "#e7c433",
                      "surface-container": "#efeeeb",
                      "on-primary-container": "#6c5900",
                      "surface-container-lowest": "#ffffff",
                      "tertiary": "#944a00",
                      "error-container": "#ffdad6",
                      "outline-variant": "#cfc6ae",
                      "inverse-surface": "#2f312f",
                      "secondary-fixed-dim": "#cdc5c0",
                      "secondary-container": "#e6ded9",
                      "secondary": "#635d5a",
                      "on-surface-variant": "#4c4634",
                      "surface-tint": "#705d00",
                      "surface-container-low": "#f4f3f1",
                      "error": "#ba1a1a",
                      "on-primary-fixed-variant": "#554500",
                      "background": "#faf9f6",
                      "on-secondary-container": "#67625e",
                      "surface": "#faf9f6",
                      "inverse-on-surface": "#f2f1ee",
                      "tertiary-fixed": "#ffdcc5",
                      "secondary-fixed": "#e9e1dc",
                      "on-background": "#1a1c1a",
                      "on-tertiary-fixed-variant": "#713700",
                      "golden-yellow": "#F4D03F"
              },
              "borderRadius": {
                      "DEFAULT": "0.25rem",
                      "lg": "0.5rem",
                      "xl": "0.75rem",
                      "full": "9999px"
              },
              "spacing": {
                      "stack-sm": "12px",
                      "stack-lg": "48px",
                      "stack-md": "24px",
                      "container-max": "1200px",
                      "margin-desktop": "64px",
                      "margin-mobile": "20px",
                      "gutter": "24px",
                      "base": "8px"
              },
              "fontFamily": {
                      "display-lg": ["Playfair Display"],
                      "label-md": ["Be Vietnam Pro"],
                      "headline-lg": ["Playfair Display"],
                      "body-md": ["Be Vietnam Pro"],
                      "caption": ["Be Vietnam Pro"],
                      "headline-md": ["Playfair Display"],
                      "headline-lg-mobile": ["Playfair Display"],
                      "body-lg": ["Be Vietnam Pro"]
              },
              "fontSize": {
                      "display-lg": ["56px", {"lineHeight": "64px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                      "label-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                      "headline-lg": ["32px", {"lineHeight": "40px", "fontWeight": "700"}],
                      "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                      "caption": ["12px", {"lineHeight": "1.4", "fontWeight": "400"}],
                      "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                      "headline-lg-mobile": ["28px", {"lineHeight": "36px", "fontWeight": "700"}],
                      "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}]
              }
            },
          },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
            color: #1a1c1a;
        }
        .soft-shadow {
            box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.05);
        }
        .hero-gradient {
            background: linear-gradient(to right, rgba(26, 28, 26, 0.8) 30%, rgba(26, 28, 26, 0.2) 100%);
        }
    </style>
</head>
<body class="bg-background text-on-surface selection:bg-primary-fixed selection:text-on-primary-fixed">

<header class="w-full top-0 sticky bg-surface/80 backdrop-blur-md shadow-sm z-50">
    <nav class="flex justify-between items-center max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop h-20">
        <div class="h-20 w-30 -ml-10 rounded-lg overflow-hidden flex items-center justify-center">
            <img src="{{ asset('images/site-assets/logo-header.png') }}" alt="HH Bread & Co. logo" class="h-full object-contain" />
        </div>
        
        <div class="hidden md:flex gap-stack-md items-center ml-14">
            <a class="font-label-md text-label-md text-on-surface-variant hover:text-golden-yellow transition-colors duration-200 cursor-pointer active:scale-95" href="#menu">Menu</a>
            <a class="font-label-md text-label-md text-on-surface-variant hover:text-golden-yellow transition-colors duration-200 cursor-pointer active:scale-95" href="#gallery">Galeri</a>
            <a class="font-label-md text-label-md text-on-surface-variant hover:text-golden-yellow transition-colors duration-200 cursor-pointer active:scale-95" href="#location">Lokasi</a>
            <a href="#contact-maps" class="ml-stack-sm bg-golden-yellow text-on-primary-container px-6 py-2 rounded-lg font-label-md text-label-md hover:brightness-110 transition-all active:scale-95 shadow-sm text-center">Hubungi Kami</a>
        </div>
        
        <button class="md:hidden p-2" id="mobile-menu-btn">
            <span class="material-symbols-outlined">menu</span>
        </button>

        <div id="mobile-menu" class="hidden absolute top-20 left-0 w-full bg-surface/95 backdrop-blur-md shadow-lg border-t border-outline-variant/10 p-margin-mobile flex-col gap-2 md:hidden z-40">
            <a class="mobile-link font-headline-md text-[20px] text-on-surface py-3 border-b border-outline-variant/10 hover:text-golden-yellow transition-colors" href="#menu">Menu</a>
            <a class="mobile-link font-headline-md text-[20px] text-on-surface py-3 border-b border-outline-variant/10 hover:text-golden-yellow transition-colors" href="#gallery">Galeri</a>
            <a class="mobile-link font-headline-md text-[20px] text-on-surface py-3 border-b border-outline-variant/10 hover:text-golden-yellow transition-colors" href="#location">Lokasi</a>
            <a class="mobile-link mt-4 w-full bg-golden-yellow text-on-primary-container px-6 py-3 rounded-lg font-label-md text-center hover:brightness-110 active:scale-95 transition-all" href="#contact-maps">Hubungi Kami</a>
        </div>
    </nav>
</header>

<main>
    <section class="relative min-h-[870px] flex items-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img alt="Interior kafe hangat" class="w-full h-full object-cover" src="{{ asset('images/site-assets/hero-background.png') }}" />
            <div class="absolute inset-0 hero-gradient"></div>
        </div>
        <div class="relative z-10 max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop w-full">
            <div class="max-w-2xl">
                <h1 class="font-display-lg text-headline-lg-mobile md:text-display-lg text-white mb-stack-sm">HH Bread & Co.</h1>
                <p class="font-body-lg text-body-lg text-white/80 mb-stack-lg max-w-lg">Bakery, Coffee Shop, & Coworking Space</p>
                <div class="flex flex-wrap gap-stack-sm">
                    <a href="#menu" class="bg-golden-yellow text-on-primary-container px-8 py-4 rounded-lg font-label-md text-label-md hover:brightness-110 transition-all hover:translate-y-[-2px] soft-shadow inline-flex items-center justify-center">
                        Lihat Menu Kami
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-stack-lg max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop" id="menu">
        <div class="text-center mb-stack-lg">
            <h2 class="font-headline-lg text-headline-lg text-on-surface">Daftar Menu</h2>
            <div class="w-16 h-1 bg-golden-yellow mx-auto mt-4"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-gutter">
            <div class="relative aspect-[3/4] rounded-3xl overflow-hidden soft-shadow group cursor-pointer border border-outline-variant/10">
                <img src="{{ asset('images/site-assets/menu-front-1.jpg') }}" alt="Menu Minuman" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
            </div>
            <div class="relative aspect-[3/4] rounded-3xl overflow-hidden soft-shadow group cursor-pointer border border-outline-variant/10">
                <img src="{{ asset('images/site-assets/menu-front-2.jpg') }}" alt="Menu Roti" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
            </div>
        </div>
    </section>

    <section class="py-stack-lg bg-surface-container-low" id="gallery">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="text-center mb-stack-lg">
                <h2 class="font-headline-lg text-headline-lg text-on-surface">Galeri Produk</h2>
                <div class="w-16 h-1 bg-golden-yellow mx-auto mt-4"></div>
            </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 auto-rows-[200px] md:auto-rows-[250px]">
                <div class="col-span-2 row-span-2 rounded-2xl overflow-hidden soft-shadow group relative border border-outline-variant/10">
                    <img alt="Roti Sourdough Artisan" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="{{ asset('images/site-assets/menu-product-1.png') }}"/>
    
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4">
                         <span class="text-white text-xs font-label-md">Almond Latte with Milk Lab Almond Milk</span>
                    </div>
                </div>
                <div class="col-span-1 row-span-1 rounded-2xl overflow-hidden soft-shadow group relative border border-outline-variant/10">
                    <img alt="Croissant" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="{{ asset('images/site-assets/menu-product-2.png') }}"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4">
                        <span class="text-white text-xs font-label-md">Caramel Macchiato</span>
                    </div>
                </div>
                <div class="col-span-1 row-span-2 rounded-2xl overflow-hidden soft-shadow group relative border border-outline-variant/10">
                    <img alt="Kopi Spesialti" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="{{ asset('images/site-assets/menu-product-3.png') }}"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4">
                        <span class="text-white text-xs font-label-md">Roti bakar klasik</span>
                    </div>
                </div>
                <div class="col-span-1 row-span-1 rounded-2xl overflow-hidden soft-shadow group relative border border-outline-variant/10">
                    <img alt="Cinnamon Rolls" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="{{ asset('images/site-assets/menu-product-4.png') }}"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4">
                        <span class="text-white text-xs font-label-md">Kopi Brenebon</span>
                    </div>
                </div>
                <div class="col-span-2 row-span-1 rounded-2xl overflow-hidden soft-shadow group relative border border-outline-variant/10">
                    <img alt="Kue Honey Cake" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="{{ asset('images/site-assets/menu-product-5.png') }}"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-4">
                        <span class="text-white text-xs font-label-md">Cheesecake</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-stack-lg bg-background">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="bg-surface-container-lowest p-stack-md md:p-stack-lg rounded-3xl soft-shadow border border-outline-variant/10 text-center">
                <div class="flex flex-col items-center gap-4 mb-stack-md">
                    <span class="material-symbols-outlined text-5xl !text-golden-yellow">schedule</span>
                    <h2 class="font-headline-md text-headline-md text-on-surface uppercase tracking-tight">JAM OPERASIONAL</h2>
                    <div class="w-12 h-0.5 bg-golden-yellow/30"></div>
                </div>
                <div class="max-w-xl mx-auto space-y-4">
                    <div class="flex justify-between items-center py-4 border-b border-outline-variant/10">
                        <span class="font-body-lg text-on-surface">Setiap Hari</span>
                        <span class="font-label-md text-golden-yellow text-lg">07:00 AM - 09:00 PM</span>
                    </div>
                    <div class="flex justify-between items-center py-4 border-b border-outline-variant/10 opacity-60">
                        <span class="font-body-lg text-on-surface">Hari Libur</span>
                        <span class="font-label-md text-on-surface-variant">Cek Instagram @HHBreadAndCo</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-stack-lg max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop" id="location">
        <div class="flex flex-col md:flex-row gap-gutter items-center">
            <div class="w-full md:w-1/3">
                <h2 class="font-headline-lg text-headline-lg text-on-surface mb-stack-sm">Lokasi</h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant mb-stack-md">
                    Paniki Bawah, Kec. Mapanget, Kota Manado, Sulawesi Utara 95256
                </p>
                <div class="mt-8">
                    <h3 id="contact-maps" class="font-headline-md text-on-surface mb-4">Hubungi Kami</h3>

                    <div class="flex flex-col gap-4">
                            <div class="flex items-center gap-4">
                            <a href="https://www.instagram.com/hh.breadandco?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" rel="noopener noreferrer" class="hover:opacity-80 transition-opacity">
                                <img src="{{ asset('images/site-assets/icon-instagram.png') }}" alt="Instagram" class="h-8 w-8 object-contain opacity-70" />
                            </a>
                        </div>
                        <div class="space-y-1">
                            <p class="font-label-md text-black text-lg">Nomor Hp</p>
                            <p class="font-body-md text-on-surface-variant">Email</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-2/3 h-[450px] rounded-3xl overflow-hidden relative soft-shadow border border-outline-variant/10">
                <iframe
                    title="Peta lokasi HH Bread and Co."
                    class="w-full h-full object-cover"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    allowfullscreen
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.442934010212!2d124.90078749999999!3d1.5044781999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3287a1803895dcc7%3A0x97f853019e2c22c6!2sHH%20Bread%20and%20Co.%20(Cafe%20%26%20Coworking%20Space)!5e0!3m2!1sid!2sid!4v1779375901920!5m2!1sid!2sid"></iframe>

                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="bg-white/90 p-4 rounded-xl soft-shadow flex flex-col items-center border border-golden-yellow/20 animate-bounce">
                        <span class="material-symbols-outlined text-golden-yellow text-3xl" style='font-variation-settings: "FILL" 1;'>location_on</span>
                        <span class="font-label-md text-[10px] uppercase text-golden-yellow">Kami di sini</span>
                        <a
                            href="https://www.google.com/maps/dir/?api=1&destination=1.5044781999999999,124.90078749999999"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="mt-3 w-full border border-golden-yellow text-on-surface px-4 py-2 rounded-lg font-label-md text-[10px] hover:bg-golden-yellow hover:text-on-primary-container transition-all flex items-center justify-center gap-1"
                        >
                            <span class="material-symbols-outlined !text-golden-yellow !text-sm" style="font-variation-settings: 'FILL' 1;">directions</span>
                            Dapatkan Rute
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="w-full py-stack-lg bg-surface-container-low mt-stack-lg border-t border-outline-variant/10" id="contact">
    <div class="flex flex-col md:flex-row justify-between items-center max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop gap-base">
        <div class="flex flex-col items-center md:items-start gap-2">
            <div class="font-headline-sm text-headline-sm text-golden-yellow">HH Bread & Co.</div>
        </div>
        <div class="flex gap-stack-md my-stack-md md:my-0">
            <a class="text-on-surface-variant hover:text-golden-yellow transition-colors font-body-md text-body-md" href="#menu">Menu</a>
            <a class="text-on-surface-variant hover:text-golden-yellow transition-colors font-body-md text-body-md" href="#gallery">Galeri</a>
            <a class="text-on-surface-variant hover:text-golden-yellow transition-colors font-body-md text-body-md" href="#location">Lokasi</a>
        </div>

    </div>
</footer>

<script>
    // Efek bayangan pada header saat discroll
    window.addEventListener('scroll', () => {
        const header = document.querySelector('header');
        if (window.scrollY > 20) {
            header.classList.add('shadow-md');
            header.classList.remove('shadow-sm');
        } else {
            header.classList.add('shadow-sm');
            header.classList.remove('shadow-md');
        }
    });

    // Logika Menu Mobile
    const mobileBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = mobileBtn.querySelector('span');

    mobileBtn.addEventListener('click', () => {
        // Buka/Tutup menu
        mobileMenu.classList.toggle('hidden');
        mobileMenu.classList.toggle('flex');
        
        // Ubah ikon garis tiga menjadi silang (close)
        if (mobileMenu.classList.contains('flex')) {
            menuIcon.textContent = 'close';
        } else {
            menuIcon.textContent = 'menu';
        }
    });

    // Tutup menu otomatis saat salah satu link diklik
    const mobileLinks = document.querySelectorAll('.mobile-link');
    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
            mobileMenu.classList.remove('flex');
            menuIcon.textContent = 'menu';
        });
    });
</script>

</body>
</html>