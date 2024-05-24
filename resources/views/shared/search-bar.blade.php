<div class="card bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
    <div class="card-header pb-0 border-0 ">
        <h5 class="">Search</h5>
    </div>
    <div class="card-body">
        <form action="{{route('dashboard')}}" method="GET">
            <input 
            name="search"
            placeholder="..." 
            class="w-full border border-gray-300 rounded-md py-2 px-4 mb-2"
            type="text"
            id="search">
            <button class="bg-gray-800 text-white py-2 px-4 rounded-md">Search</button>
        </form>
    </div>
</div>