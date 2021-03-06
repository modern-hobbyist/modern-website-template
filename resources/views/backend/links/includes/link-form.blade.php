@push('before-styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

@endpush

{!! Form::model($link, ['route' => [$route, $link], 'method' => $method, 'files' => true]) !!}
    {!! Form::token(); !!}

    <div class="row mb-2">
        <div class="col col-4 m-auto text-center " >
            <div class="form-group">
                {!! Form::label('image',"Link Image"); !!}
                {!! Form::file('image', ['hidden' => 'hidden', 'id' => 'imageInput']); !!}
                <div class="square img-thumbnail" role="button" data-trigger="#imageInput">
                    <div class="thumbnail-overlay img-thumbnail">
                        <div class="row h-100 m-auto">
                            <div class="col m-auto">
                                <i class="thumbnail-icon fas fa-edit fa-2x m-auto text-light"></i>
                            </div>
                        </div>
                    </div>
                    <div class="thumbnail img-thumbnail" style="background: url('{{isset($image) ? $image->getUrl() : asset(getPlaceholder())}}') center center; background-size: cover">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col col-12 col-sm-2">
            @include('backend.includes.switch-label', ['model'=> $link, 'default' => $link->is_active, 'input_name' => 'is_active', 'label_name' => 'Active'])
        </div>
        <div class="col col-12 col-sm-10">
            <div class="form-group">
                {!! Form::label('title', 'Title'); !!}
                {!! Form::text('title',null, ['class' => 'form-control', 'placeholder' => 'Link Title']); !!}
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col col-12 col-sm-6">
            <div class="form-group">
                {!! Form::label('url', 'External URL'); !!}
                {!! Form::url('url',null, ['class' => 'form-control', 'placeholder' => 'External URL']); !!}
            </div>
        </div>
        <div class="col col-12 col-sm-3">
            <div class="form-group">
                {!! Form::label('start_date', 'Start Date'); !!}
                {!! Form::dateTime('start_date',null, ['class' => 'form-control', 'placeholder' => 'Start Date']); !!}
            </div>
        </div>
        <div class="col col-12 col-sm-3">
            <div class="form-group">
            {!! Form::label('end_date', 'End Date'); !!}
            {!! Form::dateTime('end_date',null, ['class' => 'form-control', 'placeholder' => 'End Date']); !!}
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col">
            <div class="form-group">
                {!! Form::label('description', 'Description'); !!}
                {!! Form::textarea('description',null, ['class' => 'form-control', 'placeholder' => 'Description', 'rows' => 10]); !!}
            </div>
        </div>
    </div>

    <div class="row mb-3 mt-3">
        <div class="col col-6 m-auto text-center">
            {!! Form::submit($actionText, ['class' => 'btn btn-success']); !!}
        </div>
    </div>
{!! Form::close() !!}

@push('after-scripts')
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="{{mix('js/backend/includes/forms.js')}}"></script>
@endpush
