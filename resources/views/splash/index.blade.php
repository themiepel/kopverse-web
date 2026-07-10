@extends('layouts.guest')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-green-50 via-green-100 to-yellow-50 flex justify-center items-center">

        <div id="splash-screen"
            class="w-full max-w-[430px] h-screen md:h-[85vh] bg-cover bg-center md:rounded-[32px] md:shadow-2xl overflow-hidden relative flex flex-col justify-between p-8 select-none animate-fade-in"
            style="background-image: url('{{ Vite::asset('resources/images/background/login_bg.png') }}');">

            <div class="flex-1 flex items-center justify-center pt-20">
                <img src="{{ Vite::asset('resources/images/logo/kopverse_logo.png') }}" alt="KOPVERSE"
                    class="w-72 drop-shadow-[0_4px_8px_rgba(0,0,0,0.3)]">
            </div>

            <div class="w-full space-y-3 pb-12 px-4">
                <div
                    class="flex justify-between items-center text-[#FFF8F0] font-game tracking-[1.4px] text-[10px] uppercase">
                    <div class="flex items-center gap-1.5 drop-shadow-[0_1.5px_2px_rgba(0,0,0,0.6)]">
                        <svg class="animate-spin h-3 w-3 text-[#FFF8F0]" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                            </circle>
                            <path class="opacity-75" fill="currentColor"
                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                            </path>
                        </svg>
                        <span>Loading Shaders...</span>
                    </div>
                    <span id="loading-text" class="text-xs drop-shadow-[0_1.5px_2px_rgba(0,0,0,0.6)]">0%</span>
                </div>

                <div
                    class="w-full h-8 bg-[#5D3E24] border-3 border-[#A36A3B] rounded-full p-[3px] progress-container-shadow flex items-center">
                    <div id="progress-bar"
                        class="h-[18px] bg-gradient-to-b from-[#9BD64A] to-[#426900] rounded-full progress-bar-shadow transition-all duration-100 ease-out"
                        style="width: 0%;">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const progressBar = document.getElementById('progress-bar');
            const loadingText = document.getElementById('loading-text');
            const splashScreen = document.getElementById('splash-screen');
            let progress = 0;

            const interval = setInterval(() => {
                progress += Math.floor(Math.random() * 8) + 2;
                if (progress >= 100) {
                    progress = 100;
                    clearInterval(interval);
                    progressBar.style.width = '100%';
                    loadingText.innerText = '100%';

                    setTimeout(() => {
                        splashScreen.classList.remove('animate-fade-in');
                        splashScreen.classList.add('animate-fade-out');
                        setTimeout(() => {
                            window.location.href = '/login';
                        }, 600);
                    }, 400);
                } else {
                    progressBar.style.width = `${progress}%`;
                    loadingText.innerText = `${progress}%`;
                }
            }, 120);
        });
    </script>
@endsection
