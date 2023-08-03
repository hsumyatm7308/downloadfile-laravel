<!DOCTYPE html>
<html>

<head>
    <title>File Type</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    <div class="w-screen h-screen bg-stone-100 flex justify-center items-center">
        <div class="w-[600px] h-[300px] bg-stone-200">
        <!-- <form action="{{ route('download.remote') }}" method="post">
    @csrf
    <input type="text" name="download_url" placeholder="Enter the URL">
    <button type="submit">Download</button>
</form> -->

<a href="{{ route('download', ['filename' => 'guitar.pdf']) }}">Download Example PDF</a>

        </div>
    </div>

</body>

</html>