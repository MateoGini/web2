<?php
/* Smarty version 4.2.1, created on 2022-10-05 00:16:47
  from 'C:\xampp\htdocs\web2\practico3\templates\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633cb0cfc33869_28767520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da948de00f121bbaba4b266c36bdd736d1a85b02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\practico3\\templates\\form.tpl',
      1 => 1664921687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633cb0cfc33869_28767520 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="add" method= "POST">
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
  <button type="submit" class="btn btn-outline-primary"> Enviar </button>
</div>
  </form><?php }
}
