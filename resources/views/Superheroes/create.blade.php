<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Superhero</h1>

    <form action="{{ route('superheroes.store') }}" method="post">
        @csrf
        <label for="">Gender</label>
        <select name="gender_id">
            @foreach ($genders as $gender )
            <option value="{{ $gender->id }}"> {{ $gender->name }}</option>
            @endforeach
            
        </select>

        <br><br>

        <input type="submit" value="Create">
    </form>
</body>
</html>