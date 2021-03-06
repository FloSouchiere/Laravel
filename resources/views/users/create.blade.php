<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Créer un utilisateur</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('users.store') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="form-group">
                                <label for="firstname" class="col-md-4 control-label">Prénom</label>
                                <div class="col-md-6">
                                    <input id="firstname" type="text" class="form-control" name="firstname" required
                                           autofocus>@error('city') <p>Champs incorrect</p> @enderror<br/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lastname" class="col-md-4 control-label">Nom</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" required
                                           autofocus>@error('city') <p>Champs incorrect</p> @enderror<br/>
                                </div>
                            </div>
                            <label for="email" class="col-md-4 control-label">E-Mail</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" required>@error('city')
                                <p>Champs incorrect</p> @enderror<br/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Mot de passe</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password"
                                       required>@error('city') <p>Champs incorrect</p> @enderror<br/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-md-4 control-label">Tél</label>
                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" required>@error('city')
                                <p>Champs incorrect</p> @enderror<br/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address_line_1" class="col-md-4 control-label">Adresse</label>
                            <div class="col-md-6">
                                <input id="address_line_1" type="string" class="form-control" name="address_line_1"
                                       required>@error('city') <p>Champs incorrect</p> @enderror<br/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address_line_2" class="col-md-4 control-label">Complément d'Adresse</label>
                            <div class="col-md-6">
                                <input id="address_line_2" type="string" class="form-control" name="address_line_2"
                                       required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="zipcode" class="col-md-4 control-label">Code Postal</label>
                            <div class="col-md-6">
                                <input id="zipcode" type="text" class="form-control" name="zipcode"
                                       required>@error('city') <p>Champs incorrect</p> @enderror<br/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city" class="col-md-4 control-label">Ville</label>
                            <div class="col-md-6">
                                <input id="city" type="string" class="form-control" name="city" required>@error('city')
                                <p>Champs incorrect</p> @enderror<br/>
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
