<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
     <h1>{{ $universe -> name }}</h1>
 
     <p><strong>Created At:</strong> {{ $universe->created_at }}</p>
     <p><strong>Updated At:</strong> {{ $universe->updated_at }}</p>
 
     <a href="{{ route('universe.index') }}">Back to list</a>
 </body>
 </html>