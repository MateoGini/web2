{include file="header.tpl"}
{include file="footer.tpl"}
<form action="edit" method= "POST">
   <div class="mb-3">
  <select class="form-select" maria-label="Default select example" name="tipo_coca">
    <option selected>Elegí tu Coca Cola</option>
    <option value="Sabor Original" name="tipo_coca">Sabor Original</option>
    <option value="Light"  name="tipo_coca">Light</option>
    <option value="Zero Azucar"  name="tipo_coca">Zero azúcar</option>
    <option value="Zero Cherry"  name="tipo_coca">Zero Cherry</option>
    <option value="Light Not Cafeina"  name="tipo_coca">Light sin cafeína</option>
    <option value="Energy"  name="tipo_coca">Energy</option>
    <option value="Energy Not Azucar"  name="tipo_coca">Energy sin azúcares</option>
    <option value="Energy Cherry"  name="tipo_coca">Energy Cherry</option>
  </select>
<select class="form-select" maria-label="Default select example" name="envase">
  <option selected>Elegi tu envase</option>
  <option value="1" name="envase">Lata</option>
  <option value="2"  name="envase">1 Litro</option>
  <option value="3"  name="envase">3 litros</option>
<input type="text" class="form-control" id="exampleFormControlInput1" name="stock" placeholder="stock en packs de 6">
  <button type="submit" href="edit/{$cocacola->$id_stock}"  class="btn btn-outline-primary"> Editar</button>
</div>
  </form>