<!DOCTYPE html>
<html>
<head>
    <title>Download Example PDF</title>
</head>
<body>
    <h1>Download Example PDF</h1>
    <p>Click the button below to download the Next Level guitar PDF:</p>

    <form action="{{ route('download') }}" method="get">
    <button type="submit">Download</button>
   </form>

</body>
</html>
