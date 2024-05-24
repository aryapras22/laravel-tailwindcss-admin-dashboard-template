@if (session()->has('success'))
<div class="bg-green-500 text-white px-4 py-2 rounded-md mb-4 mx-4">
    {{ session('success') }}
    <button type="button" class="ml-4" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif