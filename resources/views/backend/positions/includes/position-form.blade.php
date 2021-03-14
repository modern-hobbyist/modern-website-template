@push('before-styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endpush

{!! Form::model($position, ['route' => [$route, $position], 'method' => $method, 'files' => true]) !!}
    {!! Form::token(); !!}

    <div class="row mb-2">
        <div class="col col-12 col-sm-2">
            @include('backend.includes.switch-label', ['model'=> $position, 'default' => $position->is_active, 'input_name' => 'is_active', 'label_name' => 'Active'])
        </div>
        <div class="col col-sm-10">
            <div class="form-group">
                {!! Form::label('media-label',"Upload Media"); !!}
                <div class="custom-file">
                    {!! Form::label('media-label',"Upload Media", ['class' => 'custom-file-label']); !!}
                    {!! Form::file('media[]', ['class' => 'custom-file-input', 'multiple' => true]); !!}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col col-12 col-sm-6">
            <div class="form-group">
                {!! Form::label('title', 'Title'); !!}
                {!! Form::text('title',null, ['class' => 'form-control', 'placeholder' => 'Position Title']); !!}
            </div>
        </div>
        <div class="col col-12 col-sm-6">
            <div class="form-group">
                {!! Form::label('company', 'Company'); !!}
                {!! Form::text('company',null, ['class' => 'form-control', 'placeholder' => 'Company']); !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col col-12 col-sm-6">
            <div class="form-group">
                {!! Form::label('external_url', 'External URL'); !!}
                {!! Form::url('external_url',null, ['class' => 'form-control', 'placeholder' => 'External URL']); !!}
            </div>
        </div>
        <div class="col col-12 col-sm-3">
            <div class="form-group">
                {!! Form::label('start_date', 'Start Date'); !!}
                {!! Form::date('start_date',null, ['class' => 'form-control', 'placeholder' => 'Start Date']); !!}
            </div>
        </div>
        <div class="col col-12 col-sm-3">
            <div class="form-group">
                {!! Form::label('end_date', 'End Date'); !!}
                {!! Form::date('end_date',null, ['class' => 'form-control', 'placeholder' => 'End Date']); !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="form-group">
                {!! Form::label('short_description', 'Short Description'); !!}
                {!! Form::text('short_description', null, ['class' => 'form-control', 'placeholder' => 'Short Description']); !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="form-group">
                {!! Form::label('description', 'Description'); !!}
                {!! Form::textarea('description',null, ['class' => 'form-control', 'placeholder' => 'Description', 'rows' => 5]); !!}
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col">
            <div class="form-group">
                {!! Form::label('page_content', 'Page Content'); !!}
                {!! Form::textarea('page_content',null, ['class' => 'form-control', 'id' => 'page_content', 'placeholder' => 'Page Content', 'rows' => 10]); !!}
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
    <script src="{{mix('js/backend/includes/forms.js')}}"></script>
@endpush
