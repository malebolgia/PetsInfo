[<a href="/user/pet/petimage/create"> {{ trans('cms.create')  }}</a>]
<table id="main-list" class="table table-striped table-bordered">
    <thead>
        <td>Id</td>
        <th>{!! trans('pet::petimage.label.pet_id')!!}</th>
            <th>{!! trans('pet::petimage.label.title')!!}</th>
            <th>{!! trans('pet::petimage.label.image_path')!!}</th>
            <th>{!! trans('pet::petimage.label.mainpic')!!}</th>

        <td>Action</td>
    </thead>
    <tbody>
        @foreach($petimages as $petimage)
        <tr>
            <td><a href="/user/pet/petimage/{{ $petimage->eid }}"> {{ $petimage->id }} </a></td>
            <td>{{ $petimage->pet_id }}</td>
            <td>{{ $petimage->title }}</td>
            <td>{{ $petimage->image_path }}</td>
            <td>{{ $petimage->mainpic }}</td>

            <td>
                <a href="/user/pet/petimage/{{ $petimage->eid }}/edit"> Edit </a>
                <a href="/user/pet/petimage/{{ $petimage->eid }}" class="link-delete"> Delete </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<script type="text/javascript">
$(document).ready(function(){
    $('.link-delete').click(function(e){
        var url = $(this).attr('href');
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this data!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        }, function(){
            $.ajax({
                url: url,
                type: 'DELETE',
                processData: false,
                contentType: false,
                success:function(data, textStatus, jqXHR)
                {
                    data = jQuery.parseJSON(data);
                    window.location = data.redirect;
                },
            });
        });
        e.preventDefault();
    });
});
</script>