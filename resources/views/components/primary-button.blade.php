@props(['value'=>'Default','icon' => '','onClick'=>''])

<button {{ $attributes->merge(['class' => "ui-btn mx-auto flex gap-3 items-start justify-center rounded"])}} onclick="{{$onClick}}">
    <img src="{{$icon}}" class="h-4" alt="">
    <span>{{$value}}</span>
</button>
