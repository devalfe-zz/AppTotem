<div>
<section class='galeria'>
<input type="radio" id="uno" value="1" name="tractor" checked='checked' />    
<input type="radio" id="dole" value="2" name="tractor" />      
<input type="radio" id="tele" value="3" name="tractor" />
    <article class='card'>
        <h2 class='entypo-tag'>{{ $atractivo->titulo }}</h2>
        <p>{{ $atractivo->detalle }}</p>
    <ul class='footer'>
      <li class='entypo-bell'></li>
      <li class='entypo-mic'></li>
      <li class='entypo-megaphone'></li>
    </ul>
    <label for='dole' class='entypo-left-bold otra'></label>
    <label for='tele' class='entypo-right-bold otra'></label>
    <label for='uno' class='entypo-arrows-ccw afin'></label>  
  </article>
  </section>
</div>