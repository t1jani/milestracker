@extends('layouts.app')

@section('content')
<div>
    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <h1 class="text-lg leading-6 font-semibold text-gray-900">
                Add Exercise
            </h1>
        </div>
    </header>

    <main>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div>
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Exercise Details</h3>
                            <p class="mt-1 text-sm text-gray-600">
                                Provide all information about you exercise.
                            </p>
                        </div>
                    </div>

                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form action="{{ route('record.create') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            {{-- @if ($errors->has('miles') ?? $errors->has('date'))
                                <div class="rounded-md bg-red-50 p-4 mb-3">
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <!-- Heroicon name: x-circle -->
                                            <svg
                                                class="h-5 w-5 text-red-400"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20"
                                                fill="currentColor"
                                                aria-hidden="true"
                                            >
                                                <path
                                                    fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                                    clip-rule="evenodd"
                                                />
                                            </svg>
                                        </div>
                                        <div class="ml-3">
                                            <h3 class="text-sm font-medium text-red-800">
                                               {{ $errors->first('miles') ?? $errors->first('date')}}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            @endif --}}

                            @error('title', 'miles', 'date', 'image')
                                {{ $message }}
                            @enderror


                            <div class="shadow sm:rounded-md sm:overflow-hidden">
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                    <div class="grid grid-cols-3 gap-6">
                                        <div>
                                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                                            <div class="mt-1">
                                              <input type="text" name="title" required id="title" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" autofocus>
                                            </div>
                                          </div>
                                    </div>

                                    <div class="grid grid-cols-3 gap-6">
                                        <div>
                                            <label for="miles" class="block text-sm font-medium text-gray-700">Miles</label>
                                            <div class="mt-1">
                                              <input type="text" name="miles" id="miles" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" 
                                              placeholder="5.69" required>
                                            </div>
                                          </div>
                                    </div>

                                    <div class="grid grid-cols-3 gap-6">
                                        <div>
                                            <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                                            <div class="mt-1">
                                              <input type="date" name="date" id="date" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" required>
                                            </div>
                                          </div>
                                    </div>

                                    <div>
                                        <label for="notes" class="block text-sm font-medium text-gray-700">
                                          Notes
                                        </label>
                                        <div class="mt-1">
                                          <textarea id="notes" name="notes" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                                        </div>
                                        <p class="mt-2 text-sm text-gray-500">
                                          {{-- Brief description for your profile. URLs are hyperlinked. --}}
                                        </p>
                                      </div>
                                </div>

                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md
                                    text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
