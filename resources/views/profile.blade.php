@extends('layouts.guest')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-amber-50 to-orange-100 flex justify-center items-center">

    <div class="w-full max-w-[430px] h-screen md:h-[85vh] bg-repeat overflow-y-auto relative flex flex-col justify-between p-4 select-none animate-fade-in"
         style="background-image: url('{{ Vite::asset('resources/images/background/role_pattern_bg.png') }}'); background-size: 140px;">

        <div class="w-full bg-[#855300] bg-blend-screen rounded-[32px] border-4 border-[#49220E] shadow-[0_6px_0_0_#472211] p-4 mt-12 flex-1 flex flex-col relative"
             style="background-image: url('{{ Vite::asset('resources/images/background/wood_texture.png') }}'); bg-repeat">

            <div class="quest-title absolute -top-6 left-1/2 -translate-x-1/2 w-[190px] h-[52px] flex justify-center items-center rounded-[10px] border-4 border-[#3B4E7D] bg-gradient-to-b from-[#869EED] to-[#5789FF] shadow-[0_4px_0_0_#3B4E7D]">
                <span class="font-game text-[24px] text-white text-stroke-thick tracking-wide">
                    MY PROFILE
                </span>
            </div>

            <div class="w-full bg-[#F2E6D9] border-2 border-[#784226] rounded-[24px] inner-wood-shadow pt-8 pb-4 px-4 flex flex-col items-center flex-1 space-y-4">

                <div class="relative mt-2">
                    <div class="w-24 h-24 rounded-full border-4 border-[#49220E] bg-[#FFD9AB] flex justify-center items-center overflow-hidden shadow-md">
                        <img src="{{ Vite::asset('resources/images/character/bakery.png') }}" alt="Avatar" class="w-20 h-20 object-contain mt-2">
                    </div>
                    <div class="absolute -bottom-1 -right-1 bg-gradient-to-b from-[#FFE4B6] to-[#F59E0B] border-2 border-[#49220E] w-8 h-8 rounded-full flex items-center justify-center font-game text-white text-stroke-game text-sm shadow">
                        {{ auth()->user()->bakery->level ?? 1 }}
                    </div>
                </div>

                <!-- NAMA USER & EMAIL -->
                <div class="text-center space-y-0.5">
                    <h2 class="font-game text-[26px] text-[#49220E] text-stroke-home-small text-white tracking-wide">
                        {{ auth()->user()->username }}
                    </h2>
                    <p class="font-sans text-[13px] text-[#784226] font-bold opacity-80">
                        {{ auth()->user()->email }}
                    </p>
                </div>

                <div class="w-full bg-[#FFD9AB] border-2 border-[#784226] rounded-[16px] p-3 shadow-[inset_0_-4px_0_0_#FF9C45] space-y-2">
                    <div class="font-game text-[16px] text-[#49220E] border-b border-[#784226]/20 pb-1 uppercase tracking-wider">
                        Bakery Stats
                    </div>

                    <div class="flex justify-between items-center font-game text-[15px] text-[#5D3E24]">
                        <span>Bakery Name:</span>
                        <span class="text-[#49220E]">{{ session('bakery_name', auth()->user()->bakery->bakery_name ?? 'My Bakery') }}</span>
                    </div>

                    <div class="flex justify-between items-center font-game text-[15px] text-[#5D3E24]">
                        <span>Total Coins:</span>
                        <div class="flex items-center gap-1 text-[#49220E]">
                            <img src="{{ Vite::asset('resources/images/ui/coin.png') }}" class="w-4 h-4">
                            <span>{{ auth()->user()->bakery->coin ?? 50 }}</span>
                        </div>
                    </div>

                    <div class="flex justify-between items-center font-game text-[15px] text-[#5D3E24]">
                        <span>Current XP:</span>
                        <span class="text-blue-700">{{ auth()->user()->bakery->xp ?? 0 }} XP</span>
                    </div>
                </div>

                <div class="w-full pt-2 mt-auto">
                    <form method="POST" action="{{ url('/logout') }}">
                        @csrf
                        <button type="submit"
                                class="w-full h-[46px] flex justify-center items-center rounded-[12px] border-3 border-[#821C1C] bg-gradient-to-b from-[#E84F4F] to-[#BA3A3A] shadow-[0_4px_0_0_#821C1C] transition-all btn-game-active cursor-pointer">
                            <span class="font-game text-[20px] text-white text-stroke-thick tracking-wider uppercase">
                                Logout Game
                            </span>
                        </button>
                    </form>
                </div>

            </div>

        </div>

        <div class="flex justify-around items-end pt-6 pb-2 mt-auto">
            <a href="/home" class="opacity-85 hover:opacity-100 transition-opacity">
                <img src="{{ Vite::asset('resources/images/navbar/home_active.png') }}" class="w-[68px]" alt="Home">
            </a>

            <a href="/kdmp" class="opacity-85 hover:opacity-100 transition-opacity">
                <img src="{{ Vite::asset('resources/images/navbar/kdmp_inactive.png') }}" class="w-[68px]" alt="KDMP">
            </a>

            <a href="/profile" class="transform scale-110 -translate-y-1 transition-transform">
                <img src="{{ Vite::asset('resources/images/navbar/profile_inactive.png') }}" class="w-[68px]" alt="Profile">
            </a>
        </div>

    </div>
</div>
@endsection
