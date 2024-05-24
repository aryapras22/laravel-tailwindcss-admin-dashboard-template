<x-app-layout>
<div class=" mx-4 mt-2 col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
    <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
        <h2 class="font-semibold text-slate-800 dark:text-slate-100">Regulations</h2>
    </header>
    <div class="p-3">

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="table-auto w-full dark:text-slate-300">
                <!-- Table header -->
                <thead class="text-xs uppercase text-slate-400 dark:text-slate-500 bg-slate-50 dark:bg-slate-700 dark:bg-opacity-50 rounded-sm">
                    <tr>
                        <th class="p-2">
                            <div class="font-semibold text-left">id</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-center">Regulation</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-center">Description</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-center">Status</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-center">Regulator Id</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-center">Updated At</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-center">Created At</div>
                        </th>
                    </tr>
                </thead>
                <!-- Table body -->
                <tbody class="text-sm font-medium divide-y divide-slate-100 dark:divide-slate-700">
                    <!-- Row -->
                    <tr>
                        <td class="p-2">
                            <div class="font-semibold text-left">1</div>
                        </td>
                        <td class="p-2">
                            <div class="font-semibold text-center">UU ITE 2023</div>
                        </td>
                        <td class="p-2">
                            <div class="font-semibold text-center">ISI DESCT</div>
                        </td>
                        <td class="p-2">
                            <div class="font-semibold text-center">Ongoing</div>
                        </td>
                        <td class="p-2">
                            <div class="font-semibold text-center">DPR</div>
                        </td>
                        <td class="p-2">
                            <div class="font-semibold text-center">Updated At</div>
                        </td>
                        <td class="p-2">
                            <div class="font-semibold text-center">Created At</div>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
</x-app-layout>