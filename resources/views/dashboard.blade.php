<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
                <div class="m-6">
                    <div class="details-group-example">
                        <sl-details summary="First" open>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                          aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </sl-details>
                      
                        <sl-details summary="Second">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                          aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </sl-details>
                      
                        <sl-details summary="Third">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                          aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </sl-details>
                      </div>
                      
                      <script>
                        const container = document.querySelector('.details-group-example');
                      
                        // Close all other details when one is shown
                        container.addEventListener('sl-show', event => {
                          [...container.querySelectorAll('sl-details')].map(details => (details.open = event.target === details));
                        });
                      </script>
                      
                      <style>
                        .details-group-example sl-details:not(:last-of-type) {
                          margin-bottom: var(--sl-spacing-2x-small);
                        }
                      </style>
                </div>
                <div class="m-6">
                    <input type="range" min="0" max="100" value="25" class="range w-full" step="25" />
                    <div class="w-full flex justify-between text-xs px-2">
                        <span>|</span>
                        <span>|</span>
                        <span>|</span>
                        <span>|</span>
                        <span>|</span>
                    </div>
                </div>
                <div class="m-6">
                    <eit-foo></eit-foo>
                    <p class="my-4">
                        <button class="btn btn-primary">Button</button>
                        <button class="btn btn-outline">Button</button>
                    </p>
                </div>
                <div class="m-6">
                    <img src="{{ Vite::asset('resources/images/logo-dw.png') }}" />
                    <div class="my-4">
                        
                        <button class="btn" id="openmodal">Button</button>
                        <eit-modal id="dialogo">
                            <p>Esta es una caja de diálogo hecha con un componente.</p>
                            <p>Yeah!!</p>
                        </eit-modal>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
