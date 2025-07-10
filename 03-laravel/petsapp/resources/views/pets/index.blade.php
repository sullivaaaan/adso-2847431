@extends('layouts.app')
@section('title', 'Módulo de Mascotas')

@section('content')
    @include('layouts.navbar')

    <h1 class="text-3xl pt-30 flex gap-2 items-center text-white font-bold mb-10 pb-2 border-b-2">
        <svg fill="#ffffff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px" viewBox="0 0 480.763 480.763"
            xml:space="preserve" stroke="#ffffff">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <g>
                    <g>
                        <path
                            d="M382.783,245.3l-0.252,10.963c-0.546,24.367-3.384,48.907-12.961,70.165c37.001-43.356,68.13-99.124,68.13-164.092 c0-56.36-45.714-102.058-102.068-102.058c-35.157,0-66.138,17.808-84.46,44.893c3.72,0.362,7.485,0.887,11.336,1.622l15.761,3.029 c19.85-23.228,59.016-56.359,116.243,6.861C456.583,185.244,425.085,235.894,382.783,245.3z">
                        </path>
                        <path
                            d="M97.911,245.281c-42.239-9.441-73.656-60.091-11.619-128.608c57.583-63.601,96.856-29.68,116.569-6.445l16.755-3.561 c3.696-0.716,7.313-1.232,10.875-1.568c-18.333-27.05-49.261-44.83-84.407-44.83c-56.354,0-102.094,45.7-102.094,102.058 c0,0-13.637,69.164,65.792,157.479c-8.454-20.718-10.937-43.269-11.544-63.481L97.911,245.281z">
                        </path>
                        <path
                            d="M176.969,380.37c20.509,15.388,43.997,30.999,71.187,46.61c0,0,33.888-18.696,73.008-52.337 c-19.924,9.157-46.195,14.51-80.785,14.51C214.968,389.153,194.144,385.929,176.969,380.37z">
                        </path>
                        <path
                            d="M352.078,15.727c-46.488,0-88.287,24.498-111.09,63.771c-22.819-39.264-64.616-63.771-111.076-63.771 C59.2,15.727,1.625,73.01,1.181,143.595c-2.464,14.664-20.85,166.857,243.848,318.897l4.411,2.544l4.466-2.46 c9.255-5.092,226.857-127.015,226.857-318.155C480.773,73.454,423.037,15.727,352.078,15.727z M249.528,444.16 C-5.815,295.579,18.863,147.627,19.133,146.179l0.182-1.757c0-60.971,49.625-110.57,110.605-110.57 c45.501,0,85.792,27.352,102.657,69.68l8.417,21.142l8.422-21.142c16.843-42.321,57.148-69.67,102.671-69.67 c60.971,0,110.567,49.606,110.567,110.568C462.651,310.406,280.307,425.874,249.528,444.16z">
                        </path>
                        <path
                            d="M306.919,170.51c3.472-17.625,15.443-34.697,15.598-34.907c2.884-4.088,1.95-9.761-2.147-12.669 c-4.041-2.91-9.712-1.958-12.624,2.119c-0.584,0.798-9.549,13.561-15.243,29.891c-11.561-6.345-24.119-11.929-30.354-14.438 l-5.638-2.273c-4.257-1.722-7.495-4.985-9.119-9.12c-4.248-0.35-8.254-0.408-12.531-0.089c-1.594,4.177-4.856,7.486-9.162,9.215 l-5.647,2.273c-5.824,2.357-17.182,7.395-28.1,13.215c-5.701-15.724-14.274-27.876-14.807-28.665 c-2.936-4.086-8.613-5.038-12.669-2.119c-4.1,2.908-5.04,8.581-2.114,12.669c3.435,4.847,10.65,16.99,14.302,29.797 c-0.745,1.638-1.307,3.47-1.37,5.066c-1.386,26.197-7.103,61.629-26.506,81.705c-7.339,7.574-16.092,12.55-25.8,14.715 c3.596,50.194,23.345,98.079,117.382,98.079c90.894,0,113.977-37.36,117.524-98.396c-9.185-2.301-17.492-7.164-24.475-14.397 C314.037,232.1,308.31,196.692,306.919,170.51z M283.976,305.758h-23.849v-44.249h-39.36v44.249h-23.849V200.037h23.849v40.618 h39.36v-40.618h23.849V305.758z">
                        </path>
                    </g>
                </g>
            </g>
        </svg>
        Módulo de Mascotas
    </h1>

    <ul class="menu gap-1 mb-8 menu-horizontal bg-base-200 rounded-box">
        <li>
            <a href="{{ url('pets/create') }}" class="btn btn-sm sm:btn-md btn-success btn-outline">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                Añadir Mascota
            </a>
        </li>
        <li><a class="btn btn-sm sm:btn-md btn-neutral btn-outline">Exportar PDF</a></li>
        <li><a class="btn btn-sm sm:btn-md btn-neutral btn-outline">Exportar Excel</a></li>
        <li><input class="py-2" id="qsearch" name="qsearch" type="search" placeholder="Buscar..."></li>
    </ul>

    <div class="overflow-x-auto my-2 rounded-box bg-base-100">
        <table class="table table-zebra">
            <!-- head -->
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th class="sm:table-cell hidden">Tipo</th>
                    <th class="md:table-cell hidden">Raza</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="list">
                @foreach ($pets as $pet)
                    <tr class="hover:bg-base-300">
                        <td>
                            <div class="flex items-center gap-3">
                                <div class="avatar">
                                    <div class="mask mask-squircle h-12 w-12">
                                        <img src="{{ asset('images/' . $pet->image ) }}" alt="imagen" />
                                    </div>
                                </div>
                                <div>
                                    <div class="font-bold">{{ $pet->name }}</div>
                                    <div class="text-sm opacity-50"> Edad: {{ $pet->age }} años</div>
                                </div>
                            </div>
                        </td>
                        <td class="sm:table-cell hidden">
                            <span class="badge badge-outline badge-neutral">{{ $pet->kind }}</span>
                        </td>
                        <td class="md:table-cell hidden">{{ $pet->breed }}</td>
                        <td>
                            <a class="btn btn-outline btn-square btn-neutral btn-xs" href="{{ url('pets/' . $pet->id) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                </svg>
                            </a>
                            <a class="btn btn-outline btn-square btn-neutral btn-xs"
                                href="{{ url('pets/' . $pet->id . '/edit') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                            </a>
                            <a href="javascript:;" class="btn btn-outline btn-square btn-error btn-xs btn-delete"
                                data-petname="{{ $pet->name }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-4">
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
                @endforeach
            </tbody>
            <!-- foot -->
            <tfoot>
                <tr>
                    <th>Nombre</th>
                    <th class="sm:table-cell hidden">Tipo</th>
                    <th class="md:table-cell hidden">Raza</th>
                    <th>Acciones</th>
                </tr>
            </tfoot>
        </table>
    </div>


    <div class="mt-1 text-xs text-white text-center">

        Mostrando {{ $pets->firstItem() }} a {{ $pets->lastItem() }} de {{ $pets->total() }} resultados

    </div>


    {{ $pets->links('layouts.paginator') }}

    <dialog id="message" class="modal">
        <div class="modal-box">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <h3 class="text-lg font-bold">Congratulations!</h3>
            <p id="text-message" class="py-4">Lorem ipsum dolor</p>
        </div>
    </dialog>

    <dialog id="confirm" class="modal">
        <div class="modal-box">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <h3 class="text-lg font-bold">Are you Sure?</h3>
            <p id="text-confirm" class="py-4">Lorem ipsum dolor</p>
            <div class="flex gap-2">
                <form method="dialog">
                    <button class="btn btn-sm">Cancel</button>
                </form>
                <button class="btn btn-sm btn-error btn-accept">Accept</button>
            </div>
        </div>
    </dialog>

@endsection

@section('js')
    <script>
        // Message
        const message = document.querySelector('#message')
        const textMessage = document.querySelector('#text-message')
        @if (session('message'))
            textMessage.textContent = "{{ session('message') }}"
            message.showModal()
        @endif

        // Delete
        const btnDelete = document.querySelectorAll('.btn-delete')
        const confirm = document.querySelector('#confirm')
        const textConfirm = document.querySelector('#text-confirm')
        const btnAccept = document.querySelector('.btn-accept')
        let frmDelete = undefined

        btnDelete.forEach(element => {
            element.addEventListener('click', function() {
                const petName = this.dataset.petname
                frmDelete = this.nextElementSibling
                textConfirm.textContent = `You want to delete:  ${petName}?`
                confirm.showModal()
            })
        })

        btnAccept.addEventListener('click', function() {
            frmDelete.submit()
        })

        // Search
        const qSearch = document.querySelector('#qsearch')
        const list = document.querySelector('#list')

        qSearch.addEventListener('input', function(event) {
            event.preventDefault()
            let query = this.value
            let token = document.querySelector('input[name=_token]')

            fetch('pets/search', { 
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': token.value
                    },
                    body: JSON.stringify({
                        'q': query
                    })
                }).then(response => response.text())
                .then(data => {
                    list.innerHTML = `
                    <tr>
                    <td colspan="4">
                        <span class="loading loading-spinner loading-xl flex mx-auto"></span>
                    </td>
                </tr>`
                    setTimeout(() => {
                        list.innerHTML = data
                    }, 2000)
                })
        })
    </script>
@endsection
