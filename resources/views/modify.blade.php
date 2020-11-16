<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Modifier un utilisateur</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('users.update', $user->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email"
                                       value="{{ $user->email }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Mot de passe</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password"
                                       value="{{ $user->password }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="firstname" class="col-md-4 control-label">Prénom</label>
                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control" name="firstname"
                                       value="{{ $user->firstname }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lastname" class="col-md-4 control-label">Nom</label>
                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname"
                                       value="{{ $user->lastname }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-md-4 control-label">Tél</label>
                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control" name="phone"
                                       value="{{ $user->phone }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address_line_1" class="col-md-4 control-label">Adresse</label>
                            <div class="col-md-6">
                                <input id="address_line_1" type="string" class="form-control" name="address_line_1"
                                       value="{{ $user->address_line_1 }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address_line_2" class="col-md-4 control-label">Complément d'Adresse</label>
                            <div class="col-md-6">
                                <input id="address_line_2" type="string" class="form-control" name="address_line_2"
                                       value="{{ $user->address_line_2 }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="zipcode" class="col-md-4 control-label">Code Postal</label>
                            <div class="col-md-6">
                                <input id="zipcode" type="number" class="form-control" name="zipcode"
                                       value="{{ $user->zipcode }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city" class="col-md-4 control-label">Ville</label>
                            <div class="col-md-6">
                                <input id="city" type="string" class="form-control" name="city"
                                       value="{{ $user->city }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Enregistrer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
