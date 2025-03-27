<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List All Users</title>
</head>
<body class="bg-teal-800 
            flex
            text-white
            flex-col
            gap-8
            justify-center
            min-h-[100dvh]
            items-center">
    <h1 class="font-bold
                border-b-2
                text-4x1">
    List All Users 
    <small class="text-teal-400 
                text-xs">
    Factory challenge</small> 
    </h1>

    <section class="users
                    grid
                    grid-cols-2
                    sm:grid-cols-3
                    md:grid-cols-5
                    gap-2">

    @foreach ($users as  $user)
     <div class="flex
                flex-col
                bg-teal-700 
                p-4 
                rounded-lg 
                justify-center
                items-center"> 
        <img src="{{ asset('images/'.$user->photo)}} 
        "width="100px" 
        height="100px" class="rounded-full" alt="User Photo">
        <h3 class="font-bold">{{$user->fullname}}</h3>
        <h4 class="text-teal-100">{{ $user->role}}</h4>
        <h5 class="text-teal-50 opacity-25">
            Adoptions: 
            <small>{{$user->adoptions->count()}}</small>
        </h5>
     </div>
    @endforeach

    </section>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</body>
</html>