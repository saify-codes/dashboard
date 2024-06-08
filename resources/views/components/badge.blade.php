@php
    $badge_types = [
     'primary'      => 'primary',
     'secondary'    => '[#13C296]',
     'dark'         => '[#212B36]',
     'gray'         => '[#637381]',
     'light'        => '[#EFEFEF]',
     'warning'      => '[#F9C107]',
     'danger'       => '[#DC3545]',
     'success'      => '[#3CA745]',
     'info'         => '[#3BA2B8]'
    ];
    $badge = 'primary';
    $rounded = isset($attributes['pill']) ? 'rounded-full' : '';

    foreach ($attributes as $attribute => $value) {
        if(array_key_exists($attribute,$badge_types)){
            $badge = $badge_types[$attribute];
            break;
        }
    }

@endphp

@isset($attributes['outline'])
    <button class="inline-flex rounded border border-{{$badge}} {{$rounded}} px-2 py-1 text-sm font-medium text-{{$badge}} hover:opacity-80">{{$name}}</button>
@else
    <button class="inline-flex rounded bg-{{$badge}} {{$rounded}} px-2 py-1 text-sm font-medium text-white hover:bg-opacity-90">{{ $name }}</button>
@endisset

