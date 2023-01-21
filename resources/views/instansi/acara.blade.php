@extends('layout.app')

@section('title', 'Instansi - Acara')

@section('content')
    <form>
        {{-- flexbox --}}
        <div style="display: flex">
            {{-- kiri --}}
            <div class="">
                <label>Nama Acara</label></label>
                <div class="field">
                    <p class="control has-icons-left">
                        <input class="input" type="id" placeholder="0001">
                        <span class="icon is-small is-left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person" viewBox="0 0 16 16">
                                <path
                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                            </svg>
                        </span>
                    </p>
                </div>
                <label>Deskripsi Acara</label>
                <textarea class="textarea" placeholder="Type your message" rows="8">
                </textarea>
                {{-- <div class="field">
                    <p class="control has-icons-left">
                        <textarea class="textarea" placeholder="10 lines of textarea" rows="10"></textarea>
                        <span class="icon is-small is-left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg>
                        </span>
                    </p>
                </div> --}}
            </div>
            {{-- kanan --}}
            <div class="mx-6">
                <label>Lokasi Acara</label>
                <div class="field">
                    <p class="control has-icons-left">
                        <input class="input" type="alamat" placeholder="Jl. AM. Sangaji">
                        <span class="icon is-small is-left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pin-map" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z" />
                                <path fill-rule="evenodd"
                                    d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z" />
                            </svg>
                        </span>
                    </p>
                </div>
                <label>Waktu</label>
                <div class="field">
                    <p class="control has-icons-left">
                        <input class="input" type="time" placeholder="#">
                        <span class="icon is-small is-left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-clock" viewBox="0 0 16 16">
                                <path
                                    d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                            </svg>
                        </span>
                    </p>
                </div>
                <label>Tanggal Acara</label>
                <br>
                <label>Dari</label>
                <div class="field">
                    <p class="control has-icons-left">
                        <input class="input" type="date" placeholder="#">
                        <span class="icon is-small is-left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-calendar-week" viewBox="0 0 16 16">
                                <path
                                    d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                                <path
                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                            </svg>
                        </span>
                    </p>
                </div>
                <label>Sampai</label>
                <div class="field">
                    <p class="control has-icons-left">
                        <input class="input" type="date" placeholder="#">
                        <span class="icon is-small is-left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-calendar-week" viewBox="0 0 16 16">
                                <path
                                    d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                                <path
                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                            </svg>
                        </span>
                    </p>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <label>Pilih Template Sertifikat</label>
            <div class="control mt-1">
                <div>
                    <div style="display: flex">
                        <div class="m-1">
                            <figure class="">
                                <iframe class="has-ratio" width="170" height="120"
                                    src="{{ asset('asset/img/1st Certificate.png') }}" frameborder="0"></iframe>
                            </figure>
                            <label class="radio">
                                <input type="radio" name="foobar">
                                1st sertificate
                            </label>
                        </div>
                        <div class="m-1">
                            <figure class="">
                                <iframe class="has-ratio" width="170" height="120"
                                    src="{{ asset('asset/img/2nd Certificate.png') }}" frameborder="0"></iframe>
                            </figure>
                            <label class="radio">
                                <input type="radio" name="foobar" checked>
                                2nd sertificate
                            </label>
                        </div>
                        <div class="m-1">
                            <figure class="">
                                <iframe class="has-ratio" width="170" height="120"
                                    src="{{ asset('asset/img/3rd Certificate.png') }}" frameborder="0"></iframe>
                            </figure>
                            <label class="radio">
                                <input type="radio" name="foobar">
                                3rd sertificate
                            </label>
                        </div>
                    </div>
                    <div style="display: flex" class="m-1">
                        <div class="m-1">
                            <figure class="">
                                <iframe class="has-ratio" width="170" height="120"
                                    src="{{ asset('asset/img/4th Certificate.png') }}" frameborder="0"></iframe>
                            </figure>
                            <label class="radio">
                                <input type="radio" name="foobar">
                                4th sertificate
                            </label>
                        </div>
                        <div class="m-1">
                            <figure class="">
                                <iframe class="has-ratio" width="170" height="120"
                                    src="{{ asset('asset/img/5th Certificate.png') }}" frameborder="0"></iframe>
                            </figure>
                            <label class="radio">
                                <input type="radio" name="foobar">
                                5th sertificate
                            </label>
                        </div>
                        <div class="m-1">
                            <figure class="">
                                <iframe class="has-ratio" width="170" height="120"
                                    src="{{ asset('asset/img/Clasic Certificate.png') }}" frameborder="0"></iframe>
                            </figure>
                            <label class="radio">
                                <input type="radio" name="foobar">
                                Classic sertificate
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-3">
            <button class="button is-link is-rounded">Verified</button>
        </div>
    </form>
@endsection
