@extends('main')
@section('otherContent')
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        user id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($postData as $post)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $post['id'] }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $post['title'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $post['description'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $post['user_id'] }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex justify-between">
                                <a href="{{route('post.show', $post['id'])}}"><i class="fa-eye fa-solid"></i></a>
                                <a href="{{route('post.destroy', $post['id'])}}"> <i class="fa-trash fa-solid"></i></a>
                               
                            </div>
                        </td>
                @endforeach
                </tr>
            </tbody>
        </table>
    </div>
@endsection
