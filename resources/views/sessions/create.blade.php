<x-layout>
    <section class="px-6 py-8">
        <main class="maw-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-x-l">
            <h1 class="text-center font-bold text-xl">Log In!</h1>

            <form action="/login" method="post" class="mt-10">          
            @csrf

                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase fint-bold text-xs text-gray-700">email</label>
                    <input type="email" name="email" id="email" required value="{{ old('email') }}" class="border border-gray-400 p-2 w-full">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase fint-bold text-xs text-gray-700">password</label>
                    <input type="password" name="password" id="password" required class="border border-gray-400 p-2 w-full">
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Log In</button>
                </div>   

            </form>
        </main>        
    </section>
</x-layout>