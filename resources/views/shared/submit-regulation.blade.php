
<div class="flex border border-grey-light-alt hover:border-grey rounded bg-white cursor-pointer p-4 mx-4">
    <form action="{{ route('regulation.create') }}" method="POST">
        @csrf 
        <div class="mb-3">
            <div class="col-span-5 xl:col-span-3">
                <div class="rounded-sm bg-white shadow-default p-2">
                    <div class="border-b border-stroke py-4 px-7 dark:border-strokedark">
                        <h3 class="font-medium text-black">
                            Tambahkan Regulasi
                        </h3>
                    </div>
                            <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                                <div class="flex justify-end gap-4.5">
                                    <div class="w-full sm:w-1/2 mr-4">
                                    <div class="relative">
                                        <span class="absolute left-4.5 top-4"></span>
                                        <input
                                            class=" input-form w-full rounded border border-stroke bg-gray py-3 pl-11.5 pr-4.5 text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4"
                                            type="text"
                                            name="regulation"
                                            id="regulation"
                                            placeholder="regulasi"
                                        />
                                    </div>
                                </div>

                                <div class="w-full sm:w-1/2">
                                    <input
                                        class="input-form w-full rounded border border-stroke bg-gray py-3 px-4.5 text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4"
                                        type="text"
                                        name="regulator"
                                        id="regulator"
                                        placeholder="regulator"
                                    />
                                </div>
                            </div>
                                

                            <div class="mb-5.5 ml-5">
                                <div class="relative">
                                    <span class="absolute left-4.5 top-4"></span>
                                    <select
                                        class="input-form w-full rounded border border-stroke bg-gray py-3 pl-11.5 pr-4.5 text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4"
                                        name="status"
                                        id="status"
                                    >
                                        <option value="ongoing">Ongoing</option>
                                        <option value="delayed">Delayed</option>
                                        <option value="done">Done</option>
                                        <option value="canceled">
                                            Canceled
                                        </option>
                                    </select>
                                </div>
                            </div>


                    </div>
                    <div class="mb-5.5 mt-5">
                        <textarea
                            class=" h-60 input-form w-full rounded border border-stroke bg-gray py-3 px-4.5 text-black focus:border-primary focus-visible:outline-none"
                            placeholder="enter description...."
                            name="description"
                            id="description"
                            cols="30"
                            rows="10"
                        ></textarea>
                    </div>
                </div>
            </div>    
            @error('content')
            <div class="text-danger"> {{ $message }} </div>
            @enderror
        </div>
        <div class="">
            <button class=" bg-gray-800 text-white py-2 px-4 rounded-md">Share</button>
        </div>
    </form>
</div>