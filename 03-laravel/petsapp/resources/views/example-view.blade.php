<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
</head>
<body>
    <h1 class="text-4xl text-center my-10">{{$title}}</h1>

    <div class="overflow-x-auto">
        <table class="table">
          <!-- head -->
          <thead>
            <tr>
              <th>Name</th>
              <th>Breed</th>
              <th>Location</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pets as $pet)
            <tr class="hover:bg-blue-300">
              <td>
                <div class="flex items-center gap-3">
                  <div class="avatar">
                    <div class="mask mask-squircle h-12 w-12">
                      <img
                        src="{{ asset('images/'.$pet->image) }}"
                        alt="{{ $pet->name }}" />
                    </div>
                  </div>
                  <div>
                    <div class="font-bold">{{$pet->name}}</div>
                    @if ($pet->kind == 'Dog')
                    <div class="badge badge-soft badge-primary badge-lg">{{$pet->kind}}</div>                    
                    @else
                    <div class="badge badge-primary badge-success badge-lg">{{$pet->kind}}</div>
                    @endif
                  </div>
                </div>
              </td>
              <td>
                <span class="badge badge-soft badge-warning">{{$pet->breed}}</span>
              </td>
              <td>{{$pet->location}}</td>
              <th>
                <a href="{{ route('pets.show', $pet->id) }}" class="btn btn-sm btn-outline btn-info">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z" clip-rule="evenodd" />
                      </svg>                      
                </a>
              </th>
            </tr>
            @endforeach
            </tbody>
          <!-- foot -->
          <tfoot>
            <tr>
                <th>Name</th>
                <th>Breed</th>
                <th>Location</th>
                <th>Actions</th>
            </tr>
          </tfoot>
        </table>
      </div>

♦
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</body>
</html>
