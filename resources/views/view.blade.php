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
    <div class="h-screen w-full dark:bg-gray-900">

        <div class="w-full mx-auto py-10 px-4 md:px-8">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                    From The Blog
                </h2>
            </div>
            <div
                class="grid max-w-2xl grid-cols-1 gap-8 mx-auto mt-8 auto-rows-fr lg:mx-0 lg:max-w-none lg:grid-cols-3">
                @foreach ($data as $datas)
                    <article
                        class="relative flex flex-col justify-end px-4 pt-40 pb-4 overflow-hidden bg-gray-900 md:pt-28 isolate rounded-xl dark:shadow dark:shadow-gray-400/50">
                        <img src="{{ asset('/storage') . "/" . $datas->file_name }}" alt=""
                            class="absolute inset-0 object-cover w-full h-full -z-10">
                        <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                        <div class="absolute inset-0 -z-10 rounded-xl ring-1 ring-inset ring-gray-900/10"></div>

                        <div class="flex justify-between">
                            <a class="text-lg font-semibold leading-6 text-white hover:text-teal-100" href="{{route('upload.edit', $datas->id)}}">UpDate</a>
                            <form action="{{route('upload.destroy', $datas->id)}}" method="post" class="text-lg font-semibold leading-6 text-white hover:text-teal-100">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>  
                            </form>
                        </div>
                    </article>
                @endforeach

            </div>
        </div>

    </div>

    @if (session('msg'))
        <div class="alert absolute bottom-0 z-99 right-0">
            <div class="flex w-96 shadow-lg rounded-lg">
                <div class="bg-green-600 py-4 px-6 rounded-l-lg flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-white fill-current" viewBox="0 0 16 16"
                        width="20" height="20">
                        <path fill-rule="evenodd"
                            d="M13.78 4.22a.75.75 0 010 1.06l-7.25 7.25a.75.75 0 01-1.06 0L2.22 9.28a.75.75 0 011.06-1.06L6 10.94l6.72-6.72a.75.75 0 011.06 0z">
                        </path>
                    </svg>
                </div>
                <div
                    class="px-4 py-6 bg-white rounded-r-lg flex justify-between items-center w-full border border-l-transparent border-gray-200">
                    <div> {{ session('msg') }}</div>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-700" viewBox="0 0 16 16"
                            width="20" height="20">
                            <path fill-rule="evenodd"
                                d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    @endif
</body>

</html>
