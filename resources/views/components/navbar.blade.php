<header class="bg-white border-b dark:bg-gray-900 dark:border-gray-700  lg:w-full lg:top-0 lg:left-0 lg:z-40 ">
    <div class="container md:max-w-2xl px-4 py-5 mx-auto space-y-0 flex items-center justify-between space-x-1 md:px-0" >
        <div>
            CRUD
        </div>
        
        <nav class="flex space-x-6">
            @foreach ($navbar as $name => $url)
            <a class="text-gray-500 transition-all hover:text-gray-800 " href={{ $url }}>{{ $name }}</a>
            @endforeach
        </nav>
    </div>
</header>