<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>{{ $post->title }}</h1>
                    <br/>
                    <br/>
                    <label for="category_id"> Category: {{ $category->name }}</label>
                    <br />
                    <br />
                    <label for="post_text"> Text: </label>
                    <textarea style="resize: none" name="post_text" type="text" class="
                     readonly
                     form-control
                     block
                     w-full
                     px-3
                     py-1.5
                     text-base
                     font-normal
                     text-gray-700
                     bg-white bg-clip-padding
                     border border-solid border-gray-300
                     rounded
                     transition
                     ease-in-out
                     m-0
                     focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                   "
                     rows="3"
                     placeholder="Your text here">{{ $post->post_text }}</textarea>
                     <br />
                     <br />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>