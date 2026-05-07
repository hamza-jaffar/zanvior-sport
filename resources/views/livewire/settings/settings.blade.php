<section class="w-full">
    @include('partials.settings-heading')
    <flux:heading class="sr-only">{{ __('Security settings') }}</flux:heading>

    <x-settings.layout :heading="__('Platform Settings')" :subheading="__('Update the platform settings in this page.')">
        <form class="flex gap-3 flex-col">
            <flux:input label="Primary Logo (for white mode)" type="file" />
            <flux:input label="Secondary Logo (for dark mode)" type="file" />
            <flux:input label="favicon" type="file" />

            <flux:input label="Name" placeholder="enter the name" />
            <flux:input label="Slogan" placeholder="enter the slogan" />
            <flux:input label="Email" placeholder="enter the email" />

            <flux:input label="Meta Title" placeholder="enter the meta title" />
            <flux:textarea label="Meta Description" placeholder="enter the meta description"></flux:textarea>
            <flux:input label="Seo keywords" placeholder="enter the seo keywords" />

            <flux:field variant="inline">
                <flux:label>Enable User Registration</flux:label>
                <flux:switch wire:model.live="notifications" />
                <flux:error name="notifications" />
            </flux:field>

            <div>
                <div class="flex justify-between mt-3">
                    <flux:label>Social Media Handles</flux:label>
                    <flux:button icon="plus" class="cursor-pointer">
                        Add
                    </flux:button>
                </div>

                <div class="flex gap-2 w-full">
                    <flux:input label="Platform Name" placeholder="enter the name" />
                    <flux:input label="URL" placeholder="enter the url" type="url" />
                </div>
            </div>

        </form>


    </x-settings.layout>
</section>