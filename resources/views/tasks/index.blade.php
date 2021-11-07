<x-layouts>
  <x-navbar />
 
    <div class="pt-7 mx-auto px-4 md:px-0 container md:max-w-2xl">
      <h1 class="text-3xl font-bold">Todo List</h1>
      <div class="py-4">
        <form action="{{ route('tasks.store') }}" method="post" class="flex  justify-between">
          @csrf
          <input type="text" name="task" placeholder="Add a todo"
            class="mr-3 px-4 py-2 w-full rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200">
          <button
            class="px-4 py-2 rounded-md text-sm  font-medium border-0 focus:outline-none focus:ring transition text-white bg-gray-800 hover:bg-gray-900 active:bg-gray-900 focus:ring-gray-300"
            type="submit">Add</button>
            
        </form>
        @error('task')
              <div class="text-red-600">{{ $message }}</div>
            @enderror
      </div>
      <ul class="">
        @foreach ($tasks as $task)
        <div class="flex flex-row space-x-5 my-3 p-2 rounded-md justify-between bg-gray-100 ">
          <li>{{ $task->task }}</li>
          <div class="flex m-auto space-x-3 ">
            <a href="{{ route('tasks.edit',$task->id) }}"
              class=" px-4 py-2 rounded-md text-sm font-medium border-0 focus:outline-none focus:ring transition text-white bg-purple-500 hover:bg-purple-600 active:bg-purple-700 focus:ring-purple-300">edit</a>
            <form action="{{ route('tasks.destroy',$task->id) }}" class="" method="post">
              @csrf
              @method('DELETE')
              <button
                class="px-4 py-2 rounded-md text-sm font-medium border-0 focus:outline-none focus:ring transition text-white bg-red-500 hover:bg-red-600 active:bg-red-700 focus:ring-red-300 "
                type="submit">X</button>
            </form>
          </div>
        </div>
        @endforeach
      </ul>
    </div>
 
</x-layouts>