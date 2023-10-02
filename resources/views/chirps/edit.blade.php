<x-app-layout>
    <div><a href="{{ route('change.language', 'fr') }}">Français</a> |
        <a href="{{ route('change.language', 'en') }}">English</a>
    </div>

    <p> {{ route('chirps.store') }} </p>
    <p> {{ route('chirps.index') }} </p>
    <p> {{ url(ChirpController::class, 'index') }} </p>
    {{-- {{Composant alerte}} --}}
    @php
        $message = "Vous n'avez pas saisis le nom d'utilisateur";
    @endphp
    {{-- <x-alert :message="'Vous n\'avez pas saisi le nom d\'utilisateur'" > --}}
    <x-alert :color="'bg-yellow-500'" :message="$message" />
    <x-alert :color="'bg-indigo-700'" :message="'Ce champs est requis'" />

    <x-card>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde sunt provident atque consequuntur, fuga
            temporibus aperiam neque, voluptas possimus saepe vel eaque ipsum molestiae illum, ea corporis amet est
            minima?</p>
    </x-card>
    <x-card>
        <h2>image</h2>
        <img src="unsplash.it/300/230" alt="img">
    </x-card>


    {{-- </x-alert> --}}
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8 ">
        <form action=" {{ route('chirps.update', $chirp) }} " method="POST">
            @csrf
            @method('PATCH')
            {{-- <input type="hidden" name=" _method" value="PATCH" > --}}
            <textarea name="message" placeholder=" {{ __('util.msg') }}"
                class="block w-full border-gray-300
            focus:border-indigo-300 focus:indigo-200
            focus:ring-opacity-50 rounded-md shadow-sm">{{ old('message', $chirp->message) }}</textarea>
            
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <x-primary-button class="mt-4"> {{ __('Mettre à jour') }}
            </x-primary-button>
            <a href=" {{ route('chirps.index') }} "> {{ __('Annuler') }} </a>
        </form>
    </div>
</x-app-layout>
