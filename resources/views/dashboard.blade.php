<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('マイページ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("ログインしました") }}
                    <br>
                     <br>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSflBJpIgXvA15W5mXYbbzkcF5nTdOhGDwxh_hXs73Hq4NFH8w/viewform" target="_blank">
                    <x-input-label :value="__('ー初回ヒアリングシートにご記入がまだの方はこちらー')" for="personality-test" />
                </a>
                 </br>
                    </br>
                 
                </div>
            </div>
            
        </div>
    </div>
</x-app-layout>
