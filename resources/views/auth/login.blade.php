@extends('layouts.guest')

@section('content')

    <div class="min-h-screen bg-gradient-to-br from-green-50 via-green-100 to-yellow-50 flex justify-center items-center">

        <div class="w-full max-w-[430px] h-screen md:h-[85vh] bg-cover bg-center md:rounded-[32px] md:shadow-2xl overflow-hidden relative flex flex-col justify-between p-8 select-none"
            style="background-image:url('{{ Vite::asset('resources/images/background/login_bg.png') }}');">

            {{-- ===================== --}}
            {{-- LOGO --}}
            {{-- ===================== --}}

            <div class="flex-1 flex items-center justify-center pt-20">

                <img src="{{ Vite::asset('resources/images/logo/kopverse_logo.png') }}" alt="KOPVERSE"
                    class="w-72 drop-shadow-[0_4px_8px_rgba(0,0,0,.3)]">

            </div>

            {{-- ====================================================== --}}
            {{-- PANEL MENU LOGIN --}}
            {{-- ====================================================== --}}

            <div id="loginMenu" class="w-full flex flex-col items-center space-y-4 pb-16 px-4">

                <button id="openLogin" type="button" class="flex w-[245px] h-[48px]
                                justify-center
                                items-center
                                rounded-[10px]
                                border-3
                                border-[#49220E]
                                bg-gradient-to-b
                                from-[#B0B325]
                                to-[#859D0D]
                                shadow-[0_4px_0_0_#472211]
                                btn-game-active">

                    <span class="text-white
                                    font-game
                                    text-[30px]
                                    text-stroke-game">

                        LOGIN

                    </span>

                </button>

                <button type="button" class="flex
                                w-[251px]
                                h-[53px]
                                justify-center
                                items-center
                                gap-3
                                rounded-[12px]
                                border-3
                                border-[#49220E]
                                bg-white
                                shadow-[0_4px_0_0_#472211]
                                btn-game-active">

                    <span class="font-game
                                    text-[#5D3E24]
                                    text-[20px]">

                        Sign in with Google

                    </span>

                </button>

            </div>

            {{-- ====================================================== --}}
            {{-- PANEL LOGIN FORM --}}
            {{-- ====================================================== --}}

            <div id="loginPanel" class="hidden w-full pb-10 px-4">

                <div class="w-full
                                max-w-[380px]
                                mx-auto
                                bg-[#855300]
                                rounded-[36px]
                                p-5
                                relative
                                border-4
                                border-[#49220E]
                                shadow-[0_8px_0_0_#472211]">

                    {{-- BADGE --}}

                    <div class="absolute
                                    -top-7
                                    left-1/2
                                    -translate-x-1/2
                                    flex
                                    w-[141px]
                                    h-[66px]
                                    justify-center
                                    items-center
                                    rounded-[10px]
                                    border-4
                                    border-[#49220E]
                                    bg-gradient-to-b
                                    from-[#B0B325]
                                    to-[#859D0D]
                                    shadow-[0_4px_0_0_#472211]">

                        <span class="font-game
                                        text-[45px]
                                        text-white
                                        text-stroke-thick">

                            Login

                        </span>

                    </div>

                    {{-- CLOSE --}}

                    <button id="closeLogin" type="button" class="absolute
                                    -top-3
                                    -right-2
                                    w-[53px]
                                    h-[53px]
                                    rounded-full
                                    border-3
                                    border-[#821C1C]
                                    bg-gradient-to-b
                                    from-[#E84F4F]
                                    to-[#BA3A3A]
                                    shadow-[0_3px_0_0_#821C1C]
                                    btn-game-active">

                        ✕

                    </button>

                    {{-- BOX DALAM --}}

                    <div class="mt-8
                                    bg-[#F2E6D9]
                                    border-2
                                    border-[#784226]
                                    rounded-[29px]
                                    inner-wood-shadow
                                    pt-10
                                    pb-6
                                    px-5">

                        <form method="POST" action="{{ url('/login') }}" id="loginForm">

                            @csrf

                            <div>
                                @if($errors->has('login'))

                                                                <div class="mb-3

                                    rounded-lg

                                    bg-red-200

                                    border

                                    border-red-500

                                    text-red-700

                                    text-center

                                    py-2">

                                                                    {{ $errors->first('login') }}

                                                                </div>

                                @endif
                                <input name="password" id="username" type="text" placeholder="Username" class="w-full
                                                h-11
                                                rounded-xl
                                                border-3
                                                border-[#49220E]
                                                bg-[#5D3E24]
                                                text-center
                                                text-[#DABB86]
                                                font-game
                                                placeholder:text-[#DABB86]/60
                                                focus:outline-none">

                                <p id="usernameError" class="hidden
                                                mt-1
                                                text-center
                                                text-xs
                                                text-red-700">

                                </p>

                            </div>

                            <div>

                                <input id="password" type="password" placeholder="Password" autocomplete="current-password"
                                    class="w-full
                                                h-11
                                                rounded-xl
                                                border-3
                                                border-[#49220E]
                                                bg-[#5D3E24]
                                                text-center
                                                text-[#DABB86]
                                                font-game
                                                placeholder:text-[#DABB86]/60
                                                focus:outline-none">

                                <p id="passwordError" class="hidden
                                                mt-1
                                                text-center
                                                text-xs
                                                text-red-700">

                                </p>

                            </div>

                            <button type="button" onclick="window.location.href='/auth/google'" class="flex
                                            w-full
                                            h-[46px]
                                            justify-center
                                            items-center
                                            gap-2
                                            rounded-xl
                                            border-3
                                            border-[#49220E]
                                            bg-white
                                            shadow-[0_3px_0_0_#49220E]
                                            btn-game-active">

                                <span class="font-game
                                                text-[#5D3E24]
                                                text-[18px]">

                                    Sign in with Google

                                </span>

                            </button>

                            <div class="flex justify-center pt-2">

                                <button type="submit" class="flex
                                                w-[105px]
                                                h-[49px]
                                                justify-center
                                                items-center
                                                rounded-[10px]
                                                border-4
                                                border-[#452113]
                                                bg-gradient-to-b
                                                from-[#FFE4B6]
                                                to-[#F59E0B]
                                                shadow-[0_4px_0_0_#794017]
                                                btn-game-active">

                                    <span class="text-white
                                                    font-game
                                                    text-[34px]
                                                    text-stroke-thick">

                                        Next

                                    </span>

                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <script>

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

            panel.classList.remove("hidden");

            panel.classList.add("animate-fade-in");

            username.focus();

        });

        close.addEventListener("click", () => {

            panel.classList.add("hidden");

            panel.classList.remove("animate-fade-in");

            menu.classList.remove("hidden");

            form.reset();

            usernameError.classList.add("hidden");

            passwordError.classList.add("hidden");

        });

        form.addEventListener("submit", (e) => {

            e.preventDefault();

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

            if (password.value === "") {

                valid = false;

                passwordError.innerHTML = "Password wajib diisi";

                passwordError.classList.remove("hidden");

                password.classList.add("border-red-600");

            }

            if (password.value.length > 0 && password.value.length < 6) {

                valid = false;

                passwordError.innerHTML = "Password minimal 6 karakter";

                passwordError.classList.remove("hidden");

                password.classList.add("border-red-600");

            }

            if (valid) {

                window.location.href = "/home";

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

    </script>

@endsection
