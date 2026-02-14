<x-layout title="Welcome to Painted!">



<H1>Privet Bratya!</H1>

{{-- Since this component has default class card, if I pass additional classes here they will be merged with the default card class. For example, <x-card class="anotherclass"> will in the end turn into <x-card class="card anotherclass"> --}}


    <x-card> 

    <p>{{ $greetings }}, {{ $name }}!</p>

    </x-card>

{{-- Now {{ $name}} comes with added protection if someone writes say alert script in the query string it will be passed out as a simple text and not execute it but same thing with php <?= $name ?> will execute. But if the data is secure and I trust it, using {!! $name !!} fine --}}

</x-layout>