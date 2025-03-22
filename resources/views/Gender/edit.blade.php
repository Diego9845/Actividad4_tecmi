<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Edit Gender</title>
 </head>
 <body>
     <h1>Edit Gender</h1>
     <form action="{{ route('gender.update', $gender->gender) }}" method="post">
         @csrf
         @method('patch')
 
         <br><br>
 
         <label for="Gender">Gender</label>
         <input type="text" name="name" value="{{ $gender->gender }}">
 
         <br><br>
 
         <br><br>
 
         <input type="submit" value="Edit">
         
         <br><br>
         <a href="{{ route('gender.index') }}">Back to list</a>
     </form>
 </body>
 </html>