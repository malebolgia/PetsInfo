{!!Former::horizontal_open()
->id('edit-pet-pet')
->method('PUT')
->files('true')
->action(URL::to('user/pet/pet') .'/'.$pet['eid'])!!}
@include('pet::user.pet.partial.entry')
{!! Former::close() !!}