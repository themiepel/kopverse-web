@extends('layouts.guest')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-green-50 via-green-100 to-yellow-50 flex justify-center items-center">

        <div class="w-full max-w-[430px] h-screen md:h-[85vh] bg-cover bg-center md:rounded-[32px] md:shadow-2xl overflow-hidden relative flex flex-col justify-between p-8 select-none"
            style="background-image: url('{{ Vite::asset('resources/images/background/login_bg.png') }}');">

            <div id="loginLogo" class="{{ $errors->any() ? 'hidden' : '' }} flex-1 flex items-center justify-center pt-20">
                <img src="{{ Vite::asset('resources/images/logo/kopverse_logo.png') }}" alt="KOPVERSE"
                    class="w-72 drop-shadow-[0_4px_8px_rgba(0,0,0,.3)]">
            </div>

            <div id="loginMenu"
                class="{{ $errors->any() ? 'hidden' : '' }} w-full flex flex-col items-center space-y-4 pb-16 px-4">

                <button id="openLogin" type="button"
                    class="flex w-[245px] h-[48px] justify-center items-center rounded-[10px] border-3 border-[#49220E] bg-gradient-to-b from-[#B0B325] to-[#859D0D] shadow-[0_4px_0_0_#472211] btn-game-active cursor-pointer">
                    <span class="text-white font-game text-[30px] text-stroke-game leading-[22px]">
                        Login
                    </span>
                </button>

                <button type="button" disabled
                    class="flex w-[251px] h-[53px] justify-center items-center gap-3 rounded-[12px] border-3 border-gray-400 bg-gray-200 text-gray-400 opacity-60 cursor-not-allowed">
                    <span class="font-game text-[20px]">
                        Sign in with Google
                    </span>
                </button>
            </div>

            <div id="loginPanel"
                class="{{ $errors->any() ? '' : 'hidden' }} w-full flex-1 flex flex-col justify-center items-center pb-10 px-4">
                <div
                    class="w-full max-w-[380px] mx-auto bg-[#855300] bg-blend-screen rounded-[36px] p-5 relative border-4 border-[#49220E] shadow-[0_8px_0_0_#472211]">

                    <div
                        class="absolute -top-7 left-1/2 -translate-x-1/2 flex min-w-[160px] h-[66px] px-6 justify-center items-center rounded-[10px] border-4 border-[#49220E] bg-gradient-to-b from-[#B0B325] to-[#859D0D] shadow-[0_4px_0_0_#472211]">
                        <span
                            class="text-center text-stroke-thick font-game text-[45px] font-normal leading-[60px] text-white tracking-wide whitespace-nowrap block">
                            Login
                        </span>
                    </div>

                    <button id="closeLogin" type="button"
                        class="absolute -top-3 -right-2 w-[53px] h-[53px] rounded-full border-3 border-[#821C1C] bg-gradient-to-b from-[#E84F4F] to-[#BA3A3A] shadow-[0_3px_0_0_#821C1C] btn-game-active cursor-pointer z-10">
                        <span class="text-white font-game text-xl drop-shadow-[0_2px_0_#821C1C]">✕</span>
                    </button>

                    <div
                        class="mt-8 bg-[#F2E6D9] border-2 border-[#784226] rounded-[29px] inner-wood-shadow pt-10 pb-6 px-5">

                        <form method="POST" action="{{ url('/login') }}" id="loginForm"
                            class="flex flex-col items-center space-y-3.5">
                            @csrf

                            @if($errors->has('login'))
                                <div
                                    class="w-full mb-2 rounded-lg bg-red-200 border border-red-500 text-red-700 text-center py-2 font-sans text-xs">
                                    {{ $errors->first('login') }}
                                </div>
                            @endif

                            <div class="w-full max-w-[260px]">
                                <input name="username" id="username" type="text" placeholder="Username"
                                    value="{{ old('username') }}" autocomplete="username"
                                    class="w-full h-11 bg-[#5D3E24] border-3 border-[#49220E] rounded-xl text-center text-[#DABB86] font-game text-[20px] placeholder:text-[#DABB86]/60 focus:outline-none transition-colors">
                                <p id="usernameError"
                                    class="hidden mt-1 text-center font-game text-[12px] text-red-700 tracking-wide"></p>
                            </div>

                            <div class="w-full max-w-[260px]">
                                <input name="password" id="password" type="password" placeholder="Password"
                                    autocomplete="current-password"
                                    class="w-full h-11 bg-[#5D3E24] border-3 border-[#49220E] rounded-xl text-center text-[#DABB86] font-game text-[20px] placeholder:text-[#DABB86]/60 focus:outline-none transition-colors">
                                <p id="passwordError"
                                    class="hidden mt-1 text-center font-game text-[12px] text-red-700 tracking-wide"></p>
                            </div>

                            <button type="button" disabled
                                class="flex w-full max-w-[260px] h-[46px] justify-center items-center gap-2 rounded-xl border-3 border-gray-400 bg-gray-200 text-gray-400 opacity-60 cursor-not-allowed">
                                <span class="font-game text-[18px]">Sign in with Google</span>
                            </button>

                            <div class="flex justify-center pt-2">
                                <button type="submit"
                                    class="flex w-[105px] h-[49px] justify-center items-center rounded-[10px] border-4 border-[#452113] bg-gradient-to-b from-[#FFE4B6] to-[#F59E0B] shadow-[0_4px_0_0_#794017] btn-game-active cursor-pointer">
                                    <span class="text-white font-game text-[34px] text-stroke-thick leading-none">
                                        Next
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener("DOMContentLoaded", () => {
                    const logo = document.getElementById("loginLogo");
                    const menu = document.getElementById("loginMenu");
                    const panel = document.getElementById("loginPanel");
                    const open = document.getElementById("openLogin");
                    const close = document.getElementById("closeLogin");
                    const form = document.getElementById("loginForm");
                    const username = document.getElementById("username");
                    const password = document.getElementById("password");
                    const usernameError = document.getElementById("usernameError");
                    const passwordError = document.getElementById("passwordError");

                    open.addEventListener("click", () => {
                        menu.classList.add("hidden");
                        logo.classList.add("hidden");
                        panel.classList.remove("hidden");
                        panel.classList.add("animate-fade-in");
                        username.focus();
                    });

                    close.addEventListener("click", () => {
                        panel.classList.add("hidden");
                        panel.classList.remove("animate-fade-in");
                        menu.classList.remove("hidden");
                        logo.classList.remove("hidden");
                        form.reset();
                        usernameError.classList.add("hidden");
                        passwordError.classList.add("hidden");
                        username.classList.remove("border-red-600");
                        password.classList.remove("border-red-600");
                    });

                    form.addEventListener("submit", (e) => {
                        let valid = true;

                        usernameError.classList.add("hidden");
                        passwordError.classList.add("hidden");
                        username.classList.remove("border-red-600");
                        password.classList.remove("border-red-600");

                        if (username.value.trim() === "") {
                            valid = false;
                            usernameError.innerHTML = "Username wajib diisi";
                            usernameError.classList.remove("hidden");
                            username.classList.add("border-red-600");
                        }

                        if (password.value.trim() === "") {
                            valid = false;
                            passwordError.innerHTML = "Password wajib diisi";
                            passwordError.classList.remove("hidden");
                            password.classList.add("border-red-600");
                        }

                        if (!valid) {
                            e.preventDefault(); // Menahan kirim form jika kosong
                        }
                    });

                    username.addEventListener("input", () => {
                        usernameError.classList.add("hidden");
                        username.classList.remove("border-red-600");
                    });

                    password.addEventListener("input", () => {
                        passwordError.classList.add("hidden");
                        password.classList.remove("border-red-600");
                    });

                    document.addEventListener("keydown", (e) => {
                        if (e.key === "Escape" && !panel.classList.contains("hidden")) {
                            close.click();
                        }
                    });
                });
            </script>
@endsection
