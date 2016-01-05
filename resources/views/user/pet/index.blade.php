[<a href="/user/pet/pet/create"> {{ trans('cms.create')  }}</a>]
<table id="main-list" class="table table-striped table-bordered">
    <thead>
        <td>Id</td>
        <th>{!! trans('pet::pet.label.name_of_pet')!!}</th>
            <th>{!! trans('pet::pet.label.user_id')!!}</th>
            <th>{!! trans('pet::pet.label.perfecture_id')!!}</th>
            <th>{!! trans('pet::pet.label.reward_id')!!}</th>
            <th>{!! trans('pet::pet.label.lost_date')!!}</th>
            <th>{!! trans('pet::pet.label.color_of_pet')!!}</th>
            <th>{!! trans('pet::pet.label.age_of_pet')!!}</th>
            <th>{!! trans('pet::pet.label.character')!!}</th>
            <th>{!! trans('pet::pet.label.characteristics')!!}</th>
            <th>{!! trans('pet::pet.label.status')!!}</th>
            <th>{!! trans('pet::pet.label.map_lat')!!}</th>
            <th>{!! trans('pet::pet.label.map_lang')!!}</th>
            <th>{!! trans('pet::pet.label.other_amount')!!}</th>

        <td>Action</td>
    </thead>
    <tbody>
        @foreach($pets as $pet)
        <tr>
            <td><a href="/user/pet/pet/{{ $pet->eid }}"> {{ $pet->id }} </a></td>
            <td>{{ $pet->name_of_pet }}</td>
            <td>{{ $pet->user_id }}</td>
            <td>{{ $pet->perfecture_id }}</td>
            <td>{{ $pet->reward_id }}</td>
            <td>{{ $pet->lost_date }}</td>
            <td>{{ $pet->color_of_pet }}</td>
            <td>{{ $pet->age_of_pet }}</td>
            <td>{{ $pet->character }}</td>
            <td>{{ $pet->characteristics }}</td>
            <td>{{ $pet->status }}</td>
            <td>{{ $pet->map_lat }}</td>
            <td>{{ $pet->map_lang }}</td>
            <td>{{ $pet->other_amount }}</td>

            <td>
                <a href="/user/pet/pet/{{ $pet->eid }}/edit"> Edit </a>
                <a href="/user/pet/pet/{{ $pet->eid }}" class="link-delete"> Delete </a>
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