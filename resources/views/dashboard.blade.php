<style>
a:hover {
  color: pink;
  text-decoration: underline;
}

</style>

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
                     <a href="https://docs.google.com/forms/d/e/1FAIpQLSflBJpIgXvA15W5mXYbbzkcF5nTdOhGDwxh_hXs73Hq4NFH8w/viewform" target="_blank">
                    {{ __(" ＜初回用＞ヒアリングシートがまだの方はこちらから記入してください") }}
                    <br>
                     <br>
                      
 

                     </br>
                    </br>
                 
                </div>
            </div>
            
        </div>
    </div>
    
   
  </a>
</button>
</x-app-layout>
