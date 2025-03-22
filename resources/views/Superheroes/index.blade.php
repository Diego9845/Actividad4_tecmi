<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport"content= "witdth=device-width, initial-scale=1.0">
    <title>Superheroes Table</title>
</head>
<body>

    <h1>Superheroes</h1>

    <hr>
    <a href="{{ route('superheroes.create') }}">Create Superhero</a>
    <hr>

    <table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Real Name</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($superheroes as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->real_name }}</td>
                <td>
                    <a href="{{ route('superheroes.show', $item->id) }}">Show</a>
                    <a href="{{ route('superheroes.edit', $item->id) }}">Edit</a>

                    <form action="{{ route('superheroes.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('delete')

                        <input type="submit" value="Delete" onclick="return confirm('Are you sure abou it?')">
                    </form>
                </td>
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
