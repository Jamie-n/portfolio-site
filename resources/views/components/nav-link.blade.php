<a href="{{$href}}" {{$attributes->merge(['class' => 'py-3 block text-white hover:text-black ease-in-out duration-100'])}}>
    @isset($icon)
         <i class="{{$icon}}"><span class="sr-only">{{$altText}}</span></i>&nbsp;

    @endisset
    {{$name ?? ''}}
</a>
