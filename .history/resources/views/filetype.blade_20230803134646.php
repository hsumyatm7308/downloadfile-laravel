<!DOCTYPE html>
<html>

<head>
    <title>File Type</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    <div class="w-screen h-screen bg-stone-100 flex justify-center items-center">
        <div class="w-[600px] h-[300px] bg-stone-200">
            <form action="{{route('download.remote')}}" method="post" class=" w-full h-full flex justify-center items-center">
                
                <input type="text" name="download_url" placeholder="Paste your link.." class="rounded-tl rounded-tr rounded-bl pl-2 pr-9 py-2 m-1 focus:outline-none">
                <button type="submit" class=" bg-green-500 rounded-tl rounded-tr rounded-br px-2 py-[7px]">Download</button>
            </form>
        </div>
    </div>

</body>

</html>