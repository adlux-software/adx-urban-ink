<x-guest-layout>
    <div class="pt-4 bg-gray-100">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <a href="/">
                <x-authentication-card-logo />
            </a>

            <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose">
                <h1 class="text-2xl">{{ $policy->title ?? 'No Title Available' }}</h1>
                <div>
                    {!! $policy->description ?? 'No Description Available' !!}
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
