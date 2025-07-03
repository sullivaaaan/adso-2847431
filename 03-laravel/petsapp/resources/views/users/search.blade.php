@foreach ($users as $user)
                     <tr class="hover:bg-base-300">
                        <td>
                            <div class="flex items-center gap-3">
                                <div class="avatar">
                                    <div class="mask mask-squircle h-12 w-12">
                                        <img src="{{ asset('images/' . $user->photo) }}" alt="Photo" />
                                    </div>
                                </div>
                                <div>
                                    <div class="font-bold">{{ $user->fullname }}</div>
                                    <div class="text-sm opacity-50"> ID: {{ $user->document }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="sm:table-cell hidden">
                            <span class="badge badge-outline badge-neutral">{{ $user->role }}</span>
                        </td>
                        <td class="md:table-cell hidden">{{ $user->email }}</td>
                        <td>
                            {{-- Botón Ver --}}
                            <a class="btn btn-outline btn-square btn-neutral btn-xs"
                                href="{{ route('users.show', $user->id) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                </svg>
                            </a>

                            {{-- Botón Editar --}}
                            <a href="{{ route('users.edit', $user->id) }}"
                                class="btn btn-outline btn-square btn-warning btn-xs">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Z" />
                                </svg>
                            </a>
                            {{-- Botón Eliminar --}}
                            <form id="delete-form-{{ $user->id }}" action="{{ route('users.destroy', $user->id) }}"
                                method="POST" class="hidden">
                                @csrf
                                @method('DELETE')
                            </form>
                            <a href="javascript:;" class="btn btn-outline btn-square btn-error btn-xs btn-delete" data-fullname="{{ $user->fullname }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166M4.772 5.79l.456 9.84m.108 1.71c.165.014.33.028.496.04m6.632 3.29c-.167.007-.334.01-.5.01s-.333-.003-.5-.01m6.632-3.29a9.04 9.04 0 0 1-13.264 0M21 5.25H3" />
                                </svg>
                            </a>

                            <form class="hidden" method="post" action="{{ url('users/' . $user->id) }}">
                                @csrf
                                @method('delete')
                            </form>                           

                            {{-- <button onclick="confirmDelete({{ $user->id }})"
                                class="btn btn-outline btn-square btn-error btn-xs">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                            </button> --}}


                        </td>
                    </tr>
@endforeach