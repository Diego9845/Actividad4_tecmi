<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Gender</title>
 </head>
 <body>
     <h1>{{ $gender -> gender }}</h1>
 
     <p><strong>Created At:</strong> {{ $gender->created_at }}</p>
     <p><strong>Updated At:</strong> {{ $gender->updated_at }}</p>
 
     <a href="{{ route('gender.index') }}">Back to list</a>
 </body>
 </html>