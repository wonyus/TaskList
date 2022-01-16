<x-app-layout>
    <x-slot name="header">
        <h2 class="bg-clip-text text-transparent bg-gradient-to-r from-pink-300 to-violet-700 font-style: italic font-bold text-5xl text-[#0c1a35] text-gray-800 leading-tight">
            {{ __('Edit task :)') }}
        </h2>
    </x-slot>
    <style>
        .Bg {
            width: 750px;
            text-align: center;
            margin: auto;
        }
    </style>

    <body class="antialiased">
        <div class="Bg">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-clip-border p-6 bg-[#f9faec] border-4 border-sky-600 border-dashed overflow-hidden shadow-xl sm:rounded-lg p-5">


                    <form method="POST" action="/task/{{ $task->id }}">

                        <div class="form-group">
                            <textarea name="description" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-style: italic font-medium placeholder-gray-700 focus:outline-none focus:bg-white">{{$task->description }}</textarea>
                            @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>


                        <div class="form-group">
                            <button type="submit" name="update" class="bg-blue-500 hover:bg-blue-700 text-white font-style: italic font-bold py-2 px-4 rounded">Update task</button>
                        </div>
                        {{ csrf_field() }}
                    </form>

                </div>
            </div>
    </body>
</x-app-layout>