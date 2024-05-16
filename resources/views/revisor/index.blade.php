<x-layout>

    @if (session('message'))
    <div class="alert rounded-3  alert-success">
        {{ session('message') }}
    </div>
    @endif

    @if (session('error'))
    <div class="alert rounded-3  alert-danger">
        {{ session('error') }}
    </div>
    @endif


    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                @if ($announcements)
                <h1 class="text-center">{{__('ui.revisorAnnouncement')}}</h1>
                @else
                <h1 class="text-center">{{__('ui.noRevisorAnnouncement')}}</h1>
                @endif
            </div>
        </div>
    </div>
    @if($announcements)
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="riga_body" scope="col">#</th>
                            <th class="riga_body" scope="col">{{__('ui.title')}}</th>
                            <th class="riga_body" scope="col">{{__('ui.price')}}</th>
                            <th class="riga_body" scope="col">{{__('ui.creation')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($announcements as $announcement)
                        <tr class="border-bottom">
                            <th scope="row">{{$announcement['id']}}</th>
                            <td>{{$announcement['title']}}</td>
                            <td>{{$announcement['price']}}$</td>
                            <td>{{\Carbon\Carbon::parse($announcement['created_at'])->format('d/m/Y') }}</td>
                            <td class="riga_body">
                                <a href="{{route('show.announcements', ['announcement' => $announcement['id']])}}" class="btn bottone_annuncio3 d-block mx-auto"><i class="bi bi-eye"></i></a>
                            </td>
                            <td class="riga_body">
                                <form action="{{route('revisor.accept_Announcement', ['announcement' => $announcement['id']])}}" method="POST">
                                    @csrf
                                    @method("PATCH")
                                    <button class="btn btn-success d-block mx-auto" type="submit" ><i class="bi bi-check2"></i></button>
                                </form>
                            </td>
                            <td class="riga_body">
                                <form action="{{route('revisor.refuses_Announcement', ['announcement' => $announcement['id']])}}" method="POST">
                                    @csrf
                                    @method("PATCH")
                                    <button class="btn btn-danger d-block mx-auto" type="submit" ><i class="bi bi-x-lg"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-12">
                @if ($announcements_checked)
                <h1 class="text-center">{{__('ui.revisor1')}}</h1>
                @else
                <h1 class="text-center">{{__('ui.revisor2')}}</h1>
                @endif
            </div>
        </div>
    </div>
    @if($announcements_checked)
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="riga_body" scope="col">#</th>
                            <th class="riga_body" scope="col">{{__('ui.title')}}</th>
                            <th class="riga_body" scope="col">{{__('ui.price')}}</th>
                            <th class="riga_body" scope="col">{{__('ui.creation')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($announcements_checked as $announcement)
                        <tr class="border-bottom">
                            <th scope="row">{{$announcement['id']}}</th>
                            <td>{{$announcement['title']}}</td>
                            <td>{{$announcement['price']}}$</td>
                            <td>{{\Carbon\Carbon::parse($announcement['created_at'])->format('d/m/Y') }}</td>
                            <td class="riga_body">
                                <a href="{{route('show.announcements', ['announcement' => $announcement['id']])}}" class="btn bottone_annuncio3 d-block mx-auto"><i class="bi bi-eye"></i></a>
                            </td>
                            <td class="riga_body">
                                <form action="{{route('revisor.undo_Announcement', ['announcement' => $announcement['id']])}}" method="POST">
                                    @csrf
                                    @method("PATCH")
                                    <button class="btn btn-warning" type="submit" >{{__('ui.cancelReview')}}</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-12">
                @if ($announcements_refused)
                <h1 class="text-center">Ecco gli annunci rifiutati</h1>
                @else
                <h1 class="text-center">Non ci sono annunci rifiutati</h1>
                @endif
            </div>
        </div>
    </div>
    @if($announcements_refused)
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="riga_body" scope="col">#</th>
                            <th class="riga_body" scope="col">Titolo</th>
                            <th class="riga_body" scope="col">Prezzo</th>
                            <th class="riga_body" scope="col">Data creazione</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($announcements_refused as $announcement)
                        <tr class="border-bottom">
                            <th scope="row">{{$announcement['id']}}</th>
                            <td>{{$announcement['title']}}</td>
                            <td>{{$announcement['price']}}$</td>
                            <td>{{\Carbon\Carbon::parse($announcement['created_at'])->format('d/m/Y') }}</td>
                            <td class="riga_body">
                                <a href="{{route('show.announcements', ['announcement' => $announcement['id']])}}" class="btn bottone_annuncio3 d-block mx-auto"><i class="bi bi-eye"></i></a>
                            </td>
                            <td class="riga_body">
                                <form action="{{route('revisor.undo_Announcement', ['announcement' => $announcement['id']])}}" method="POST">
                                    @csrf
                                    @method("PATCH")
                                    <button class="btn btn-success" type="submit" >Rimanda in revisione</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endif


</x-layout>