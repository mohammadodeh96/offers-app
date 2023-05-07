

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Offers') }}
        </h2>
    </x-slot>
    <div class=" py-5 px-10 flex justify-end">

    <a href="{{route('offer.index')}}" class="text-black bg-yellow-500 hover:bg-red-300 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Go back</a>

    </div>
    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{route('offer.store')}}" enctype="multipart/form-data">
                        @csrf

                        <label for="description" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Description</label>
                        <textarea id="description" name="description" rows="4" class="mb-6 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Offer description..."></textarea>


                        <div class=" mb-6">
                            <div class="mt-1">
                                <select id="store_id" name="store_id" class="form-multiselect block w-full mt-1">
                                    @foreach ($stores as $store)
                                        <option value="{{$store->id}}">{{ $store->store_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>



                        <div class="mb-6">

                            <div class="mb-6">

                                <label for="daysToEnd" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Offer Duration -days-</label>
                                <input type="daysToEnd" id="daysToEnd" name="daysToEnd" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="#" required>
                            </div>
                            <div class=" mb-6">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file">Upload image</label>
                                <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="images" name="images" type="file">
                            </div>

                          <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
