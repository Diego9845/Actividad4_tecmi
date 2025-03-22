<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Gender</title>
 </head>
 <body>
     <h1>Create gender</h1>
 
     <form action="{{ route('gender.store') }}" method="post">
         @csrf
         <label for="">Gender</label>
         <input typ="text" name="name">
 
         <input type="submit" value="Create Gender">
         <br><br>
         <a href="{{ route('gender.index') }}">Back to list</a>
     </form>
 
     
 </body>
 </html>