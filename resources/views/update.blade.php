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
  <div class="mt-10"></div>

    <form method="POST" action="{{route('upload.update', $getData['id'])}}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
        <div class="flex items-center space-x-6 ml-10">
          <div class="shrink-0">
            <img id='preview_img' class="h-16 w-16 object-cover rounded-full" src="{{asset('storage'). "/" . $getData['file_name']}}" alt="Current profile photo" />
          </div>
          <label class="block">
            <span class="sr-only">Choose profile photo</span>
            <input type="file" name="image" onchange="loadFile(event)" class="block w-full text-sm text-slate-500
              file:mr-4 file:py-2 file:px-4
              file:rounded-full file:border-0
              file:text-sm file:font-semibold
              file:bg-violet-50 file:text-violet-700
              hover:file:bg-violet-100
            "/>
          </label>
        </div>
        <input type="submit" value="Submit" class="mt-5 ml-5 border rounded bg-gray-300 cursor-pointer">
      </form>
      
      
      <script>
              var loadFile = function(event) {
                  
                  var input = event.target;
                  var file = input.files[0];
                  var type = file.type;
      
                 var output = document.getElementById('preview_img');
      
      
                  output.src = URL.createObjectURL(event.target.files[0]);
                  output.onload = function() {
                      URL.revokeObjectURL(output.src) // free memory
                  }
              };
      </script>
</body>
</html>