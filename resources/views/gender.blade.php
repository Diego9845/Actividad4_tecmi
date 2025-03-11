<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport"content= "witdth=device-width, initial-scale=1.0">
    <title>Gender Test</title>
</head>
<body>

    <h1>Gender</h1>
    
    <table>
    <head>
        <tr>
            <th>Id</th>
            <th>Name</th>
        </tr>
    </head>

    <tbody>
        @foreach($gender as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
            </tr>
        
        @endforeach
        <tr>
            <td>1</td>
            <td>Name</td>
        </tr>
    </tbody>
    </table>
</body>
</html>