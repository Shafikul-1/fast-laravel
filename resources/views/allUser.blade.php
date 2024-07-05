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
                        name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        role
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allUser as $user)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $user['id'] }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $user['name'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user['email'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user['role'] }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex justify-between">
                                <a href="{{route('singleuser', $user['id'])}}"><i class="fa-eye fa-solid"></i></a>
                                <a href="{{route('deleteuser', $user['id'])}}"> <i class="fa-trash fa-solid"></i></a>
                               
                            </div>
                        </td>
                @endforeach
                </tr>
            </tbody>
        </table>
    </div>
@endsection
