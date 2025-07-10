@forelse ($pets as $pet)
    <tr class="hover:bg-base-300">
        <td>
            <div class="flex items-center gap-3">
                <div class="avatar">
                    <div class="mask mask-squircle h-12 w-12">
                        <img src="{{ asset('images/' . $pet->image) }}" alt="imagen" />
                    </div>
                </div>
                <div>
                    <div class="font-bold">{{ $pet->name }}</div>
                    <div class="text-sm opacity-50"> Edad: {{ $pet->age }}</div>
                </div>
            </div>
        </td>
        <td class="sm:table-cell hidden">
            <span class="badge badge-outline badge-neutral">{{ $pet->kind }}</span>
        </td>
        <td class="md:table-cell hidden">{{ $pet->breed }}</td>
        <td>
            <a class="btn btn-outline btn-square btn-neutral btn-xs" href="{{ url('pets/' . $pet->id) }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
            </a>
            <a class="btn btn-outline btn-square btn-neutral btn-xs" href="{{ url('pets/' . $pet->id . '/edit') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                </svg>
            </a>
            <a href="javascript:;" class="btn btn-outline btn-square btn-error btn-xs btn-delete"
                data-petname="{{ $pet->name }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                </svg>
            </a>
            <form class="hidden" method="post" action="{{ url('pets/' . $pet->id) }}">
                @csrf
                @method('delete')
            </form>
        </td>
    </tr>
@empty
    <tr>
        <th colspan="4" class="text-center font-bold">No pets found!</th>
    </tr>
@endforelse
