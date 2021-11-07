

<x-layouts>
  <x-navbar />
 
    <div class="pt-7 mx-auto px-4 md:px-0 container md:max-w-2xl">
      <h1 class="text-3xl font-bold">Todo List</h1>
      <div class="py-4">
        <form action="{{ route('tasks.update',$task->id) }}" method="post" class="flex  justify-between">
          @csrf
          @method('put')
          <input type="text" name="task" value="{{ $task->task }}"
            class="mr-3 px-4 py-2 w-full rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200">
          <button
            class="px-4 py-2 rounded-md text-sm  font-medium border-0 focus:outline-none focus:ring transition text-white bg-gray-800 hover:bg-gray-900 active:bg-gray-900 focus:ring-gray-300"
            type="submit">Update</button>
        </form>
      </div>
      
    </div>
 
</x-layouts>