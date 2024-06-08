<div>

    @isset($message)
        <x-alert title="Alert" :message="$message"/>
    @endisset

    {{-- Avatar --}}
    <div x-data="{uploading: false, progress: 0}"
        x-on:livewire-upload-start      = "uploading = true"
        x-on:livewire-upload-finish     = "uploading = false; progress = 0"
        x-on:livewire-upload-error      = "uploading = false; progress = 0"
        x-on:livewire-upload-progress   = "progress = $event.detail.progress"
    >
        <div class="avatar group rounded-sm p-6.5 border inline-block border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark mt-10">
            <div class="w-40 h-40 bg-black relative ">
                <img class="h-full" src="{{asset('storage/' . $avatar)}}" alt="avatar">
                <div x-show="uploading" class="progress absolute inset-0 bg-black grid place-content-center z-1">
                    <svg class="w-full h-full">
                        <text x-text="`${progress}%`" x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="white"></text>
                        <circle class="transition-all" cx="50%" cy="50%" r="40" stroke-linecap="round" stroke="#FFF" stroke-width="5" stroke-dasharray="100" x-bind:stroke-dashoffset="100 - progress" fill="none" pathlength="100"/>
                    </svg>
                </div>
                <div class="mask absolute bottom-0 bg-[#3C50E077] w-full grid place-content-center h-30 transition-all duration-300 group-hover:h-full">
                    <label for="avatar" class="camera flex flex-col items-center cursor-pointer">
                        <box-icon name='camera' type='solid' color='#ffffff' ></box-icon>
                        <small class="text-white">upload avatar</small>
                        <input type="file" class="hidden" id="avatar" wire:model="file">
                    </label>
                </div>
            </div>
        </div>
        @error('file')
            <small class="text-meta-1 block mt-1">{{$message}}</small>
        @enderror
    </div>
    {{-- Avatar --}}
    
    <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark mt-10">
        <form action="POST" wire:submit.prevent="submit">
            <div class="p-6.5">
                <div class="mb-4.5">
                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                        Full name
                    </label>
                    <input 
                        type="text" 
                        class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                        wire:model="fullname"
                        placeholder="Enter your first name" 
                    >
                    @error('fullname')
                        <small class="text-meta-1">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-4.5">
                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                        Email <span class="text-meta-1">*</span>
                    </label>
                    <input type="email" placeholder="Enter your email address" wire:model="email"
                        class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                    @error('email')
                        <small class="text-meta-1">{{ $message }}</small>
                    @enderror
                </div>
                <button
                    class="flex justify-center rounded bg-primary p-3 font-medium text-gray hover:bg-opacity-90">Update</button>
            </div>
        </form>
    </div>

    <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark mt-10">
        <form action="#">
            <div class="p-6.5">
                <div class="mb-4.5">
                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                        New password
                    </label>
                    <input type="text" placeholder="Enter new password"
                        class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                </div>

                <div class="mb-4.5">
                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                        Confirm password
                    </label>
                    <input type="text" placeholder="Confirm password"
                        class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                </div>

                <button wire:click="increment" type="button"
                    class="flex justify-center rounded bg-primary p-3 font-medium text-gray hover:bg-opacity-90">Change
                    password</button>
            </div>
        </form>
    </div>
</div>

@push('styles')
    <style>
        .avatar .mask{
            clip-path: ellipse(50% 40% at 50% 100%);
        }
        .avatar .mask .camera{
            visibility: hidden;
            opacity: 0;
            translate: 0 30%;
        }
        .avatar:hover .mask{
            clip-path: ellipse(100% 100% at 50% 50%);
        }
        .avatar:hover .mask .camera{
            visibility: visible;
            transition: 300ms;
            transition-delay: 300ms;
            opacity: 1;
            translate: 0 0;
        }
    </style>
@endpush
