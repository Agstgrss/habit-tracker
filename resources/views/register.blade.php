<x-layout>
    <main class="py-10">
        <section class="bg-white max-w-[600px] mx-auto pb-6 not-visited:p-10 border-2 mt-4">

            <h1 class="font-bold text-3xl mb-4">
                Registre-se
            </h1>

            <p class="mb-4">
                Insira seus dados para se registrar
            </p>

            <form action="{{ route('auth.register') }}" method="POST" class="flex flex-col">
                @csrf

                {{-- NAME --}}
                <div class="flex flex-col gap-2 mb-4">
                    <label for="name">
                        Nome    
                    </label>

                    <input
                        type="text"
                        name="name"
                        placeholder="Seu nome"
                        value="{{ old('name') }}"
                        class="bg-white p-2 border-2 @error('name') border-red-500 @enderror"
                    >

                    @error('name')
                        <p class="text-red-500 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- EMAIL --}}
                <div class="flex flex-col gap-2 mb-4">
                    <label for="email">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        placeholder="your@email.com"
                        value="{{ old('email') }}"
                        class="bg-white p-2 border-2 @error('email') border-red-500 @enderror"
                    >

                    @error('email')
                        <p class="text-red-500 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- PASSWORD --}}
                <div class="flex flex-col gap-2 mb-4">
                    <label for="password">
                        Senha
                    </label>

                    <input
                        type="password"
                        name="password"
                        placeholder="********"
                        class="bg-white p-2 border-2 @error('password') border-red-500 @enderror"
                    >

                    @error('password')
                        <p class="text-red-500 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                
                {{-- PASSWORD CONFIRMATION --}}
                <div class="flex flex-col gap-2 mb-4">
                    <label for="password_confirmation">
                        Repita sua senha
                    </label>

                    <input
                        type="password"
                        name="password_confirmation"
                        placeholder="********"
                        class="bg-white p-2 border-2 @error('password_confirmation') border-red-500 @enderror"
                    >

                    @error('password')
                        <p class="text-red-500 text-sm">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <button
                    type="submit"
                    class="bg-white border-2 p-2"
                >
                    Cadastrar
                </button>

            </form>

            <p class="text-center mt-4">
                Já tem uma conta? 
                <a href="{{ route('site.login') }}" class="text-blue-500 underline hover:opacity-50 transition-opacity">
                    Faça login
                </a>
            </p>

        </section>
    </main>
</x-layout>