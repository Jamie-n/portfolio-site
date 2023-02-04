<a href="{{$href}}" {{$attributes->merge(['class' => 'py-3 block text-neutral-300 hover:text-white'])}}>
    {{$name ?? ''}}
    @isset($altText)
        <span class="sr-only">{{$altText}}</span>
    @endisset()
</a>
