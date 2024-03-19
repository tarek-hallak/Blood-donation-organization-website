<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Please lets us know some information about yourself.") }}
        </p>
    </header>

    <form method="post" action="" class="mt-6 space-y-6"  >
        @csrf
        <div>
            <x-input-label for="Blood Type" :value="('Blood Type')" />
            <x-text-input id="blood_type" name="blood_type" type="text" class="mt-1 block w-full" placeholder="A+,A-,B+,B-,AB+,AB-,O+,O-" : required autofocus  />
            <x-input-error class="mt-2" :messages="$errors->get('blood_type')" />
        </div>

        <div>
            <x-input-label for="Contact Details" :value="('Contact Details')"/>
            <x-text-input id="contact_details" name="contact_details" type="text" class="mt-1 block w-full" placeholder="09XXXXXXXX" : required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('contact_details')" />
        </div>

        <div>
            <x-input-label for="Location" :value="('Location')" />
            <x-text-input id="location" name="location" type="text" class="mt-1 block w-full" placeholder="Country,City" : required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('contact_details')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ ('Submit') }}</x-primary-button>
        </div>
    </form>
</section>
