<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        Masukkan kode OTP yang telah dikirim ke email Anda.
    </div>

    <form method="POST" action="{{ route('verification.otp.submit') }}">
        @csrf

        <div>
            <x-input-label for="otp" :value="'Kode OTP'" />
            <x-text-input id="otp" class="block mt-1 w-full" type="text" name="otp" maxlength="6" required autofocus />
            <x-input-error :messages="$errors->get('otp')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                Verifikasi
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
