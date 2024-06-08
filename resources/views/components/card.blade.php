<div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
    @isset($avatar)
        <div class="flex items-center gap-3 px-6 pt-5">
            <div class="h-10 w-10 rounded-full">
                <img src="{{ asset($avatar) }}" alt="User">
            </div>
            <div>
                <h4 class="font-medium text-black dark:text-white">{{ $author }}</h4>
                <p class="text-xs font-medium">{{ $designation }}</p>
            </div>
        </div>
    @endisset

    @isset($img_source)
        <a href="#" class="block px-4 pt-4">
            <img src="{{ asset($img_source) }}" alt="Cards">
        </a>
        <div class="p-6">
            <h4 class="mb-3 text-xl font-semibold text-black dark:text-white">
                <a href="#">{{ $title }}</a>
            </h4>
            <p class="font-medium">{{ $content }}</p>
        </div>
    @else
        <div class="border-b border-stroke p-5 px-7.5 dark:border-strokedark">
            <h4 class="text-xl font-semibold text-black dark:text-white">
                <a href="#">{{$title}}</a>
            </h4>
        </div>
        <div class="px-7.5 pb-9 pt-6">
            <p class="font-medium">{{$content}}</p>
        </div>
    @endisset

</div>
