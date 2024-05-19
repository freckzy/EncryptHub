<footer class="bg-white w-full">
    <div class="mx-auto max-w-7xl flex flex-col gap-4 p-5">
        <div class="flex justify-center gap-2 items-center">
            <img class="h-7" src="{{asset('icons/logo.png')}}" alt="Company name">
            <p class="text-sm leading-6 text-gray-600">Have a good {{date('l')}}</p>
        </div>
        <div class="mx-auto">
            <p class="text-xs leading-5 text-gray-500">&copy; {{date('Y')}} {{config('app.name', 'Laravel')}}, Inc. All rights reserved.</p>
        </div>
    </div>
</footer>
