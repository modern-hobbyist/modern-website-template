@push('before-styles')
@endpush

<table id="mediaTable" class="display table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
        <th>Order</th>
        <th>ID</th>
        <th>Image</th>
        <th>Filename</th>
        <th>Color</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($model->getMedia($collection) as $media)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$media->id}}</td>
            <td>
                <img src="{{$media->getUrl($media->mime_type == 'application/pdf' ? "thumb" : "")}}"
                     style="width: 50px;"
                     alt="Image"
                     class="media-image"
                     data-placement="right"
                     data-html="true"
                     data-toggle="tooltip"
                     title="<img src='{{$media->getUrl($media->mime_type == 'application/pdf' ? "thumb" : "")}}' width='100%' />">
            </td>
            <td>{{$media->name}}</td>
            <td>{{$media->getCustomProperty('color')}}</td>
            <td>
                @include('backend.includes.media.media-actions', ['current' => $media])
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@push('after-scripts')
@endpush
