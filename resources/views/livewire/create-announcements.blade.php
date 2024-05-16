<div>
    <div class="container-fluid my-5">
        <div class="row justify-content-center">
            <h3 class="text-center mb-5 my_title">{{__('ui.createAnnouncement2')}}</h3>
            <div class="col-12 col-md-8 col-lg-6">

                @if (session('message'))
                <div class="alert rounded-3  alert-success">
                    {{ session('message') }}
                </div>
                @endif

                <form class="p-5 shadow"
                wire:submit="store"
                enctype="multipart/form-data"
                >
                <div class="mb-3">
                    <label for="title" class="form-label">{{__('ui.title')}}</label>
                    <input wire:model.blur="title" type="text" class="form_bordi shadow form-control" id="title">
                    <div class="text-danger">@error('title') {{ $message }} @enderror</div>
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">{{__('ui.description')}}</label>
                    <textarea wire:model.blur="body" class="form-control shadow form_bordi" id="body" cols="30" rows="8"></textarea>
                    <div class="text-danger">@error('body') {{ $message }} @enderror</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">{{__('ui.category2')}}</label>
                    <select class="form-select shadow form_bordi" wire:model="category" aria-label="Default select example">
                        <option>{{__('ui.categorySelect')}}</option>
                        @foreach ($categories as $category)
                        <option  value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <div class="text-danger">@error('category') {{ $message }} @enderror</div>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">{{__('ui.price')}}</label>
                    <input wire:model.blur="price" type="number" class="form-control shadow form_bordi" id="price">
                    <div class="text-danger">@error('price') {{ $message }} @enderror</div>{{-- nuovo metodo di gestione degli errori per il client --}}
                </div>
                <div class="mb-3">
                    <label for="img" class="form-label"> {{__('ui.image')}}</label>
                    <input wire:model="temporary_images" name="images" multiple type="file" class="form-control shadow form_bordi" id="img">
                    @error('temporary_images.*') <span class="error">{{ $message }}</span> @enderror
                </div>
                @if (!empty($images))
                <div class="row">
                    <div class="col-12">
                        <p>photo preview</p>
                        <div class="row">
                            @foreach ($images as $key => $image)
                                <div class="col">
                                    <div class="img-preview" style="background-image: url({{$image->temporaryUrl()}});"></div>
                                    <button type="button" class="btn btn-danger" wire:click="removeImage({{$key}})">Cancella</button>
                                </div>

                            @endforeach
                        </div>
                    </div>
                </div>

                @endif
                <button type="submit" class="btn bottone_annuncio mt-3">{{__('ui.createAnnouncement3')}}</button>
            </form>
        </div>
    </div>
</div>
</div>
