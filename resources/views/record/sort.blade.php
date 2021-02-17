@extends('layouts.app')

@section('content')
    <div>
        <header class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                <h1 class="text-lg leading-6 font-semibold text-gray-900">
                    Sort Exercise
                </h1>
            </div>
        </header>


        <main>
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                @if (empty($sortedRecord))
                    <div>
                        <div class="md:grid md:grid-cols-3 md:gap-6">
                            <div class="mt-5 md:mt-0 md:col-span-2">
                                <form action="{{ route('record.sort') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @error('from-date', 'to-date')
                                        {{ $message }}
                                    @enderror


                                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                            <div class="grid grid-cols-3 gap-6">
                                                <div>
                                                    <label for="date"
                                                        class="block text-sm font-medium text-gray-700">From</label>
                                                    <div class="mt-1">
                                                        <input type="date" name="fromDate" id="fromDate"
                                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="grid grid-cols-3 gap-6">
                                                <div>
                                                    <label for="date"
                                                        class="block text-sm font-medium text-gray-700">To</label>
                                                    <div class="mt-1">
                                                        <input type="date" name="toDate" id="toDate"
                                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                            <button type="submit"
                                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 
                                                                focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                Sort
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                @else
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Title
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Miles Ridden
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Date added
                                                </th>
                                                <th scope="col" class="relative px-6 py-3">
                                                    <span class="sr-only">More Info</span>
                                                </th>
                                            </tr>
                                        </thead>

                                        @foreach ($sortedRecord as $key => $record)
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                <tr>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                        {{ $record->title }}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        {{ $record->miles }}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                        {{ $record->date }}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <a href="{{ route('record.show', ['id' => $record->id]) }}"
                                                            class="text-indigo-600 hover:text-indigo-900">More Info</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        @endforeach
                                    </table>

                                    <div class="mt-6">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-gray-100">
                                                <tr>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wide text-gray-900">
                                                        Total Miles: {{ $miles }}
                                                    </th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </main>

    </div>
@endsection
