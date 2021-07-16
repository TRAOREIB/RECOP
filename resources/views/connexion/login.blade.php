@extends('tprecop.template')
@section('contenu')
        <br><br>
        <div class="login_wrapper">
            <div class="animate form login_form">
               
                <div class="offset-3">
                      <label style="color: black; font-style: italic"><h1>Information de Connexion</h1></label>
                </div>
                <div class="col-sm-8 col-xs-8 offset-4">
                   
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('login') }}" enctype="application/x-www-form-urlencoded">
                        {{ csrf_field() }}

                        <div>
                        <div class="col-sm-5 col-xs-12">
                            <input type="text" class="form-control" style="border-radius: 10px" name="login" id="login" placeholder="Identifiant" required="" />
                        </div><br>

                        <div class="col-sm-5 col-xs-12">
                            <input type="password" class="form-control" style="border-radius: 10px" name="password" id="password" placeholder="Mot de Passe" required="" />
                        </div><br>

                        <div class="offset-1" >
                            <input class=" col-sm-2 btn btn-primary" type="submit"  value="connexion">                 
                        </div>
                
                        </div>

                    </form>

                </div> 
            </div>
        </div>
 <br><br>
@endsection   