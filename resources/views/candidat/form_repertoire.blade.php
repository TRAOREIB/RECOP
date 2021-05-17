
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />   
	<title>Recepisse</title>
<script src="{{asset('js/dataTables.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/dataTables.min.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="" style="margin-left: 13px">
    <div>
        <label style="font-family: fantasy">DIRECTION GENERALE DES MEDIAS</label>
    </div>
    <div>
        <label style="font-family: fantasy">CONCOURS PRIX GALIAN <?php echo date("Y"); ?></label>
    </div>
    
   </div>        
    
    <br><br>    
 
    @isset($listoeuvre)
    @foreach($listoeuvre as $cat)
    <div class=" offset-1"><u><h3>Repertoire des Oeuvres de la Categorie &nbsp; <b> {{$cat->categorie}}</b> &nbsp; - &nbsp;<b>Genre: {{$cat->genre}}</b></h3></u>
    </div>
    @break
    @endforeach
    @endisset
    <br>
        <div class="row divtabgrand" style="">
            <div class="col-sm-12" >
                <div class="col-sm-12 ligneform " style="background-color:white">
                    <table class="table table-striped table-condensed" id="tableau">
                        <thead>
                            <?php $i=1; ?>
                            <tr style="background-color:#2a6496;color: #FFFFFF;">
                                <th>NUMERO</th>
                              
                                <th>NOM</th>	
                                <th>PRENOM</th>
                                <th>CONTACT</th>
                                <th>ORGANE</th>
                                @isset($listoeuvre)
                                @foreach($listoeuvre as $list)
                                @if($list->categorie=='presse ecrite')
                                <th>TITRE (1)</th>
                                <th>THEME (1)</th>                           
                                <th>TITRE (2)</th>
                                <th>THEME (2)</th>  
                                @break
                                @endif
                                @endforeach
                                @endisset
                                
                                @isset($listoeuvre)
                                @foreach($listoeuvre as $list)                              
                                @if($list->categorie=='presse en ligne')
                                <th>TITRE(1)</th>
                                <th>url(1)</th>                           
                                <th>TITRE(2)</th>
                                <th>url(2)</th>
                                @break
                                @endif
                                @endforeach
                                @endisset 
                            </tr>
                        </thead>
                        <tbody>
                            @isset($listoeuvre)
                            @foreach($listoeuvre as $list)
                            <tr>
                                <td>{{$i}}</td>
                                	
                                <td>{{$list->nomcandidat}}</td>	
                                <td>{{$list->prenomcandidat}}</td>
                                <td>{{$list->contact}}</td>
                                <td>{{$list->organe}}</td>
                                <?php $i++;?>
                                @if($list->categorie=='presse ecrite')
                                <td>{{$list->titrearticle1}}</td>	
                                <td>{{$list->themearticle1}}</td>
                                <td>{{$list->titrearticle2}}</td>
                                <td>{{$list->themearticle2}}</td> 
                                @endif
                                @if($list->categorie=='presse en ligne')
                                <td>{{$list->titrearticle1}}</td>	
                                <td>{{$list->url1}}</td>
                                <td>{{$list->titrearticle2}}</td>
                                <td>{{$list->url2}}</td> 
                                <?php $i++;?>
                                @endif

                            </tr>
                            @endforeach
                            @endisset
                        </tbody>
                    </table>

                </div>
            </div>
        </div>


        
        
       
    
  
  
</body>
</html>