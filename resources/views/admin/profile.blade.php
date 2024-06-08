<x-base-layout>
    <x-breadcrumb title="Profile" path="dashboard" />
    <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
        <form action="#">
            <div class="p-6.5">
                <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                    <div class="w-full xl:w-1/2">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            First name
                        </label>
                        <input type="text" placeholder="Enter your first name"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                    </div>

                    <div class="w-full xl:w-1/2">
                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                            Last name
                        </label>
                        <input type="text" placeholder="Enter your last name"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                    </div>
                </div>

                <div class="mb-4.5">
                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                        Email <span class="text-meta-1">*</span>
                    </label>
                    <input type="email" placeholder="Enter your email address"
                        class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                </div>

            </div>
        </form>
    </div>
</x-base-layout>
