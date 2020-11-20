<div class="col-md-6 mb-3">
    <label for="first_name">Prénom</label>
    <input type="text"
           class="form-control"
           id="first_name"
           value="{{$user->firstname}}"
           disabled>
</div>
<div class="col-md-6 mb-3">
    <label for="name">Nom</label>
    <input type="text"
           class="form-control"
           id="name"
           value="{{$user->name}}"
           disabled>
</div>
<div class="row">
    @foreach($user->memberships as $membership)
        <div class="col-md-3">
            <label for="type">Type de paiement</label>
            <input type="text"
                   class="form-control"
                   id="type"
                   value="{{ $membership->payment_type }}"
                   disabled>
        </div>

        <div class="col-md-3">
            <label for="created_at">Prix</label>
            <input type="text"
                   class="form-control"
                   id="created_at"
                   value="{{ $membership->price }}"
                   disabled>
        </div>
        <div class="col-md-3">
            <label for="created_at">Nom de Licence</label>
            <input type="text"
                   class="form-control"
                   id="created_at"
                   value="{{ $membership->license->name }}"
                   disabled>
        </div>

@endforeach
