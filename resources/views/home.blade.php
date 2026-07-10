@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-gradient-to-br from-green-50 via-green-100 to-yellow-50">

    <div class="flex justify-center items-center min-h-screen">

        <div class="w-full max-w-[430px] bg-white md:rounded-[32px] md:shadow-2xl overflow-hidden">

            <div class="p-6 space-y-4">

                <h1 class="text-2xl font-bold">
                    KOPVERSE
                </h1>

                <x-ui.button>
                    Login
                </x-ui.button>

                <x-ui.button variant="secondary">
                    Play
                </x-ui.button>

                <x-ui.button variant="outline">
                    Register
                </x-ui.button>

            </div>

        </div>

    </div>

</div>

@endsection
