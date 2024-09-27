<x-admin-layout>


    <div class="py-5">
        <div class="ms-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="flex items-center justify-between bg-primary p-6 text-white">
                    <div class="text-2xl">Data Sekolah</div>
                    <a class="flex items-center" href="{{ route('dashboard.admin') }}"><svg class="size-6"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                        </svg>
                        kembali
                    </a>
                </div>
            </div>



            <div class="my-2 w-full">
                @if (Session::has('message'))
                    <div class="mb-4 flex w-full max-w-xs items-center rounded-lg bg-white p-4 text-gray-500 shadow dark:bg-gray-800 dark:text-gray-400"
                        id="toast-danger" role="alert">
                        <div
                            class="inline-flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-lg bg-red-100 text-red-500 dark:bg-red-800 dark:text-red-200">
                            <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                            </svg>
                            <span class="sr-only">Error icon</span>
                        </div>
                        <div class="ms-3 text-sm font-normal">{{ Session::get('message') }}</div>
                        <button
                            class="-mx-1.5 -my-1.5 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-white p-1.5 text-gray-400 hover:bg-gray-100 hover:text-gray-900 focus:ring-2 focus:ring-gray-300 dark:bg-gray-800 dark:text-gray-500 dark:hover:bg-gray-700 dark:hover:text-white"
                            data-dismiss-target="#toast-danger" type="button" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                @endif

                <form class="max-w-full" action="{{ route('admin.school.index') }}" method="GET">
                    <label class="sr-only mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        for="default-search">Search</label>
                    <div class="relative">
                        <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                            <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-4 ps-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            id="default-search" name="search" type="search" value="{{ request('search') }}"
                            placeholder="Nama Sekolah" required />
                        <button
                            class="absolute bottom-2.5 end-2.5 rounded-lg bg-blue-700 px-4 py-2 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="submit">Search</button>
                    </div>
                </form>
            </div>
            <div class="relative my-2 overflow-x-auto rounded-lg border-2 border-primary">



                <table
                    class="w-full border-collapse border border-gray-300 text-left text-sm text-gray-500 rtl:text-right dark:border-gray-700 dark:text-gray-400">
                    <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th class="border border-gray-300 px-6 py-3 dark:border-gray-700" scope="col">
                                No
                            </th>
                            <th class="border border-gray-300 px-6 py-3 dark:border-gray-700" scope="col">
                                Nama Sekolah
                            </th>
                            <th class="border border-gray-300 px-6 py-3 dark:border-gray-700" scope="col">
                                Kepala Sekolah
                            </th>
                            <th class="border border-gray-300 px-6 py-3 dark:border-gray-700" scope="col">
                                Email Sekolah
                            </th>
                            <th class="border border-gray-300 px-6 py-3 dark:border-gray-700" scope="col">
                                Alamat
                            </th>
                            <th class="border border-gray-300 px-6 py-3 dark:border-gray-700" scope="col">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($schools as $school)
                            <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                                <th class="whitespace-nowrap border border-gray-300 px-6 py-4 font-medium text-gray-900 dark:border-gray-700 dark:text-white"
                                    scope="row">
                                    {{ ($schools->currentPage() - 1) * $schools->perPage() + $loop->iteration }}
                                </th>
                                <td class="border border-gray-300 px-6 py-4 dark:border-gray-700">
                                    {{ $school->name_school }}
                                </td>
                                <td class="border border-gray-300 px-6 py-4 dark:border-gray-700">
                                    {{ $school->headmaster }}
                                </td>
                                <td class="border border-gray-300 px-6 py-4 dark:border-gray-700">
                                    {{ $school->email_school }}
                                </td>
                                <td class="border border-gray-300 px-6 py-4 dark:border-gray-700">
                                    {{ $school->address }}
                                </td>
                                <td class="flex justify-between border border-gray-300 px-6 py-4 dark:border-gray-700">
                                    <a href="javascript:void(0);" onclick="confirmDelete({{ $school->id }})">
                                        <svg class="size-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="red">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                    </a>
                                    <form id="delete-form-{{ $school->id }}" style="display: none;"
                                        action="{{ route('admin.school.destroy', ['school' => $school->id]) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <svg class="size-6 text-yellow-600" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>


                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Render pagination links -->
                {{ $schools->links() }}

            </div>

        </div>
    </div>
    @push('after-scripts')
        <script>
            function confirmDelete(itemId) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('delete-form-' + itemId).submit();
                    }
                });
            }
        </script>
    @endpush
</x-admin-layout>
