@props(['placeholder' => '','disabled' => false,'rows'=>4,'id'=>''])


<textarea id="{{$id}}" rows="{{$rows}}"
          {{$attributes->merge(['class' => "block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"])}} placeholder="{{ $placeholder }}" {{ $disabled ? 'disabled' : '' }} ></textarea>
