<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initia
l-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Library App - Register</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body class="bg-gray-100">
    <main class="px-6 md:px-64 lg:px-[32rem]">
        <section class="flex justify-center items-center min-h-screen">
            <div class="py-6 px-4 bg-white rounded-lg borderborder-gray-200 w-full shadow-md">
                <h1 class="text-center font-semibold">Library App - Register</h1>
                <hr class="my-3 w-full bg-gray-100">
                <form action="#" method="POST" class="mt-4">
                    <div class="flex flex-col gap-3">
                        <div class="flex flex-col gap-2">
                            <label class="font-medium text-sm">Email</label>
                            <input type="text" name="Email" placeholder="Username"
                                class="px-3 py-2 border border-gray-300 rounded text-sm placeholder-gray-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 in valid:border-red-500 invalid:text-red-600 focus:invalid:border-red-500 focus:invalid:ring-red-600" />
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="font-medium text-sm">Password</label>
                            <input type="password" name="password" placeholder="Password"
                                class="px-3 py-2 border border-gray-300 rounded text-sm placeholder-gray-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 invalid:border-red-500 invalid:text-red-600 focus:invalid:border-red-500 focus:invalid:ring-red-600" />
                        </div>
                        <div class="flex flex-col gap-3 mt2">
                            <button
                                class="px-3 py-2 bg-gray-800 rounded text-sm text-white font-medium block w-full transition-all duration-300">Register</button>
                            <p class="text-sm text-center">Have account?
                                <a href="{{ route('auth.login') }}" class="text-blue-500 underline">Login</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>

</html>
