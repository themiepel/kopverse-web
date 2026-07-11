@extends('layouts.guest')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-amber-50 to-orange-100 flex justify-center items-center">

        <div class="w-full max-w-[430px] h-screen md:h-[85vh] bg-repeat overflow-y-auto relative flex flex-col p-4 select-none animate-fade-in"
            style="background-image: url('{{ Vite::asset('resources/images/background/role_pattern_bg.png') }}'); background-size: 140px;">

            <div
                class="w-full bg-[#C87920] border-4 border-[#784226] rounded-[19px] financing-top-shadow p-5 mt-14 relative flex flex-col min-h-[170px]">

                <button onclick="window.location.href='/kdmp'"
                    class="absolute -top-6 -left-3 flex w-[53px] h-[53px] justify-center items-center rounded-full border-3 border-[#821C1C] bg-gradient-to-b from-[#E84F4F] to-[#BA3A3A] shadow-[0_3px_0_0_#821C1C] transition-all btn-game-active cursor-pointer z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="41" height="25" viewBox="0 0 41 25" fill="none"
                        class="w-7 h-5">
                        <path
                            d="M21.166 1.00098C31.59 1.00098 39.9999 9.64549 40 20.2607C40 21.2449 39.6181 22.1935 38.9316 22.8965C38.2444 23.6001 37.3074 23.9999 36.3252 24C35.3428 24 34.4051 23.6002 33.7178 22.8965C33.0313 22.1936 32.6494 21.2449 32.6494 20.2607L32.6416 19.8076C32.5576 17.5483 31.8412 15.3595 30.5762 13.5039C29.2271 11.525 27.3199 10.0218 25.1152 9.19336C22.9106 8.36503 20.511 8.24994 18.2412 8.86328C17.0481 9.18575 15.9206 9.70266 14.8975 10.3867L16.4395 10.1094C16.9156 10.0164 17.4051 10.0207 17.8799 10.1211H17.8809C18.3021 10.2103 18.7036 10.3733 19.0674 10.6025L19.2207 10.7051L19.3691 10.8145C19.7082 11.079 19.9988 11.4021 20.2285 11.7676C20.4909 12.1851 20.6683 12.6511 20.752 13.1377C20.8356 13.6244 20.8237 14.1234 20.7168 14.6055C20.6098 15.0874 20.4103 15.5441 20.1279 15.9482C19.8454 16.3526 19.4859 16.6972 19.0693 16.96C18.6582 17.2193 18.1997 17.3926 17.7207 17.4717L17.7217 17.4727L7.70215 19.2822C6.63388 19.6007 5.39464 19.4441 4.42773 18.752L4.28027 18.6406C3.55933 18.069 3.07905 17.2462 2.92285 16.3398L1.06445 5.54785L1.06543 5.54688C0.976188 5.06803 0.978859 4.5762 1.0752 4.09863C1.17285 3.61453 1.36411 3.15392 1.63867 2.74414C1.91323 2.33441 2.26559 1.9829 2.67676 1.71191C3.08808 1.44085 3.54987 1.25624 4.03418 1.16895C4.51841 1.08169 5.01486 1.09361 5.49414 1.20508C5.97348 1.31657 6.42481 1.52526 6.82227 1.81641C7.21963 2.1075 7.5552 2.4757 7.80957 2.89844C8.06039 3.31538 8.22695 3.77772 8.30273 4.25879H8.30371L8.58984 5.9209C10.0496 4.57915 11.7105 3.47692 13.5127 2.65723C15.9212 1.56179 18.5288 0.997869 21.166 1.00098Z"
                            fill="white" stroke="#811C1C" stroke-width="2" />
                    </svg>
                </button>

                <div
                    class="quest-title absolute -top-6 left-1/2 -translate-x-1/2 w-[220px] h-[52px] flex justify-center items-center rounded-[10px] border-4 border-[#3B4E7D] bg-gradient-to-b from-[#869EED] to-[#5789FF] shadow-[0_4px_0_0_#3B4E7D]">
                    <span class="font-game text-[24px] text-white text-stroke-thick tracking-wide whitespace-nowrap">
                        Peminjaman aktif
                    </span>
                </div>

                <div class="flex items-center justify-center gap-2 mt-4 mb-3">
                    <img src="{{ Vite::asset('resources/images/ui/coin.png') }}" class="w-11 h-11 object-contain"
                        alt="Coin Icon">
                    <span class="font-game text-[48px] text-white text-stroke-thick leading-none tracking-wide">
                        1456
                    </span>
                </div>

                <div
                    class="w-full h-5 bg-[#5D3E24] border-3 border-[#49220E] rounded-full p-[2px] progress-container-shadow mb-4">
                    <div
                        class="h-full w-[65%] bg-gradient-to-b from-[#9BD64A] to-[#426900] rounded-full progress-bar-shadow">
                    </div>
                </div>

                <div class="flex justify-between items-start w-full px-2 text-white">
                    <div class="flex flex-col items-start space-y-1">
                        <span class="font-game text-[18px] text-stroke-small-brown leading-none">Sisa cicilan</span>
                        <div class="flex items-center gap-1">
                            <img src="{{ Vite::asset('resources/images/ui/coin.png') }}" class="w-4 h-4 object-contain">
                            <span class="font-game text-[20px] text-stroke-thin-blue leading-none">456</span>
                        </div>
                    </div>

                    <div class="flex flex-col items-end space-y-1">
                        <span class="font-game text-[18px] text-stroke-small-brown leading-none">Jatuh tempo</span>
                        <span
                            class="font-game text-[20px] text-stroke-thin-blue leading-none text-right whitespace-nowrap">10
                            juli 2026</span>
                    </div>
                </div>

            </div>

            <div class="w-full bg-[#855300] bg-blend-screen rounded-[32px] border-4 border-[#49220E] shadow-[0_6px_0_0_#472211] p-4 mt-6 flex-1 flex flex-col relative"
                style="background-image: url('{{ Vite::asset('resources/images/background/wood_texture.png') }}'); bg-repeat">

                <div class="w-full border-b-2 border-[#784226]/40 pb-2 mb-4">
                    <span class="font-game text-[26px] text-white text-stroke-thick tracking-wide block">
                        Riwayat pembiayaan
                    </span>
                </div>

                <div
                    class="w-full bg-[#FFD9AB] border-2 border-[#784226] rounded-[19px] p-4 flex items-center justify-between shadow-[inset_0_-4px_0_0_#FF9C45]">

                    <div class="flex flex-col items-start space-y-2">
                        <span class="font-game text-[18px] text-white text-stroke-small-brown leading-none tracking-wide">
                            Pinjaman modal usaha
                        </span>
                        <div
                            class="bg-gradient-to-b from-[#9BD64A] to-[#426900] border-2 border-[#49220E] rounded-full px-3 py-0.5 shadow-sm">
                            <span class="font-game text-[15px] text-white text-stroke-small-brown uppercase tracking-wider">
                                Aktif
                            </span>
                        </div>
                    </div>

                    <div class="flex flex-col items-end space-y-3">
                        <div
                            class="bg-[#9BD64A] border-2 border-[#49220E] rounded-lg px-2.5 py-1 flex items-center gap-1 shadow-sm">
                            <img src="{{ Vite::asset('resources/images/ui/coin.png') }}" class="w-4 h-4 object-contain">
                            <span class="font-game text-[15px] text-white text-stroke-small-brown">1080</span>
                        </div>

                        <button onclick="payInstallment()"
                            class="flex w-[115px] h-[34px] justify-center items-center rounded-[10px] border-2 border-[#597250] bg-gradient-to-b from-[#98B9FD] to-[#8690FF] shadow-[0_2px_0_0_#597250] transition-all btn-game-active cursor-pointer">
                            <span class="font-game text-[15px] text-white text-stroke-thick leading-none tracking-wide">
                                Bayar cicilan
                            </span>
                        </button>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <script>
        function payInstallment() {
            alert("Cicilan berhasil dibayarkan! Mengurangi saldo koin utama...");
        }
    </script>
@endsection
