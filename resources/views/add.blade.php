<x-app-layout>
    <x-slot name="header">
        <h2 class="font-style: italic font-bold text-4xl text-gray-800 leading-tight">
            {{ __('ADD TASK :) ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-clip-border p-6 bg-sky-400 border-4 border-sky-600 border-dashed overflow-hidden shadow-xl sm:rounded-lg p-5">
            
                <form method="POST" action="/task">

                    <div class="form-group">
                        <textarea name="description" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-font-style: italic placeholder-gray-700 focus:outline-none focus:bg-white"  placeholder='Enter your task'></textarea>  
                        @if ($errors->has('description'))
                            <span class="text-danger font-style: italic font-medium ">{{ $errors->first('description') }}</span>
                        @endif
                    </div>


                    <div class="form-group">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-style: italic font-bold py-2 px-4 rounded">Add Task</button>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>


</x-app-layout>