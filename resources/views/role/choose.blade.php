@extends('layouts.guest')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-amber-50 to-orange-100 flex justify-center items-center">

        <div class="w-full max-w-[430px] h-screen md:h-[85vh] bg-repeat md:rounded-[32px] md:shadow-2xl overflow-hidden relative flex flex-col justify-center items-center p-6 select-none"
            style="background-image: url('{{ Vite::asset('resources/images/background/role_pattern_bg.png') }}'); background-size: 140px;">

            <div id="step-choose-role" class="w-full flex flex-col items-center transition-all duration-300">

                <div
                    class="flex w-[250px] h-[58px] justify-center items-center rounded-[10px] border-3 border-[#49220E] bg-gradient-to-b from-[#FF8787] to-[#FF8000] shadow-[0_4px_0_0_#472211] mb-8">
                    <span
                        class="w-[296px] h-[22px] flex flex-col justify-center text-center text-stroke-role font-game text-[32px] font-normal leading-none text-white tracking-wide">
                        Choose Role
                    </span>
                </div>

                <div class="w-full flex items-center justify-center gap-2 relative min-h-[350px]">

                    <button id="btn-prev" onclick="changeRole('prev')"
                        class="hidden absolute left-0 flex w-[49px] h-[50px] justify-center items-center rounded-full border-3 border-[#784226] bg-gradient-to-b from-[#FF7373] to-[#FFE169] shadow-[0_3px_0_0_#794017] btn-game-active cursor-pointer z-10">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="30" viewBox="0 0 28 30" fill="none"
                            class="rotate-180 transform translate-x-[2px]">
                            <path
                                d="M24.5269 10.2788C27.9189 12.1916 27.9189 17.0764 24.5269 18.9892L7.45601 28.6159C4.12293 30.4955 -1.506e-06 28.0872 -1.33873e-06 24.2607L-4.97144e-07 5.0073C-3.29881e-07 1.18077 4.12294 -1.22753 7.45601 0.652067L24.5269 10.2788Z"
                                fill="#452113" />
                        </svg>
                    </button>

                    <div
                        class="w-[290px] h-[310px] bg-[#855300] bg-blend-screen rounded-[36px] p-4 flex flex-col justify-between items-center border-4 border-[#49220E] shadow-[0_6px_0_0_#472211]">

                        <div
                            class="w-full h-full bg-[#F2E6D9] border-2 border-[#784226] rounded-[26px] inner-wood-shadow p-3 flex flex-col items-center justify-between relative">

                            <div id="role-card-content"
                                class="w-full flex flex-col items-center justify-center flex-1 transition-all duration-200 card-role-active">
                                <img id="role-img" src="{{ Vite::asset('resources/images/character/bakery.png') }}"
                                    alt="Bakery Role" class="w-40 h-40 object-contain">
                            </div>

                            <div
                                class="w-[160px] h-[38px] flex items-center justify-center rounded-[10px] border-3 border-[#49220E] bg-[#5D3E24] shadow-[inset_0_2px_4px_rgba(0,0,0,0.4)] mb-1">
                                <span id="role-label"
                                    class="font-game text-[18px] text-[#DABB86] uppercase tracking-wider">BAKERY</span>
                            </div>
                        </div>
                    </div>

                    <button id="btn-next" onclick="changeRole('next')"
                        class="absolute right-0 flex w-[49px] h-[50px] justify-center items-center rounded-full border-3 border-[#784226] bg-gradient-to-b from-[#FF7373] to-[#FFE169] shadow-[0_3px_0_0_#794017] btn-game-active cursor-pointer z-10">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="30" viewBox="0 0 28 30" fill="none">
                            <path
                                d="M24.5269 10.2788C27.9189 12.1916 27.9189 17.0764 24.5269 18.9892L7.45601 28.6159C4.12293 30.4955 -1.506e-06 28.0872 -1.33873e-06 24.2607L-4.97144e-07 5.0073C-3.29881e-07 1.18077 4.12294 -1.22753 7.45601 0.652067L24.5269 10.2788Z"
                                fill="#452113" />
                        </svg>
                    </button>
                </div>

                <button id="btn-confirm-role" onclick="goToNameBakery()"
                    class="flex w-[141px] h-[66px] px-4 py-1.5 justify-center items-center rounded-[10px] border-4 border-[#49220E] bg-gradient-to-b from-[#B0B325] to-[#859D0D] shadow-[0_4px_0_0_#472211] btn-game-active cursor-pointer mt-8">
                    <span
                        class="w-[190px] h-[22px] flex flex-col justify-center text-center text-stroke-thick font-game text-[45px] font-normal leading-[22px] text-white">
                        OK
                    </span>
                </button>
            </div>


            <div id="step-name-bakery" class="w-full flex flex-col items-center hidden transition-all duration-300">

                <div
                    class="flex w-[270px] h-[58px] justify-center items-center rounded-[10px] border-3 border-[#49220E] bg-gradient-to-b from-[#FF8787] to-[#FF8000] shadow-[0_4px_0_0_#472211] mb-8">
                    <span
                        class="w-[296px] h-[22px] flex flex-col justify-center text-center text-stroke-role font-game text-[26px] font-normal leading-none text-white tracking-wide whitespace-nowrap">
                        Name your bakery
                    </span>
                </div>

                <div
                    class="w-[290px] h-[240px] bg-[#855300] bg-blend-screen rounded-[36px] p-4 flex flex-col justify-center items-center border-4 border-[#49220E] shadow-[0_6px_0_0_#472211]">

                    <div
                        class="w-full h-full bg-[#F2E6D9] border-2 border-[#784226] rounded-[26px] inner-wood-shadow p-5 flex flex-col items-center justify-center space-y-5">

                        <form id="form-bakery" action="/bakery/create" method="POST"
                            class="w-full flex flex-col items-center space-y-5">
                            @csrf
                            <div class="w-full relative">
                                <input type="text" name="bakery_name" placeholder="name bakery" required
                                    class="w-full h-12 bg-[#5D3E24] border-3 border-[#49220E] rounded-[12px] px-3 text-[#DABB86] font-game text-[20px] placeholder-[#DABB86]/40 text-center focus:outline-none shadow-[inset_0_4px_4px_rgba(0,0,0,0.3)]">
                            </div>

                            <button type="submit"
                                class="flex w-[141px] h-[66px] px-4 py-1.5 justify-center items-center rounded-[10px] border-4 border-[#49220E] bg-gradient-to-b from-[#B0B325] to-[#859D0D] shadow-[0_4px_0_0_#472211] btn-game-active cursor-pointer">
                                <span
                                    class="w-[190px] h-[22px] flex flex-col justify-center text-center text-stroke-thick font-game text-[45px] font-normal leading-[22px] text-white">
                                    PLAY
                                </span>
                            </button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        const roles = [
            { id: 'bakery', name: 'BAKERY', image: "{{ Vite::asset('resources/images/character/bakery.png') }}", locked: false },
            { id: 'farmer', name: 'FARMER', image: "{{ Vite::asset('resources/images/character/farmer.png') }}", locked: true }
        ];

        let currentIdx = 0;

        function changeRole(direction) {
            if (direction === 'next' && currentIdx < roles.length - 1) {
                currentIdx++;
            } else if (direction === 'prev' && currentIdx > 0) {
                currentIdx--;
            }
            updateRoleUI();
        }

        function updateRoleUI() {
            const role = roles[currentIdx];
            const imgEl = document.getElementById('role-img');
            const labelEl = document.getElementById('role-label');
            const contentEl = document.getElementById('role-card-content');
            const btnConfirm = document.getElementById('btn-confirm-role');

            // Update teks dan gambar
            imgEl.src = role.image;
            labelEl.innerText = role.name;

            // Atur Navigasi Tombol Panah (Sembunyikan jika mentok)
            document.getElementById('btn-prev').style.display = currentIdx === 0 ? 'none' : 'flex';
            document.getElementById('btn-next').style.display = currentIdx === roles.length - 1 ? 'none' : 'flex';

            // Logika Status Terkunci (Disabled)
            if (role.locked) {
                contentEl.classList.remove('card-role-active');
                contentEl.classList.add('opacity-50', 'grayscale');
                btnConfirm.disabled = true;
                btnConfirm.classList.add('opacity-50', 'cursor-not-allowed');

                // Tambahkan ikon gembok jika belum ada
                if (!document.getElementById('lock-icon')) {
                    const lock = document.createElement('div');
                    lock.id = 'lock-icon';
                    lock.className = 'absolute inset-0 flex items-center justify-center';
                    lock.innerHTML = `<div class="bg-white/80 border-4 border-[#49220E] p-3 rounded-2xl shadow-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#49220E" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4zm5 4v2"></path></svg>
                                      </div>`;
                    contentEl.appendChild(lock);
                }
            } else {
                contentEl.classList.add('card-role-active');
                contentEl.classList.remove('opacity-50', 'grayscale');
                btnConfirm.disabled = false;
                btnConfirm.classList.remove('opacity-50', 'cursor-not-allowed');

                const lockIcon = document.getElementById('lock-icon');
                if (lockIcon) lockIcon.remove();
            }
        }

        // Pindah ke Sub-Laman Pengisian Nama Toko Roti
        function goToNameBakery() {
            if (roles[currentIdx].locked) return;

            document.getElementById('step-choose-role').classList.add('hidden');
            document.getElementById('step-name-bakery').classList.remove('hidden');
        }

        // Inisialisasi awal saat halaman dimuat
        document.addEventListener('DOMContentLoaded', () => {
            updateRoleUI();
        });
    </script>
@endsection
