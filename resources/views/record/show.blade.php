@extends('layouts.app')

@section('content')

    <div>
        <header class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                <h1 class="text-lg leading-6 font-semibold text-gray-900">
                    More Information
                </h1>
            </div>
        </header>

        <main>
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                <div class="bg-white shadow-2xl overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            About the ride
                        </h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">
                            How it went
                        </p>
                    </div>
                    <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
                        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Title
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ $record->title }}
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Miles
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ $record->miles }}
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Date
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ $record->date }}
                                </dd>
                            </div>

                            <div class="sm:col-span-2">
                                <dt class="text-sm font-medium text-gray-500">
                                    Notes
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ $record->notes }}
                                </dd>
                            </div>

                            <div class="sm:col-span-2">
                                <form action="/records/destroy/{{ $record->id }}" method="POST">
                                    @method('DELETE')
                                    @csrf

                                    <button type="submit"
                                        class="border border-transparent bg-red-500 hover:bg-red-600 border-red-400 text-white shadow-sm py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-400">
                                        Delete
                                    </button>
                                </form>
                            </div>

                        </dl>
                    </div>
                </div>

            </div>
        </main>
    </div>
@endsection
