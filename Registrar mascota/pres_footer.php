<style>
footer {
  background-color: rgb(7,6,36);
  color: #a7a7a7;
  font-size: 18px;
  margin-top:50%;
  width:100%;
  height:200px;
}

footer * {
  font-family: "Poppins", sans-serif;
  box-sizing: border-box;
  border: none;
  outline: none;
}
.row {
  padding: 1em 1em;
}
.row.primary {
  display: grid;
  align-items: end;
}

h3 {
  width: 100%;
  text-align: left;
  color: white;
  font-size: 1.4em;
  white-space: nowrap;
}

p{
    text-align: right;
}

</style>

<?php

echo '<footer clas="footer" ><div class="row primary"><div class="column about"><h3>Registrar mascota</h3><p>Registre su mascota </p></div></div> </footer>';


?>