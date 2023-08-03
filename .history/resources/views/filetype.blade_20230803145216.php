<!DOCTYPE html>
<html>
<head>
    <title>Download Example PDF</title>
</head>
<body>
    <h1>Download Example PDF</h1>
    <p>Click the button below to download the example PDF:</p>
    <a href="/download" class="btn btn-primary">Download PDF</a>

    <form action="{{ route('download.remote') }}" method="post">
    @csrf
    <input type="text" name="download_url" placeholder="Enter the URL">
    <button type="submit">Download</button>
</form>

</body>
</html>
