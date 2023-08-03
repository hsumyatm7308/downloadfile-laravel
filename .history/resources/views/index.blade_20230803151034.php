<!DOCTYPE html>
<html>
<head>
    <title>Download Example PDF</title>
</head>
<body>
    <h1>Download Next Level Guitar PDF</h1>
    <p>Click the button below to download the Next Level Guitar PDF:</p>

    <form action="{{ route('download') }}" method="get">
    <button type="submit">Download</button>
   </form>

</body>
</html>
