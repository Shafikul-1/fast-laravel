{{-- <div class="alert absolute bottom-0 z-99 right-0 ">
    <div class="flex w-96 shadow-lg rounded-lg">
        <div class="{{$type}} py-4 px-6 rounded-l-lg flex items-center">
            <i class="fa-solid fa-check text-white"></i>
        </div>
        <div class="px-4 py-6 bg-white rounded-r-lg flex justify-between items-center w-full border border-l-transparent border-gray-200">
            <div>{{$massage}}</div>
            <button>
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
    </div>
</div> --}}

<div {{$attributes->merge(['class' => 'alert', 'role' => $attributes->prepends('alert')])}} > 
    {{--  👉 {{$attributes->merge(['class' => 'alert'])}} other attributes add korar jono --}}
    <div class="flex w-96 shadow-lg rounded-lg">
        {{-- <div class="bg-{{ $type }}-600 py-4 px-6 rounded-l-lg flex items-center">  --}}
            {{--   👉 basic type setup --}}
        <div class="bg-{{ $valiedType }}-600 py-4 px-6 rounded-l-lg flex items-center">
           
            @if ($type == 'green')
                <i class="fa-solid fa-check text-white"></i>
            @elseif ($type == 'yellow')
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="fill-current text-white" width="20" height="20"><path fill-rule="evenodd" d="M8.22 1.754a.25.25 0 00-.44 0L1.698 13.132a.25.25 0 00.22.368h12.164a.25.25 0 00.22-.368L8.22 1.754zm-1.763-.707c.659-1.234 2.427-1.234 3.086 0l6.082 11.378A1.75 1.75 0 0114.082 15H1.918a1.75 1.75 0 01-1.543-2.575L6.457 1.047zM9 11a1 1 0 11-2 0 1 1 0 012 0zm-.25-5.25a.75.75 0 00-1.5 0v2.5a.75.75 0 001.5 0v-2.5z"></path></svg>
            @elseif ($type == 'red')
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="fill-current text-white" width="20" height="20"><path fill-rule="evenodd" d="M4.47.22A.75.75 0 015 0h6a.75.75 0 01.53.22l4.25 4.25c.141.14.22.331.22.53v6a.75.75 0 01-.22.53l-4.25 4.25A.75.75 0 0111 16H5a.75.75 0 01-.53-.22L.22 11.53A.75.75 0 010 11V5a.75.75 0 01.22-.53L4.47.22zm.84 1.28L1.5 5.31v5.38l3.81 3.81h5.38l3.81-3.81V5.31L10.69 1.5H5.31zM8 4a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5A.75.75 0 018 4zm0 8a1 1 0 100-2 1 1 0 000 2z"></path></svg>
            @elseif ($type == 'indigo')
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-white" viewBox="0 0 16 16" width="20" height="20"><path fill-rule="evenodd" d="M8 1.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM0 8a8 8 0 1116 0A8 8 0 010 8zm6.5-.25A.75.75 0 017.25 7h1a.75.75 0 01.75.75v2.75h.25a.75.75 0 010 1.5h-2a.75.75 0 010-1.5h.25v-2h-.25a.75.75 0 01-.75-.75zM8 6a1 1 0 100-2 1 1 0 000 2z"></path></svg>
            @endif
            
        </div>
        <div class="px-4 py-6 bg-white rounded-r-lg flex justify-between items-center w-full border border-l-transparent border-gray-200">
            <div>{{ $massage }}</div>
            @if ($dismis)
            <button>
                <i class="fa-solid fa-xmark"></i>
            </button>
            @endif
        </div>
    </div>
</div>
