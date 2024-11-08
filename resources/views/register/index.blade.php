<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  <section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
          <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
            Registration Form
          </h1>

          <form class="space-y-4 md:space-y-6" action="#">

            <!-- Name -->
            <div class="relative">
              <input type="text" name="name" id="name"
                class="peer bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-transparent dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required="" placeholder=" ">
              <label for="name"
                class="absolute left-3 top-2 text-sm font-medium text-gray-900 dark:text-white transition-all duration-300 origin-[0] scale-75 transform peer-placeholder-shown:scale-100 peer-placeholder-shown:top-2 peer-placeholder-shown:left-3 peer-focus:scale-75 peer-focus:-top-1 peer-focus:left-3">Name</label>
            </div>

            <!-- Username -->
            <div class="relative">
              <input type="text" name="username" id="username"
                class="peer bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-transparent dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required="" placeholder=" ">
              <label for="username"
                class="absolute left-3 top-2 text-sm font-medium text-gray-900 dark:text-white transition-all duration-300 origin-[0] scale-75 transform peer-placeholder-shown:scale-100 peer-placeholder-shown:top-2 peer-placeholder-shown:left-3 peer-focus:scale-75 peer-focus:-top-1 peer-focus:left-3">Username</label>
            </div>

            <!-- Email Address -->
            <div class="relative">
              <input type="email" name="email" id="email"
                class="peer bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-transparent dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required="" placeholder=" ">
              <label for="email"
                class="absolute left-3 top-2 text-sm font-medium text-gray-900 dark:text-white transition-all duration-300 origin-[0] scale-75 transform peer-placeholder-shown:scale-100 peer-placeholder-shown:top-2 peer-placeholder-shown:left-3 peer-focus:scale-75 peer-focus:-top-1 peer-focus:left-3">Email address</label>
            </div>

            <!-- Password -->
            <div class="relative">
              <input type="password" name="password" id="password"
                class="peer bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-transparent dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required="" placeholder=" ">
              <label for="password"
                class="absolute left-3 top-2 text-sm font-medium text-gray-900 dark:text-white transition-all duration-300 origin-[0] scale-75 transform peer-placeholder-shown:scale-100 peer-placeholder-shown:top-2 peer-placeholder-shown:left-3 peer-focus:scale-75 peer-focus:-top-1 peer-focus:left-3">Password</label>
            </div>

            <!-- Remember -->
            <div class="flex items-center space-x-2">
              <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
              <label for="remember" class="text-sm text-gray-500 dark:text-gray-300">Remember me</label>
            </div>

            <!-- Submit -->
            <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Registrasi</button>

            <!-- Login -->
            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
              Already registered? <a href="/login" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </section>
</x-layout>