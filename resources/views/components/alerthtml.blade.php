<!-- Info -->
<div {{$attributes->merge(['class' => 'bg-blue-50 border border-blue-400 rounded text-blue-800 text-sm p-4 flex items-start'])}}>
    @if ($infoIcon == 'indigo')
    <div>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
        </svg>
    </div>
    
    @elseif ($infoIcon == 'green')
        <div class="">
            <i class="fa-solid fa-check"></i>
        </div>
    @elseif ($infoIcon == 'yellow')

        <div class="">
            <i class="fa-solid fa-triangle-exclamation"></i>
        </div>
    @elseif ($infoIcon == 'red')

        <div class="">
            <i class="fa-solid fa-xmark"></i>
        </div>
    @endif
        
    <p> <span class="font-bold">${{$info}}:</span>{{$msg}}</p>

    <div>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </div>
</div>
