@extends('layouts.guest')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-amber-50 to-orange-100 flex justify-center items-center">

    <div class="w-full max-w-[430px] h-screen md:h-[85vh] bg-repeat overflow-y-auto relative flex flex-col justify-between p-4 select-none animate-fade-in"
         style="background-image: url('{{ Vite::asset('resources/images/background/role_pattern_bg.png') }}'); background-size: 140px;">

        <div class="w-full bg-[#FFF2E0] border-4 border-[#49220E] rounded-[24px] shadow-[0_6px_0_0_#472211] p-4 mt-6 relative flex items-center justify-between min-h-[110px]">

            <button onclick="window.location.href='/home'"
                    class="absolute -top-4 -left-3 flex w-[53px] h-[53px] p-[6px_16px] justify-center items-center rounded-full border-3 border-[#821C1C] bg-gradient-to-b from-[#E84F4F] to-[#BA3A3A] shadow-[0_3px_0_0_#821C1C] transition-all btn-game-active cursor-pointer z-10">
                <svg xmlns="http://www.w3.org/2000/svg" width="41" height="25" viewBox="0 0 41 25" fill="none" class="w-7 h-5">
                    <path d="M21.166 1.00098C31.59 1.00098 39.9999 9.64549 40 20.2607C40 21.2449 39.6181 22.1935 38.9316 22.8965C38.2444 23.6001 37.3074 23.9999 36.3252 24C35.3428 24 34.4051 23.6002 33.7178 22.8965C33.0313 22.1936 32.6494 21.2449 32.6494 20.2607L32.6416 19.8076C32.5576 17.5483 31.8412 15.3595 30.5762 13.5039C29.2271 11.525 27.3199 10.0218 25.1152 9.19336C22.9106 8.36503 20.511 8.24994 18.2412 8.86328C17.0481 9.18575 15.9206 9.70266 14.8975 10.3867L16.4395 10.1094C16.9156 10.0164 17.4051 10.0207 17.8799 10.1211H17.8809C18.3021 10.2103 18.7036 10.3733 19.0674 10.6025L19.2207 10.7051L19.3691 10.8145C19.7082 11.079 19.9988 11.4021 20.2285 11.7676C20.4909 12.1851 20.6683 12.6511 20.752 13.1377C20.8356 13.6244 20.8237 14.1234 20.7168 14.6055C20.6098 15.0874 20.4103 15.5441 20.1279 15.9482C19.8454 16.3526 19.4859 16.6972 19.0693 16.96C18.6582 17.2193 18.1997 17.3926 17.7207 17.4717L17.7217 17.4727L7.70215 19.2822C6.63388 19.6007 5.39464 19.4441 4.42773 18.752L4.28027 18.6406C3.55933 18.069 3.07905 17.2462 2.92285 16.3398L1.06445 5.54785L1.06543 5.54688C0.976188 5.06803 0.978859 4.5762 1.0752 4.09863C1.17285 3.61453 1.36411 3.15392 1.63867 2.74414C1.91323 2.33441 2.26559 1.9829 2.67676 1.71191C3.08808 1.44085 3.54987 1.25624 4.03418 1.16895C4.51841 1.08169 5.01486 1.09361 5.49414 1.20508C5.97348 1.31657 6.42481 1.52526 6.82227 1.81641C7.21963 2.1075 7.5552 2.4757 7.80957 2.89844C8.06039 3.31538 8.22695 3.77772 8.30273 4.25879H8.30371L8.58984 5.9209C10.0496 4.57915 11.7105 3.47692 13.5127 2.65723C15.9212 1.56179 18.5288 0.997869 21.166 1.00098Z" fill="white" stroke="#811C1C" stroke-width="2"/>
                </svg>
            </button>

            <div class="flex w-[175px] h-[44px] justify-center items-center rounded-[10px] border-3 border-[#3B4E7D] bg-gradient-to-b from-[#869EED] to-[#5789FF] shadow-[0_4px_0_#3B4E7D] ml-6">
                <span class="font-game text-[20px] text-white text-stroke-thick tracking-wide whitespace-nowrap">
                    KDMP SERVICE
                </span>
            </div>

            <img src="{{ Vite::asset('resources/images/ui/kdmp_building.png') }}" alt="KDMP Building" class="w-28 object-contain">
        </div>

        <div class="w-full bg-[#855300] bg-blend-screen rounded-[32px] border-4 border-[#49220E] shadow-[0_6px_0_0_#472211] p-4 mt-6 flex-1 flex flex-col justify-start space-y-4"
             style="background-image: url('{{ Vite::asset('resources/images/background/wood_texture.png') }}'); bg-repeat">

            <div class="grid grid-cols-2 gap-4">

                <button onclick="window.location.href='/kdmp/savings'"
                        class="h-[140px] rounded-[29px] border-2 border-[#784226] bg-[#C87920] btn-kdmp-orange-shadow p-3 flex flex-col items-center justify-center gap-1 transition-all btn-game-active cursor-pointer">
                    <img src="{{ Vite::asset('resources/images/icon/savings_icon.png') }}" alt="Savings" class="w-20 h-16 object-contain">
                    <span class="font-game text-[20px] text-white text-stroke-game uppercase tracking-wide">Savings</span>
                </button>

                <button onclick="window.location.href='/kdmp/financing'"
                        class="h-[140px] rounded-[29px] border-2 border-[#784226] bg-[#C87920] btn-kdmp-orange-shadow p-3 flex flex-col items-center justify-center gap-1 transition-all btn-game-active cursor-pointer">
                    <img src="{{ Vite::asset('resources/images/icon/financing_icon.png') }}" alt="Financing" class="w-20 h-16 object-contain">
                    <span class="font-game text-[20px] text-white text-stroke-game uppercase tracking-wide">Financing</span>
                </button>

            </div>

            <div class="w-full h-[125px] rounded-[29px] border-2 border-[#784226] bg-[#F2E6D9] btn-kdmp-cream-shadow p-4 flex items-center justify-between relative overflow-hidden">

                <div class="flex items-center">
                    <img src="{{ Vite::asset('resources/images/background/store_building.png') }}" alt="Store" class="w-28 h-24 object-contain">
                </div>

                <button onclick="window.location.href='/kdmp/store'"
                        class="flex w-[99px] h-[38px] justify-center items-center rounded-[10px] border-3 border-[#49220E] bg-gradient-to-b from-[#B0B325] to-[#859D0D] shadow-[0_4px_0_0_#472211] transition-all btn-game-active cursor-pointer">
                    <span class="font-game text-[22px] text-white text-stroke-game leading-none">
                        Store
                    </span>
                </button>
            </div>

        </div>

        <div class="flex justify-around items-end pt-6 pb-2 mt-auto">
            <!-- Home (Tidak aktif) -->
            <a href="/home" class="opacity-85 hover:opacity-100 transition-opacity">
                <img src="{{ Vite::asset('resources/images/navbar/home_active.png') }}" class="w-[68px]" alt="Home">
            </a>

            <a href="/kdmp" class="transform scale-110 -translate-y-1 transition-transform">
                <img src="{{ Vite::asset('resources/images/navbar/kdmp_inactive.png') }}" class="w-[68px]" alt="KDMP">
            </a>

            <a href="/profile" class="opacity-85 hover:opacity-100 transition-opacity">
                <img src="{{ Vite::asset('resources/images/navbar/profile_inactive.png') }}" class="w-[68px]" alt="Profile">
            </a>
        </div>

    </div>
</div>
@endsection
