<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>
</head>

<body>
    <div class="">
        <a href="{{ route('home') }}">home</a>
        <a href="{{ route('alluser') }}">alluser</a>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
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
                        city
                    </th>
                    <th scope="col" class="px-6 py-3">
                        roll
                    </th>
                    <th scope="col" class="px-6 py-3">
                        action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $value)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$value->id}}
                        </th>
                        <td class="px-6 py-4">
                            {{$value->name}}
                        </td>
                        <td class="px-6 py-4">
                            {{$value->email}}
                        </td>
                        <td class="px-6 py-4">
                            {{$value->city}}
                        </td>
                        <td class="px-6 py-4">
                            {{$value->roll}}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{route('singleuser',$value->id )}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">view</a>
                        </td> 
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

</body>

</html>
