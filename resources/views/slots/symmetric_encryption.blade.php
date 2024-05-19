<x-app-layout>
    <div class="flex gap-5 flex-col md:flex-row p-5 h-full justify-between">
        <div class="w-full flex flex-col gap-3 h-60 md:h-auto">
            <x-text-area id="plain-area" placeholder="Inserisci il messaggio da crittare." rows="4"
                         class="h-full"></x-text-area>
            <input type="text" id="key-input"
                   class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-black"
                   placeholder="Inserisci la tua chiave.">
            <button onclick="randomKey('key-input')" class="">ddd</button>

        </div>
        <div class="flex md:flex-col md:gap-5 md:justify-center flex-wrap">
            <x-primary-button value="Encrypt" icon="{{asset('icons/lock.svg')}}" onCLick="encryptAES()"></x-primary-button>
            <x-primary-button value="Decrypt" icon="{{asset('icons/unlock.svg')}}" onClick="decryptAES()"></x-primary-button>
        </div>
        <div class="w-full flex flex-col h-60 md:h-auto relative">
            <x-text-area id="cypher-area" placeholder="Qui verrà generato il tuo cyphertext" disabled="true"
                         class="h-full pt-16">
            </x-text-area>
            <x-copy-button class="top-2 right-2 absolute" onClick="copyText()">

            </x-copy-button>
            <span class="hidden"></span>
        </div>

    </div>
</x-app-layout>
