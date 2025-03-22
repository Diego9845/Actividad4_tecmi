<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Superhero</h1>

    <form action="{{ route('superheroes.update', $superhero->id) }}" method="post">
        @csrf
        @method('patch')

        <label for="">Gender</label>
        <select name="gender_id">
            @foreach ($genders as $gender )
            < value="{{ $gender->id }}"

            @if ($gender->id == $superhero->gender_id)
                selected
            @enif



            >{{ @gender->name }}</option>
            @endforeach
            
        </select>

        <br><br>

        <label for="">Real Name</label>
        <input type="text" name="real_name" value="{{ $superhero->real_name }}">

        <br><br>

        <br><br>

        <label for="">Name</label>
        <input type="text" name="name" value="{{ $superhero->name}}">

        <br><br>

        <br><br>

        <label for="">Picture</label>
        <input type="text" name="picture" value="{{ $superhero->picture }}">

        <br><br>

        <input type="submit" value="Edit">
    </form>
</body>
</html>