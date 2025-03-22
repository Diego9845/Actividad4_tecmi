<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Edit Universe</title>
 </head>
 <body>
     <h1>Edit Universe</h1>
     <form action="{{ route('universe.update', $universe->id) }}" method="post">
         @csrf
         @method('patch')
 
         <br><br>
 
         <label for="name">Name</label>
         <input type="text" name="name" value="{{ $universe->name }}">
 
         <br><br>
 
         <br><br>
 
         <input type="submit" value="Edit">
         
         <br><br>
         <a href="{{ route('universe.index') }}">Back to list</a>
     </form>
 </body>
 </html>