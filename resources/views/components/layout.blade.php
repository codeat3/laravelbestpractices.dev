<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    <section class="relative w-full px-8 text-gray-700 bg-white body-font">
        <div class="container flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row max-w-7xl">
            <a href="#_"
                class="relative z-10 flex items-center w-auto text-2xl font-extrabold leading-none text-black select-none">{{ config('app.name') }}
            </a>
            <x-nav />
            <div class="relative z-10 inline-flex items-center space-x-3 md:ml-5 lg:justify-end">
                <span class="inline-flex rounded-md shadow-sm"><a href="#"
                        class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-blue-600 border border-blue-700 rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                        data-rounded="rounded-md" data-primary="blue-600">Contribute
                    </a>
                </span>
            </div>
        </div>
    </section>

    <section class="relative py-16 bg-white min-w-screen animation-fade animation-delay">
        <div class="container px-0 px-8 mx-auto sm:px-12 xl:px-5">

            {{ $slot }}

        </div>
    </section>
    <x-footer />
</body>

</html>
