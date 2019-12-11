   <div class="grid920 center categorias">
        
        {{foreach categorias}}
        <span><a href="index.php?page=productos&catid={{categoriaID}}">{{categoria}}</a> | </span>
        {{endfor categorias}}
   </div>
 </div>
   <div class="grid920">
    {{foreach productos}}
    <div class="prd">
        <h3>{{producto}}</h3>
        <img class= "circle" src="public/imgs/{{produri}}" href="index.php?page=index.php?page=home" style=" vertical-align: middle; height:210px; width:230px; padding:0;"/><br>
    </div>
    {{endfor productos}}
   <div class="grid920 pager">
        |{{foreach paginas}}
            <a class="{{selected}}" href="index.php?page=productosSinLogin&pageNum={{pagina}}&catid={{catid}}">{{pagina}}</a> |
        {{endfor paginas}}
   </div>
