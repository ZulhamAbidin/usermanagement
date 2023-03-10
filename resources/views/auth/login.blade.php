<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex min-h-full mt-0 md:mt-4 items-center mx-4 md:mx-2 justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-sm md:space-y-10">
            <div>
                
                <img class="mx-auto h-20 w-auto" src="{{ asset('image/mks.jpg') }}" alt="Your Company">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                <h2 class="mt-2 md:mt-6 text-center text-lg md:text-3xl font-bold tracking-tight text-gray-900">Sign in to your account</h2>

            </div>
            <form method="POST" action="{{ route('login') }}" class="mt-0 md:mt-8 space-y-6" action="#" method="POST">
                @csrf
               
                <div class="-space-y-px rounded-md shadow-sm">
                    <div>
                        <label for="email-address" class="sr-only">Email address</label>
                        <input id="email-address" name="email" type="email" autocomplete="email" required
                            class="relative block w-full placeholder:text-sm md:placeholder:text-base appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 md:py-3 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                            placeholder="Email address">
                    </div>
                    <div>
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="relative block w-full  placeholder:text-sm md:placeholder:text-base appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 md:py-3 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                            placeholder="Password">
                    </div>
                </div>

                <div class="flex items-center justify-between hidden md:flex">
                    <div class="text-sm">
                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Forgot your
                            password?</a>
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <!-- Heroicon name: mini/lock-closed -->
                            <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        Sign in
                    </button>
                </div>
            </form>
        </div>
    </div>

    <footer class="p-4 bg-white rounded-lg shadow md:px-6 md:py-6 fixed bottom-0 left-0 right-0 border-t-2">
        
        <span class="block text-xs md:text-sm text-gray-500 sm:text-center">??Dinas Ketenagakerjaan Kota Makassar <a href="https://flowbite.com/"
                class="hover:underline">& ZulhamAbidin</a>. All Rights Reserved.
        </span>
    </footer>

</body>

</html>
