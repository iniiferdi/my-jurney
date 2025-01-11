@extends('layouts.application')
@section('content')
    <x-navbar />
    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        <x-menus />

        <div class="w-full px-6 py-6 mx-auto">
            <!-- table 1 -->

            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-full max-w-full px-3">
                    <div
                        class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                        <div
                            class="flex items-center justify-between p-6 pb-0 mb-0 mb-4 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                            <h6>Jurnal Siswa</h6>
                            <form action="{{ route('create-jurnal') }}" method="get">
                                <button type="submit"
                                    class="inline-block px-6 py-3 text-xs font-bold text-center text-white uppercase align-middle transition-all bg-green-600 rounded-lg cursor-pointer leading-pro ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Create</button>
                            </form>
                        </div>
                        <div class="flex-auto px-0 pt-0 pb-2">
                            <div class="p-0 overflow-x-auto">
                                <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                    <thead class="align-bottom">
                                        <tr>
                                            <th
                                                class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                No</th>
                                            <th
                                                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Tanggal</th>
                                            <th
                                                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Kegiatan</th>
                                            <th
                                                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Status</th>
                                            <th
                                                class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            @foreach ($jurnals as $jurnal)
                                        <tr>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                <div class="flex px-2 py-1">
                                                    <div class="flex flex-col justify-center">

                                                        <h6 class="mb-0 text-sm leading-normal">1</h6>

                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                <p class="mb-0 text-xs font-semibold leading-tight">{{ $jurnal->date }}</p>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                <div class="flex px-2 py-1">
                                                    <div class="flex flex-col justify-center">
                                                        <h6 class="mb-0 text-sm leading-normal">{{ $jurnal->kegiatan }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                @if ($jurnal->status == 0)
                                                    <p class="mb-0 text-xs font-semibold leading-tight"><span
                                                            class="p-1 text-yellow-600 rounded-lg">UnApprove</span>
                                                    </p>
                                                @elseif($jurnal->status == 1)
                                                    <p class="mb-0 text-xs font-semibold leading-tight"><span
                                                            class="p-1 text-green-700 rounded-lg">Approve</span>
                                                    </p>
                                                @endif
                                            </td>
                                            <td
                                                class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                <span class="text-xs font-semibold leading-tight text-slate-400"></span>
                                            </td>

                                            <td
                                                class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                <a href="edit-jurnal/{{$jurnal->id}}"
                                                    class="text-xs font-semibold leading-tight text-blue-600"> Edit </a>
                                                <span>|</span>
                                                <a class="text-xs font-semibold leading-tight text-red-600"
                                                    href="delete-jurnal/{{$jurnal->id}}">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach

                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <p class="mb-0 text-xs font-semibold leading-tight"></p>
                                        </td>
                                        <td
                                            class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span class="text-xs font-semibold leading-tight text-slate-400"></span>
                                        </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('delete'))
        <script>
            Swal.fire('{{session('delete')}}');
        </script>
        {{session()->forget('delete')}}
    @endif
    @if (session('create'))
        <script>
            Swal.fire('{{session('create')}}');
        </script>
        {{session()->forget('create')}}
    @endif
    @if (session('update'))
        <script>
            Swal.fire('{{session('update')}}');
        </script>
        {{session()->forget('update')}}
    @endif
@endsection
