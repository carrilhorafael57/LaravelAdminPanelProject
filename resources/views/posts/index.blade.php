<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href=" {{ route('posts.create') }}">Add a new post</a>
                    <br />
                    <br />
                    <table>
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Category</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                   <td > {{$post->title}} </td>
                                   <td>{{ $post->category->name }}</td>
                                   <td style="padding-left: 10px">
                                    <div class="px-10 w-100 bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow text-center"> 
                                        <button>
                                            <a href=" {{ route('posts.edit', $post) }} "> Edit </a>
                                        </button>
                                    </div>
                                    <div class="w-100 bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow text-center"> 
                                        <form method="POST" action=" {{route('posts.destroy', $post)}} ">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
