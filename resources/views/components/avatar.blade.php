@php
    $avatar_size = match ($size) {
        'sm' => 'h-6 max-w-6',
        'md' => 'h-9.5 max-w-9.5',
        'lg' => 'h-13 max-w-13',
        'xl' => 'h-20 max-w-20',
    };

    $circle_size = match ($size) {
        'sm' => 'h-2 max-w-2 border',
        'md' => 'h-3.5 max-w-3.5 border-2',
        'lg' => 'h-4.5 max-w-4.5 border-[2.7px]',
        'xl' => 'h-5.5 max-w-5.5 border-[3px]',
    };
@endphp
<div class="{{$avatar_size}} w-full rounded-full relative">
    <img src="{{ asset($source) }}" alt="user">
    @isset($attributes['online'])
        <span class="{{$circle_size}} absolute right-0 top-0 w-full rounded-full border-white bg-[#219653] dark:border-black"></span>
    @endisset
</div>
