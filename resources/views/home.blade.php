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
                        address
                    </th>

                    <th scope="col" class="px-6 py-3">
                        age
                    </th>
                    <th scope="col" class="px-6 py-3">
                        number
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $value)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $value->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $value->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $value->email }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $value->address }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $value->age }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $value->phone }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $data->links() }}
    </div>

</body>

</html>
