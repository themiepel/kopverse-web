@extends('layouts.guest')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-amber-50 to-orange-100 flex justify-center items-center">

        <div class="w-full max-w-[430px] h-screen md:h-[85vh] bg-repeat overflow-y-auto relative flex flex-col justify-between p-4 select-none"
            style="background-image: url('{{ Vite::asset('resources/images/background/role_pattern_bg.png') }}'); background-size: 140px;">

            <div class="space-y-3 mt-2">

                <div class="home-header flex items-center justify-between px-3 py-2">

                    <div class="flex items-center gap-3">
                        <div class="relative w-[48px] h-[48px]">
                            <img src="{{ Vite::asset('resources/images/ui/lv_bg.png') }}"
                                class="absolute inset-0 w-full h-full object-contain">

                            <span
                                class="absolute top-[6px] left-1/2 -translate-x-1/2 font-game text-[25px] leading-none text-[#9A3600]">
                                {{ auth()->user()->bakery->level }}
                            </span>

                            <span
                                class="absolute bottom-[2px] left-1/2 -translate-x-1/2 text-white text-stroke-home-small font-game text-[12px]">
                                LV
                            </span>
                        </div>

                        <span class="font-game text-[20px] text-white text-stroke-home">
                            {{ auth()->user()->bakery->bakery_name }}
                        </span>
                    </div>

                    <div class="flex gap-2">
                        {{-- KOIN --}}
                        <div class="coin-box flex items-center justify-end gap-1 px-1">
                            <img src="{{ Vite::asset('resources/images/ui/coin.png') }}" class="w-5 h-5">
                            <span class="font-game text-[15px] text-[#855300]">
                                {{ auth()->user()->bakery->coin }}
                            </span>
                        </div>

                        {{-- XP --}}
                        <div class="coin-box flex items-center justify-end gap-1 px-1 w-[72px]">
                            <img src="{{ Vite::asset('resources/images/ui/xp.png') }}" class="w-5 h-5">
                            <span class="font-game text-[15px] text-[#855300]">
                                {{ auth()->user()->bakery->xp }}
                            </span>
                        </div>
                    </div>

                </div>

                @php
                    $maxXp = auth()->user()->bakery->level * 100;
                    $progressXp = min(100, (auth()->user()->bakery->xp / $maxXp) * 100);
                @endphp

                <div class="level-progress-bg h-[24px] p-[3px]">
                    <div class="level-progress-fill h-full rounded-full" style="width:{{ $progressXp }}%"></div>
                </div>

            </div>

            <div class="home-bakery-card mt-3 px-2 py-0 flex items-center justify-between">

                <div class="flex flex-col justify-center">
                    <button
                        class="w-[110px] h-[48px] rounded-[10px] border-[3px] border-[#49220E] bg-gradient-to-b from-[#B0B325] to-[#859D0D] shadow-[0_4px_0_#472211] btn-game-active">
                        <span class="font-game text-[25px] text-white text-stroke-home">
                            Detail
                        </span>
                    </button>
                </div>

                <img src="{{ Vite::asset('resources/images/ui/bakery_house_bg.png') }}" class="w-[200px]">

            </div>

            @php
                $quests = auth()->user()->bakery->quests ?? collect();
            @endphp

            <div class="quest-board mt-6 p-3 relative">

                <div
                    class="quest-title absolute -top-6 left-1/2 -translate-x-1/2 w-[190px] h-[52px] flex justify-center items-center">
                    <span class="font-game text-[26px] text-white text-stroke-thick">
                        DAILY QUEST
                    </span>
                </div>

                <div class="quest-inner pt-9 pb-3 px-3">

                    <div class="flex justify-between items-center">
                        <div class="flex-1 mr-3">
                            <div class="quest-progress-bg h-[28px] p-[3px]">
                                <div class="quest-progress-fill h-full" style="width:40%"></div>
                            </div>
                        </div>
                        <div class="flex items-center gap-1">
                            <img src="{{ Vite::asset('resources/images/ui/xp.png') }}" class="w-10">
                            <span class="font-game text-[25px] text-stroke-home text-white">
                                5
                            </span>
                        </div>
                    </div>

                    <hr class="border-[#804214] my-4">

                    @forelse($quests as $quest)
                        @php
                            $percent = min(100, ($quest->progress / $quest->target) * 100);
                        @endphp

                        <div class="quest-item mb-3 p-3 flex items-center justify-between">

                            <div
                                class="w-[47px] h-[43px] rounded-[10px] border-2 border-[#784226] bg-gradient-to-b from-[#A9B021] to-[#8A9F10] shadow-[0_3px_0_#794017] flex justify-center items-center shrink-0">
                                <img src="{{ Vite::asset('resources/images/icon/coin.png') }}" class="w-7">
                            </div>

                            <div class="mx-3 flex-1">
                                <div class="font-game text-[18px] text-white text-stroke-home">
                                    {{ $quest->title }}
                                </div>

                                <div class="quest-mini-progress relative mt-2">
                                    <div class="absolute left-0 top-0 h-full rounded-full bg-gradient-to-b from-[#F8B16A] to-[#A44E1D]"
                                        style="width:{{ $percent }}%">
                                    </div>
                                    <div
                                        class="absolute inset-0 flex justify-center items-center font-game text-[#5D3E24] text-[20px]">
                                        {{ $quest->progress }} / {{ $quest->target }}
                                    </div>
                                </div>
                            </div>

                            @if($quest->progress >= $quest->target)
                                <button type="button" class="quest-claim w-[76px] h-[36px] btn-game-active cursor-pointer shrink-0">
                                    <span class="font-game text-[15px]">
                                        Claim
                                    </span>
                                </button>
                            @else
                                <button type="button" disabled
                                    class="w-[76px] h-[36px] rounded-[10px] border-2 border-gray-400 bg-gray-200 opacity-50 cursor-not-allowed shrink-0 font-game text-gray-400 text-[15px]">
                                    Claim
                                </button>
                            @endif

                        </div>
                    @empty
                        <div class="text-center font-game text-[#5D3E24] py-4">
                            Tidak ada quest
                        </div>
                    @endforelse

                </div>
            </div>

            <div class="mt-auto flex justify-around items-end pt-6 pb-2">
                <a href="/home" class="transform scale-110 -translate-y-1 transition-transform">
                    <img src="{{ Vite::asset('resources/images/navbar/home_active.png') }}" class="w-[68px]" alt="Home">
                </a>

                <a href="/kdmp" class="opacity-85 hover:opacity-100 transition-opacity">
                    <img src="{{ Vite::asset('resources/images/navbar/kdmp_inactive.png') }}" class="w-[68px]" alt="KDMP">
                </a>

                <a href="/profile" class="opacity-85 hover:opacity-100 transition-opacity">
                    <img src="{{ Vite::asset('resources/images/navbar/profile_inactive.png') }}" class="w-[68px]"
                        alt="Profile">
                </a>
            </div>

        </div>
    </div>
@endsection
