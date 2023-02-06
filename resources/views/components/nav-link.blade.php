<a href="{{$href}}"
@class([
       'py-3 block hover:text-black ease-in-out duration-100',
       'text-white' => request()->url() != $href,
       'text-black' => request()->url() == $href
])>
@isset($icon)<i class="{{$icon}}"><span class="sr-only">{{$altText}}</span></i>&nbsp;@endisset
    {{$name ?? ''}}
</a>

