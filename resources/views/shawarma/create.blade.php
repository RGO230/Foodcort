@extends('layouts.app')
@section('content')

<script src="https://cdn.tiny.cloud/1/b7wcs9ngmi9gl6v19rjlj6oqdxcyp327pmshcv13won23un5/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">{{ __('Создание нового ресторана') }}</div>

            <div class="card-body">
                <form enctype="multipart/form-data" method="POST" action="{{ route('shawarma.store') }}">
                    @csrf

                    <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end">{{ __('Название') }}</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="title" required autofocus>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end">{{ __('Описание') }}</label>

                        <div class="col-md-6">
                            <textarea class="form-control" name="descr"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label  class="col-md-4 col-form-label text-md-end">{{ __('Ассортимент') }}</label>

                        <div class="col-md-6">
                        <select class="form-control" id="ast" name="assortment">
                                @foreach($assortment as $item)
                                <option value="{{$item}}">{{$item}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end">{{ __('Адрес') }}</label>

                        <div class="col-md-6">
                            <input type="text" class ="form-control" name="address"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end">{{ __('Доставка') }}</label>

                        <div class="col-md-6">
                            <input type="checkbox"  name="delivery">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end">{{ __('Место для трапезы') }}</label>

                        <div class="col-md-6">
                            <input type="checkbox"  name="foodcort" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end">{{ __('Цена от') }}</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="price_from" required autofocus>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end">{{ __('Цена до') }}</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="price_to" required autofocus>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label  class="col-md-4 col-form-label text-md-end">{{ __('Качество сервиса') }}</label>

                        <div class="col-md-6">
                        <select class="form-control" id="sq" name="service_quality">
                                @foreach($service_quality as $item)
                                <option value="{{$item}}">{{$item}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label  class="col-md-4 col-form-label text-md-end">{{ __('Район') }}</label>

                        <div class="col-md-6">
                        <select class="form-control" id="dist" name="district_id">
                                @foreach($district as $item)
                                <option value="{{$item->id}}">{{$item->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end">{{ __('Фотография') }}</label>

                        <div class="col-md-6">
                            <input type="file" class="form-control" id="img" name="file">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end">{{ __('Долгота') }}</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="longitude" required autofocus>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end">{{ __('Широта') }}</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="latitude" required autofocus>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Вперёд') }}
                            </button>
                        </div>
                    </div>


            </div>


            </form>
        </div>
    </div>
</div>
</div>
<div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
<script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [{
                value: 'First.Name',
                title: 'First Name'
            },
            {
                value: 'Email',
                title: 'Email'
            },
        ]
    });
</script>

@endsection