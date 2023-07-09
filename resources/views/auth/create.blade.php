<x-layout>
    <x-wrapper>
        <section class="bg-gray-50">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto  lg:py-0">
                <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0  dark:border-gray-700">
                    <div class="p-6 md:px-24 md:py-10 space-y-4 md:space-y-6 ">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl ">
                            Create and account
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="/register" method="POST">
                            @csrf
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Your Name</label>
                                <input type="name" value="{{old('name')}}" name="name" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="b10-blabla" required="">
                                @error('name')
                                    <p class=" text-red-600">{{$message}}</p>
                                @enderror
                                
                            </div>
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Your email</label>
                                <input type="email" value="{{old('email')}}" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                                @error('email')
                                <p class=" text-red-600">{{$message}}</p>
                            @enderror
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                                @error('password')
                                <p class=" text-red-600">{{$message}}</p>
                            @enderror
                            </div>
                            <div>
                                <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900">Confirm password</label>
                                <input type="password" name="password_confirmation" id="confirm-password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                            </div>
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                  <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                                </div>
                                <div class="ml-3 text-sm">
                                  <label for="terms" class="font-light text-gray-900">I accept the <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Terms and Conditions</a></label>
                                </div>
                            </div>
                            <button type="submit" class="w-full bg-blue-700 text-white hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Create an account</button>
                            <p class="text-sm font-light text-gray-900">
                                Already have an account? <a href="#" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login here</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
          </section>
    </x-wrapper>
</x-layout>