<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Offers') }}
        </h2>
    </x-slot>
    <div class=" py-5 px-10 flex justify-end">

    <a href="{{route('offer.create')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create New Offer</a>

    </div>
    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="py-3 px-6">
                                            Store Name
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Offer Description
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Offer Duration days
                                        </th>
                                        <th scope="col" class="py-3 px-20">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- foreachstart --}}
                                    <tr class="bg-slate-100 border-b dark:bg-gray-900 dark:border-gray-700">

                                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">

                                            11111
                                        </th>
                                        <td class="py-4 px-6">
                                            22222
                                        </td>
                                        <td class="py-4 px-6">
                                            333333
                                        </td>

                                        <td class="py-10 px-5 flex ">
                                            <a href="" class="px-4 py-2 bg-blue-500 hover:bg-blue-500 rounded-lg text-white">Edit</a>
                                            <div class=" px-3 py-4"></div>
                                            <form class="px-4 py-2 bg-red-500 hover:bg-red-500 rounded-lg text-white"
                                                method="POST"
                                                action=""
                                                onsubmit="return confirm('ARE YOU SURE ?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" >Delete</button>
                                             </form>
                                        </td>



                                    </tr>
                                    {{-- foreachend --}}
                                </tbody>
                            </table>
                        </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
