<!-- Merge here defines a default class. Meaning class => card or class=card is the default class this component will always have and anything extra passed through it in whatever file where this component is called will get merged with this. See welcom.blade.php -->

<div {{ $attributes->merge(['class' => 'card']) }}>
    {{ $slot }}
</div>