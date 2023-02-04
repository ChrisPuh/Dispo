<x-crud-layout title="profile">
    <div class="flex flex-col gap-4">
        <div class="max-w-xl">
            @include('profile.partials.update-profile-information-form')
        </div>

        <div class="max-w-xl">
            @include('profile.partials.update-password-form')
        </div>


        <div class="max-w-xl">
            @include('profile.partials.delete-user-form')
        </div>
    </div>

</x-crud-layout>
