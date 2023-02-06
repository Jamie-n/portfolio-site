<div class="text-center ease-in-out duration-300 p-16 relative inset-0 bg-cover bg-center z-0">
    <img src="{{$img}}" class="icon" alt="{{$alt}}">
    <p class="font-bold text-xl mt-5">{!! $title !!} </p>
    <div class="opacity-0 hover:opacity-100 duration-300 absolute inset-0 z-10 text-black bg-neutral-50 rounded-xl p-6">
        <p class="font-bold mb-2">
            {!! $title !!}
        </p>
        <span>{{$slot}}</span>
    </div>
</div>
