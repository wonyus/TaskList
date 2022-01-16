<x-app-layout>
    <x-slot name="header">
        <h2 class="bg-clip-text text-transparent bg-gradient-to-r from-pink-300 to-violet-700 font-style: italic font-bold text-5xl text-[#0c1a35] text-gray-800 leading-tight">
            {{ __('ADD TASK :) ') }}
        </h2>
    </x-slot>
    <style>
            body {
                font-family: 'Nunito';
            }
            text-align:center;
            width:100%;
            margin:0 auto;
            padding:0px;
            font-family:helvetica;
            }
            #video_wrapper
            {
            margin:0px;
            padding:0px;
            }
            #myVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%; 
            min-height: 100%;
            }
            .LOGO{
            margin:0px;
            padding:0px;
            right: 0;
            bottom: 0;
            min-width: 10%; 
            min-height: 10%;
            }
            #myLogo {
            margin:0px;
            padding:0px;
            right: 0;
            bottom: 0;
            width: 10%; 
            height: 10%;
            }
            .button{ 
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                position: fixed ;
                top: 50%;
                bottom: 30;
                left: 27%;
                width :45%;

            }
            .login{
                width: 20%; 
                height: 20%;
                font-size: 50px;

            }
            .regis{
                margin-left:5%;
                width: 20%; 
                height: 20%;
                font-size:50px;
            }
            .login:hover, .regis:hover{
                background-color: #7FFFD4;
                border: 2px solid #00FFFF ;
                border-radius: 25px;
            }
            .image{
                padding: 5px;
                width: 150px;
                position: fixed ;
                bottom: 60%;
                left: 41.5%;
                width :45%;
            }
            img{
                border-radius: 50%; 
            }
        </style>

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