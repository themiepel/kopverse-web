@extends('layouts.guest')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-amber-50 to-orange-100 flex justify-center items-center">

        <div class="w-full max-w-[430px] h-screen md:h-[85vh] bg-repeat overflow-y-auto relative flex flex-col p-4 select-none animate-fade-in"
            style="background-image: url('{{ Vite::asset('resources/images/background/catur.png') }}'); background-size: 140px;">

            <div class="w-full bg-[#855300] bg-blend-screen rounded-[32px] border-4 border-[#49220E] shadow-[0_6px_0_0_#472211] p-4"
                style="background-image: url('{{ Vite::asset('resources/images/background/wood_texture.png') }}'); bg-repeat">

                <button onclick="window.location.href='/kdmp'"
                    class="absolute -top-5 -left-3 flex w-[53px] h-[53px] justify-center items-center rounded-full border-3 border-[#821C1C] bg-gradient-to-b from-[#E84F4F] to-[#BA3A3A] shadow-[0_3px_0_0_#821C1C] transition-all btn-game-active cursor-pointer z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="41" height="25" viewBox="0 0 41 25" fill="none"
                        class="w-7 h-5">
                        <path
                            d="M21.166 1.00098C31.59 1.00098 39.9999 9.64549 40 20.2607C40 21.2449 39.6181 22.1935 38.9316 22.8965C38.2444 23.6001 37.3074 23.9999 36.3252 24C35.3428 24 34.4051 23.6002 33.7178 22.8965C33.0313 22.1936 32.6494 21.2449 32.6494 20.2607L32.6416 19.8076C32.5576 17.5483 31.8412 15.3595 30.5762 13.5039C29.2271 11.525 27.3199 10.0218 25.1152 9.19336C22.9106 8.36503 20.511 8.24994 18.2412 8.86328C17.0481 9.18575 15.9206 9.70266 14.8975 10.3867L16.4395 10.1094C16.9156 10.0164 17.4051 10.0207 17.8799 10.1211H17.8809C18.3021 10.2103 18.7036 10.3733 19.0674 10.6025L19.2207 10.7051L19.3691 10.8145C19.7082 11.079 19.9988 11.4021 20.2285 11.7676C20.4909 12.1851 20.6683 12.6511 20.752 13.1377C20.8356 13.6244 20.8237 14.1234 20.7168 14.6055C20.6098 15.0874 20.4103 15.5441 20.1279 15.9482C19.8454 16.3526 19.4859 16.6972 19.0693 16.96C18.6582 17.2193 18.1997 17.3926 17.7207 17.4717L17.7217 17.4727L7.70215 19.2822C6.63388 19.6007 5.39464 19.4441 4.42773 18.752L4.28027 18.6406C3.55933 18.069 3.07905 17.2462 2.92285 16.3398L1.06445 5.54785L1.06543 5.54688C0.976188 5.06803 0.978859 4.5762 1.0752 4.09863C1.17285 3.61453 1.36411 3.15392 1.63867 2.74414C1.91323 2.33441 2.26559 1.9829 2.67676 1.71191C3.08808 1.44085 3.54987 1.25624 4.03418 1.16895C4.51841 1.08169 5.01486 1.09361 5.49414 1.20508C5.97348 1.31657 6.42481 1.52526 6.82227 1.81641C7.21963 2.1075 7.5552 2.4757 7.80957 2.89844C8.06039 3.31538 8.22695 3.77772 8.30273 4.25879H8.30371L8.58984 5.9209C10.0496 4.57915 11.7105 3.47692 13.5127 2.65723C15.9212 1.56179 18.5288 0.997869 21.166 1.00098Z"
                            fill="white" stroke="#811C1C" stroke-width="2" />
                    </svg>
                </button>

                <div
                    class="quest-title absolute -top-6 left-1/2 -translate-x-1/2 w-[190px] h-[52px] flex justify-center items-center rounded-[10px] border-4 border-[#3B4E7D] bg-gradient-to-b from-[#869EED] to-[#5789FF] shadow-[0_4px_0_0_#3B4E7D]">
                    <span class="font-game text-[26px] text-white text-stroke-thick tracking-wide">
                        STORE
                    </span>
                </div>

                <div class="grid grid-cols-3 gap-2 mt-8">

                    <div onclick="selectItem('sugar', 12, 'sugar_icon.png')"
                        class="rounded-[19px] border-2 border-[#784226] bg-[#FFD9AB] store-card-shadow p-2 flex flex-col items-center relative cursor-pointer active:scale-95 transition-transform">
                        <span id="stock-sugar"
                            class="absolute -top-2 -right-1 bg-[#5D3E24] text-[#DABB86] font-game text-[10px] px-1.5 py-0.5 rounded-full border border-[#49220E]">
                            5/10
                        </span>
                        <div
                            class="w-16 h-16 rounded-[16px] border border-[#A06400] bg-gradient-to-b from-[#FDD898] to-[#F7A721] store-icon-shadow flex justify-center items-center mt-2">
                            <img src="{{ Vite::asset('resources/images/ui/sugar.png') }}" class="w-12 h-12 object-contain"
                                alt="Sugar">
                        </div>
                        <span class="font-game text-[14px] text-[#5D3E24] mt-1">Sugar</span>
                        <div
                            class="w-full bg-[#9BD64A] border-2 border-[#49220E] rounded-lg py-0.5 flex items-center justify-center gap-0.5 mt-1">
                            <div class="w-3 h-3 bg-amber-400 border border-[#49220E] rounded-full"></div>
                            <span class="font-game text-[12px] text-[#49220E]">12</span>
                        </div>
                    </div>

                    <!-- BARANG 2: FLOUR -->
                    <div onclick="selectItem('flour', 18, 'flour.png')"
                        class="rounded-[19px] border-2 border-[#784226] bg-[#FFD9AB] store-card-shadow p-2 flex flex-col items-center relative cursor-pointer active:scale-95 transition-transform">
                        <span id="stock-flour"
                            class="absolute -top-2 -right-1 bg-[#5D3E24] text-[#DABB86] font-game text-[10px] px-1.5 py-0.5 rounded-full border border-[#49220E]">
                            5/10
                        </span>
                        <div
                            class="w-16 h-16 rounded-[16px] border border-[#A06400] bg-gradient-to-b from-[#FDD898] to-[#F7A721] store-icon-shadow flex justify-center items-center mt-2">
                            <img src="{{ Vite::asset('resources/images/ui/flour.png') }}" class="w-12 h-12 object-contain"
                                alt="Flour">
                        </div>
                        <span class="font-game text-[14px] text-[#5D3E24] mt-1">Flour</span>
                        <div
                            class="w-full bg-[#9BD64A] border-2 border-[#49220E] rounded-lg py-0.5 flex items-center justify-center gap-0.5 mt-1">
                            <div class="w-3 h-3 bg-amber-400 border border-[#49220E] rounded-full"></div>
                            <span class="font-game text-[12px] text-[#49220E]">18</span>
                        </div>
                    </div>

                    <div onclick="selectItem('egg', 8, 'egg_icon.png')"
                        class="rounded-[19px] border-2 border-[#784226] bg-[#FFD9AB] store-card-shadow p-2 flex flex-col items-center relative cursor-pointer active:scale-95 transition-transform">
                        <span id="stock-egg"
                            class="absolute -top-2 -right-1 bg-[#5D3E24] text-[#DABB86] font-game text-[10px] px-1.5 py-0.5 rounded-full border border-[#49220E]">
                            5/10
                        </span>
                        <div
                            class="w-16 h-16 rounded-[16px] border border-[#A06400] bg-gradient-to-b from-[#FDD898] to-[#F7A721] store-icon-shadow flex justify-center items-center mt-2">
                            <img src="{{ Vite::asset('resources/images/ui/sugar.png') }}" class="w-12 h-12 object-contain"
                                alt="Egg">
                        </div>
                        <span class="font-game text-[14px] text-[#5D3E24] mt-1">Egg</span>
                        <div
                            class="w-full bg-[#9BD64A] border-2 border-[#49220E] rounded-lg py-0.5 flex items-center justify-center gap-0.5 mt-1">
                            <div class="w-3 h-3 bg-amber-400 border border-[#49220E] rounded-full"></div>
                            <span class="font-game text-[12px] text-[#49220E]">8</span>
                        </div>
                    </div>

                </div>

                <div class="mt-8 space-y-2">
                    <div class="font-game text-[26px] text-white text-stroke-thick tracking-wide">
                        Total:
                    </div>

                    <div
                        class="w-full h-16 bg-[#CC6E2A] border-3 border-[#5D3E24] rounded-[12px] store-total-shadow px-4 flex items-center justify-between">

                        <div id="total-preview-box" class="flex items-center gap-2 opacity-30">
                            <div
                                class="relative w-10 h-10 bg-white/20 border border-[#5D3E24] rounded-lg flex justify-center items-center">
                                <img id="total-item-img" src="{{ Vite::asset('resources/images/ui/sugar.png') }}"
                                    class="w-8 h-8 object-contain">
                                <span id="total-qty-badge"
                                    class="absolute -top-1.5 -right-1.5 bg-amber-500 text-white font-game text-[11px] w-5 h-5 rounded-full border border-[#49220E] flex items-center justify-center shadow-sm">
                                    0
                                </span>
                            </div>
                        </div>

                        <div class="flex items-center gap-1.5">
                            <div class="w-5 h-5 bg-amber-400 border-2 border-[#49220E] rounded-full shadow-sm"></div>
                            <span id="total-cost-text" class="font-game text-[30px] text-white leading-none">
                                0
                            </span>
                        </div>

                    </div>
                </div>

                <div class="w-full flex justify-end mt-6">
                    <button id="btn-buy" onclick="processPurchase()" disabled
                        class="flex w-[99px] h-[38px] justify-center items-center rounded-[10px] border-3 border-gray-400 bg-gray-300 text-gray-400 opacity-50 cursor-not-allowed transition-all">
                        <span class="font-game text-[22px] leading-none">
                            Buy
                        </span>
                    </button>
                </div>

            </div>

        </div>
    </div>

    <script>
        let currentSelectedItem = null;
        let currentItemPrice = 0;
        let selectedQuantity = 0;

        const storeInventory = {
            sugar: { current: 5, max: 10 },
            flour: { current: 5, max: 10 },
            egg: { current: 5, max: 10 }
        };

        function selectItem(itemKey, price, imageName) {
            if (storeInventory[itemKey].current <= 0) {
                alert("Stok barang di koperasi habis!");
                return;
            }

            if (currentSelectedItem !== itemKey) {
                currentSelectedItem = itemKey;
                currentItemPrice = price;
                selectedQuantity = 1;
            } else {
                if (selectedQuantity < storeInventory[itemKey].current) {
                    selectedQuantity++;
                }
            }

            updateStoreUI();
        }

        function updateStoreUI() {
            const previewBox = document.getElementById('total-preview-box');
            const imgEl = document.getElementById('total-item-img');
            const qtyBadge = document.getElementById('total-qty-badge');
            const costText = document.getElementById('total-cost-text');
            const buyBtn = document.getElementById('btn-buy');

            if (currentSelectedItem) {
                previewBox.classList.remove('opacity-30');
                imgEl.src = `{{ Vite::asset('resources/images/item/') }}${currentSelectedItem}_icon.png`;
                qtyBadge.innerText = selectedQuantity;
                costText.innerText = currentItemPrice * selectedQuantity;

                buyBtn.disabled = false;
                buyBtn.className = "flex w-[99px] h-[38px] justify-center items-center rounded-[10px] border-3 border-[#49220E] bg-gradient-to-b from-[#B0B325] to-[#859D0D] shadow-[0_4px_0_0_#472211] text-white text-stroke-game transition-all btn-game-active cursor-pointer";
            }
        }

        function processPurchase() {
            if (!currentSelectedItem) return;

            storeInventory[currentSelectedItem].current -= selectedQuantity;

            const stockLabel = document.getElementById(`stock-${currentSelectedItem}`);
            stockLabel.innerText = `${storeInventory[currentSelectedItem].current}/${storeInventory[currentSelectedItem].max}`;

            alert(`Sukses membeli ${selectedQuantity} ${currentSelectedItem}!`);

            currentSelectedItem = null;
            currentItemPrice = 0;
            selectedQuantity = 0;

            document.getElementById('total-preview-box').classList.add('opacity-30');
            document.getElementById('total-qty-badge').innerText = '0';
            document.getElementById('total-cost-text').innerText = '0';

            const buyBtn = document.getElementById('btn-buy');
            buyBtn.disabled = true;
            buyBtn.className = "flex w-[99px] h-[38px] justify-center items-center rounded-[10px] border-3 border-gray-400 bg-gray-300 text-gray-400 opacity-50 cursor-not-allowed transition-all";
        }
    </script>
@endsection
