<div>
    <div class="">
        <div class="py-2 mx-2">
            <div class="flex border border-grey-light-alt hover:border-grey rounded bg-white cursor-pointer p-2 ">
                <div class="w-1/12 flex flex-col text-center pt-2">
                    <span class="text-xs font-semibold my-1">20k</span>
                    <button class="text-xs">
                        <svg class="w-5 fill-current text-grey ml-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M7 10v8h6v-8h5l-8-8-8 8h5z"/></svg>
                    </button>

                    <button class="text-xs">
                        <svg class="w-5 fill-current text-grey ml-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M7 10V2h6v8h5l-8 8-8-8h5z"/></svg>
                    </button>
                    <span class="text-xs font-semibold my-1">20k</span>
                </div>
                <div class="w-11/12 pt-2">
                    <div class="flex items-center text-xs mb-2">
                        <div class="flex items-center text-xs mb-2">
                            <span class="text-grey">Posted by</span>
                            <a href="#" class="text-grey mx-1 no-underline hover:underline">Prof. Arya S.H </a>
                            <span class="text-grey ml-auto">at  {{$regulation->created_at}}</span>
                        </div>
                        <div class="bg-green-100 text-green-600 px-2 py-1 rounded ml-[180px] text-md">
                            {{$regulation->status}}
                        </div>
                        
                    </div>
                    <div>
                        @if($editing ?? false)
                            <form method="POST" action="{{ route('regulation.update', $regulation->id) }}">
                                @csrf
                                @method('PUT')
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
                                        <option value="canceled">Canceled</option>
                                    </select>
                                </div>
                                <input type="text" name="regulation" value="{{$regulation->regulation}}" class="w-full border border-grey-lighter rounded p-2 my-2">
                                <input type="text" name="regulator" value="{{$regulation->regulator}}" class="w-full border border-grey-lighter rounded p-2 my-2">
                                <textarea name="description" class="w-full border border-grey-lighter rounded p-2 my-2">{{$regulation->description}}</textarea>
                                <button type="submit" class="bg-blue-500 text-white rounded p-2">Update</button>
                                @if($errors->any())
                                    <div class="bg-red-100 text-red-600 p-2 rounded mt-2">
                                        {{$errors->first()}}
                                    </div>
                                @endif
                            </form>
                        @else
                        <a href="{{route('regulation.show', $regulation->id)}}" class="text-lg font-semibold text-black no-underline hover:underline">{{$regulation->regulation}}</a>

                        <p class="text-sm font-medium mb-1">{{$regulation->regulator}}</p>
                        <p class="text-md font-medium mb-1">{{$regulation->description}}</p>
                        @endif
                    </div>
                    <div class="inline-flex items-center my-1">
                        <div class="flex hover:bg-grey-lighter p-1">
                            <svg class="w-4 fill-current text-grey" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-4 4v-4H2a2 2 0 0 1-2-2V3c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-8zM5 7v2h2V7H5zm4 0v2h2V7H9zm4 0v2h2V7h-2z"/></svg>
                            
                            <span class="ml-2 text-xs font-semibold text-grey">3k Comments</span>
                        </div>
                        <div class="flex hover:bg-grey-lighter p-1 ml-2">
                            <svg class="w-4 fill-current text-grey" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5.08 12.16A2.99 2.99 0 0 1 0 10a3 3 0 0 1 5.08-2.16l8.94-4.47a3 3 0 1 1 .9 1.79L5.98 9.63a3.03 3.03 0 0 1 0 .74l8.94 4.47A2.99 2.99 0 0 1 20 17a3 3 0 1 1-5.98-.37l-8.94-4.47z"/></svg>
                            <span class="ml-2 text-xs font-semibold text-grey">Share</span>
                        </div>
                        <div class="flex hover:bg-grey-lighter p-1 ml-2">
                            <svg class="w-4 fill-current text-grey" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 2C0 .9.9 0 2 0h14l4 4v14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5 0v6h10V2H5zm6 1h3v4h-3V3z"/></svg>
                            <span class="ml-2 text-xs font-semibold text-grey">Save</span>
                        </div>
              
                        <div class="relative ml-auto">
                            <div class="flex hover:bg-grey-lighter p-1 ml-2 rotate-90 cursor-pointer" id="dropdownButton">
                                <svg class="w-4 fill-current text-grey" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 12a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-6a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 12a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>
                            </div>
                            <div class="absolute right-0 mt-2 w-48 bg-white border border-grey-lighter rounded-lg py-2 z-50 hidden" id="dropdown">
                                <a href="{{ route('regulation.edit', $regulation->id) }}" class="block px-4 py-2 text-grey-darkest hover:bg-grey-lighter">Edit</a>
                                <form method="POST" action="{{ route('regulation.destroy', $regulation->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="block px-4 py-2 text-grey-darkest hover:bg-grey-lighter">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    document.getElementById('dropdownButton').addEventListener('click', function () {
        document.getElementById('dropdown').classList.toggle('hidden');
    });
</script>