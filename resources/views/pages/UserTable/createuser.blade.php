@extends('layouts.application')
@section('content')
    <x-navbar />
    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        <x-menus />
        <div class="w-full px-3 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
            <div class="flex flex-wrap mx-3">
                <div class="flex-none w-full max-w-full ">
                    <div
                        class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                        <div
                            class="flex items-center justify-between p-6 pb-0 mb-0 mb-4 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                            <h6>Create User</h6>

                        </div>
                        <div class="flex-auto p-6">
                            <form action="{{route('store-user')}}" method="POST" role="form" class="text-left">
                                @csrf

                                <label for="name" class="mb-2 ml-1 text-xs font-bold text-slate-700">Name</label>
                                <div class="mb-4">
                                    <input type="text" name="full_name" id="full_name"
                                        class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-indigo-300 focus:outline-none focus:transition-shadow"
                                        placeholder="Enter User Name" />
                                </div>

                                <label for="induk" class="mb-2 ml-1 text-xs font-bold text-slate-700">NIS/NIP</label>
                                <div class="mb-4">
                                    <input type="text" name="induk" id="indux"
                                        class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-indigo-300 focus:outline-none focus:transition-shadow"
                                        placeholder="Enter User NIS/NIP" />
                                </div>

                                <label for="username" class="mb-2 ml-1 text-xs font-bold text-slate-700">Username</label>
                                <div class="mb-4">
                                    <input type="text" name="username" id="username"
                                        class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-indigo-300 focus:outline-none focus:transition-shadow"
                                        placeholder="Enter User Username" />
                                </div>

                                <label for="password" class="mb-2 ml-1 text-xs font-bold text-slate-700">Password</label>
                                <div class="mb-4 ">
                                    <input type="text" name="password" id="password"
                                        class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-indigo-300 focus:outline-none focus:transition-shadow"
                                        placeholder="Enter Password" />
                                </div>

                                <label for="role" class="mb-2 ml-1 text-xs font-bold text-slate-700">Role</label>
                                <select id="role" name="role"
                                    class=" focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-indigo-300 focus:outline-none focus:transition-shadow">

                                    <option value="siswa">Siswa</option>
                                    <option value="guru">Pembimbing</option>
                                    <option value="admin">Admin</option>
                                    <option value="dudi">Dudi</option>
                                </select>

                                <div class="w-1/4">
                                    <div class="text-center">
                                        <button type="submit"
                                            class="inline-block w-full px-6 py-3 mt-6 mb-0 text-xs font-bold text-center text-white uppercase align-middle transition-all bg-indigo-600 border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro ease-soft-in tracking-tight-soft hover:scale-102 hover:shadow-soft-xs active:opacity-85">Create</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
    </main>
@endsection

{{-- <form action="{{route('admin.create-user')}}" method="get">
    <button type="submit" class="inline-block px-6 py-3 text-xs font-bold text-center text-white uppercase align-middle transition-all bg-green-600 rounded-lg cursor-pointer leading-pro ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Create</button>
</form> --}}
