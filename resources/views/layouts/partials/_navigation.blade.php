<nav class="bg-gray-800">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <div class="flex items-center">
            
          <div class="flex-shrink-0">
            <img class="h-8 w-8" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="mile tracker">
          </div>

          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="{{ route('home') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                View All
              </a>

              <a href="{{ route('record.create') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                Add Exercise
              </a>
            </div>
          </div>
        </div>

        <div class="ml-4 flex item-center md:ml-6">
          <form method="POST" action="{{ route('logout') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm 
          font-medium cursor-pointer">
            @csrf
            <button  type="submit" role="menuitem">
              Sign out
            </button>
          </form>
        </div>
      </div>
    </div>
  </nav>