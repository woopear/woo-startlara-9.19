@if (session('status'))
    <section x-data="{state: true}" x-show="state" class="alert bg-green-100 rounded-lg py-3 px-6 my-3 text-base text-green-700 flex items-center w-full" role="alert">
        <x-icon.success-svg/>
        <p><strong>Succès !</strong> {{ session('status') }}</p>
        <button @click="state = false" type="button" class="ml-auto" >
            <x-icon.close-svg classdiv="text-green-500 hover:text-green-700"/>
        </button>
    </section>
@endif

@if (session('error'))
    <section x-data="{state: true}" x-show="state" class="alert bg-red-100 rounded-lg py-3 px-6 my-3 text-base text-red-700 flex items-center w-full" role="alert">
        <x-icon.error-svg/>
        <p><strong>Erreur !</strong> {{ session('error') }}</p>
        <button @click="state = false" type="button" class="ml-auto" >
            <x-icon.close-svg classdiv="text-red-500 hover:text-red-700"/>
        </button>    
    </section>
@endif
