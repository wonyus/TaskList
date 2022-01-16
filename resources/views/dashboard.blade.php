<x-app-layout>
    <x-slot name="header">
        <h2 class="bg-clip-text text-transparent bg-gradient-to-r from-pink-300 to-violet-700 font-font-style: italic font-bold  text-5xl text-[#0c1a35] leading-tight">
            {{ __('Dashboard :) ') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-clip-border p-6 bg-sky-400 border-4 border-sky-600 border-dashed overflow-hidden shadow-xl sm:rounded-lg p-5">

                <div class="flex">
                    <div class="flex-auto text-2xl mb-4 font-style: italic font-bold ">TASK LIST</div>

                    <div class="flex-auto text-right mt-2">
                        <a href="/task" class="bg-blue-500 hover:bg-blue-700 text-white font-style: italic font-bold py-2 px-4 rounded">Add new Task</a>
                    </div>
                </div>
                <table class="w-full text-md rounded mb-4">
                    <thead>
                        <tr class="border-b">
                            <th class="text-left p-3 px-5 font-style: italic">Task</th>
                            <th class="text-left p-3 px-5 font-style: italic">Actions</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(auth()->user()->tasks as $task)
                        <tr class="border-b hover:bg-orange-100 font-style: italic ">
                            <td class="p-3 px-5">
                                {{$task->description}}
                            </td>
                            <td class="p-3 px-5">

                                <a href="/task/{{$task->id}}" name="edit" class="font-style: italic font-bold mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</a>
                                <form action="/task/{{$task->id}}" class="inline-block">
                                    <button type="submit" name="delete" formmethod="POST" class="font-style: italic font-bold text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                                    {{ csrf_field() }}
                                </form>
                            </td>
                        </tr>


                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <div class="grid c grid-cols-12 gap-10 pt-10">
        <div class="bg-sky-50 aspect-square col-start-2"></div>
        <div class="bg-sky-100 aspect-square"></div>
        <div class="bg-sky-200 aspect-square"></div>
        <div class="bg-sky-300 aspect-square"></div>
        <div class="bg-sky-400 aspect-square"></div>
        <div class="bg-sky-500 aspect-square"></div>
        <div class="bg-sky-600 aspect-square"></div>
        <div class="bg-sky-700 aspect-square"></div>
        <div class="bg-sky-800 aspect-square"></div>
        <div class="bg-sky-900 aspect-square"></div>
    </div>
</x-app-layout>