<x-layout>
    
    <x-message/>
    
    <x-error/>
    
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
                            <th class="riga_body" scope="col">Elementi foto</th>
                            <th class="riga_body" scope="col">Controllo immagini</th>
                            <th class="riga_body" scope="col"></th>
                            <th class="riga_body" scope="col"></th>
                            <th class="riga_body" scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($announcements as $announcement)
                        <tr class="border-bottom">
                            <th scope="row">{{$announcement->id}}</th>
                            <td>{{$announcement->title}}</td>
                            <td>{{$announcement->price}}$</td>
                            <td>{{\Carbon\Carbon::parse($announcement->created_at)->format('d/m/Y') }}</td>
                            <td>
                                @foreach ($announcement->images as $image)
                                @if ($image->labels)
                                <div class="dropdown mb-2">
                                    <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        
                                        Elementi foto
                                        
                                    </button>
                                    <ul class="dropdown-menu">
                                        @foreach ($image->labels as $label)
                                        <li class="dropdown-item"><span class="d-inline mb-3">{{$label}}</span></li>
                                        @endforeach
                                    </div>
                                    @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($announcement->images as $image)
                                    <div class="dropdown mb-2">
                                        <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            
                                            Stato foto
                                            
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-item"><div class="me-3 ">Adulti <span accordion class="{{$image->adult}} ms-1"></span></div></li>
                                            <li class="dropdown-item"><div class="me-3">Satira <span class="{{$image->spoof}} ms-1"></span></div></li>
                                            <li class="dropdown-item"><div class="me-3">Medicina <span class="{{$image->medical}} ms-1"></span></div></li>
                                            <li class="dropdown-item"><div class="me-3">Violenza <span class="{{$image->violence}} ms-1"></span></div></li>
                                            <li class="dropdown-item"><div class="">Contenuto Ammiccante <span class="{{$image->racy}} ms-1"></span></div></li>
                                        </ul>
                                    </div>
                                    @endforeach
                                </td>
                                <td class="riga_body">
                                    <a href="{{route('show.announcements', ['announcement' => $announcement['id']])}}" class="btn bottone_annuncio3 d-block mx-auto"><i class="bi bi-eye"></i></a>
                                </td>
                                <td class="riga_body">
                                    <form action="{{route('revisor.accept_Announcement', ['announcement' => $announcement['id']])}}" method="POST">
                                        @csrf
                                        @method("PATCH")
                                        <button class="btn btn-success d-block mx-auto" type="submit"><i class="bi bi-check2"></i></button>
                                    </form>
                                </td>
                                <td class="riga_body">
                                    <form action="{{route('revisor.refuses_Announcement', ['announcement' => $announcement['id']])}}" method="POST">
                                        @csrf
                                        @method("PATCH")
                                        <button class="btn btn-danger d-block mx-auto" type="submit"><i class="bi bi-x-lg"></i></button>
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
                    <h1 class="text-center">{{__('ui.ReviewAnnouncement')}}</h1>
                    @else
                    <h1 class="text-center">{{__('ui.ReviewAnnouncement2')}}</h1>
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
                                <th class="riga_body" scope="col">{{__('ui.title')}}</th>
                                <th class="riga_body" scope="col">{{__('ui.price')}}</th>
                                <th class="riga_body" scope="col">{{__('ui.creation')}}</th>
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
                                        <button class="btn btn-success" type="submit" >{{__('ui.ViewRevisor')}}</button>
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