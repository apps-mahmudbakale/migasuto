@extends('layouts.auth')
@section('content')
<!-- Block start -->
<section class="bg-gray-50 dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-20 lg:py-16 lg:grid-cols-12">
        <!-- Illustration on the left side -->
        <div class="place-self-center lg:col-span-6">
            <img class="mx-auto hidden lg:block"
                 src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/authentication/illustration.svg"
                 alt="illustration">
        </div>

        <!-- Form section on the right side -->
        <div class="w-full place-self-center lg:col-span-6">
            <div class="p-6 mx-auto bg-white rounded-lg shadow dark:bg-gray-800 sm:max-w-xl sm:p-8">
                <a href="#"
                   class="inline-flex items-center mb-4 text-xl font-semibold text-gray-900 dark:text-white">
                    <img class="w-12 h-12 mr-2" src="{{asset('logo.png')}}"
                         alt="logo">
                    Migasuto
                </a>
                <h1 class="mb-2 text-2xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white">
                    Welcome back
                </h1>
                <p class="text-sm font-light text-gray-500 dark:text-gray-300">
                    Start your journey in seconds. Don’t have an account? <a href=""
                                                                             class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign up</a>.
                </p>
                <form class="mt-4 space-y-6 sm:mt-6" action="{{route('register')}}" method="post">
                    @csrf
                    <!-- Set input fields to block display -->
                    <div>
                        <label for="name"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" name="name" id="name"
                               class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="John Doe" required>
                    </div>
                    <div>
                        <label for="email"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="email"
                               class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="name@company.com" required>
                    </div>
                    <div>
                        <label for="password"
                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                               class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               required>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" aria-describedby="remember" type="checkbox"
                                       class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                                       required>
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="remember" class="text-gray-500 dark:text-gray-300">Agree with Terms & Conditions</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit"
                            class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Sign in to your account
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Block end -->
@endsection
