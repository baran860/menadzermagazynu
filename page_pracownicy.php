<?php
include_once('funkcje.php');


function CreatePagePracownicy()
{
	echo '
<table class="table table-hover table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Imię</th>
      <th scope="col">Nazwisko</th>
      <th scope="col">Kod kreskowy</th>
	  <th scope="col">Status</th>
	  <th scope="col">Zawód</th>
	  <th scope="col">Firma</th>
	  <th scope="col">Akcja</th>
    </tr>
  </thead>
  <tbody>
    <tr >
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
	  <td>
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pokaż</button>
	      
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<img  src="generuj_kod_kreskowy.php?number=1349875921349">	
			</div>
	  
	  </td>
	  <td><div class="dot_ok">&#8226;</div></td>
	  <td>Elektryk</td>
	  <td>EN-BUD</td>
	  <td>
		<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
	      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<a class="dropdown-item" href="#">Co ma na stanie</a>
			<a class="dropdown-item" href="#">Wypożycz sprzęt</a>
			<a class="dropdown-item" href="#">Usuń</a>
		  </div> 
	  </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Mark</td>
      <td>Otto</td>
	  <td>
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pokaż</button>
	      
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<img  src="generuj_kod_kreskowy.php?number=1349875921349">	
			</div>
	  
	  </td>
	  <td><div class="dot_block">&#8226;</div></td>
	  <td>Zbrojarz</td>
	  <td>EN-BUD</td>
	  	  <td>
		<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
	      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<a class="dropdown-item" href="#">Action</a>
			<a class="dropdown-item" href="#">Another action</a>
			<a class="dropdown-item" href="#">Something else here</a>
		  </div> 
	  </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Mark</td>
      <td>Otto</td>
	  <td>
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pokaż</button>
	      
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<img  src="generuj_kod_kreskowy.php?number=1349875921349">	
			</div>
	  
	  </td>
	  <td><div class="dot_ok" style="">&#8226;</div></td>
	  <td>Cieśla</td>
	  <td>Tadex-Pol</td>
	  	  <td>
		<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
	      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<a class="dropdown-item" href="#">Action</a>
			<a class="dropdown-item" href="#">Another action</a>
			<a class="dropdown-item" href="#">Something else here</a>
		  </div> 
	  </td>
    </tr>
  </tbody>
</table>

	
	';
}


function CreatePageNarzedzia()
{
echo '
	<h1>Spis narzędzi</h1>
	
<table class="table table-hover table-striped table-dark">
  <thead>
	<tr>
	  <th >Wyszukiwarka</th>
	</tr>
  </thead>
  <tbody>
	<tr >
	  <td>
		<form class="form-inline">
			<input class="form-control mr-sm-2" type="search" placeholder="Wyszukaj narzędzia" aria-label="Wyszukaj narzędzia">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Szukaj</button>
		</form>
	</td>
	  <td></td>
	  <td></td>
	</tr>
  </tbody>
</table>';
echo '
<table class="table table-hover table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nazwa</th>
      <th scope="col">Typ</th>
      <th scope="col">Kod kreskowy</th>
	  <th scope="col">Status</th>
	  <th scope="col">Data dodania</th>
	  <th scope="col">Opis</th>
	  <th scope="col">Wypożyczono</th>
	  <th scope="col">Akcja</th>
    </tr>
  </thead>
  <tbody>
    <tr >
      <th scope="row">1</th>
      <td>Wiertarka Hilti E60</td>
      <td>Elektronarzędzia</td>
	  <td>
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pokaż</button>
	      
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<img  src="generuj_kod_kreskowy.php?number=1349875921349">	
			</div>
	  
	  </td>
	  <td><div class="dot_ok">&#8226;</div></td>
	  <td>28 luty 2018r</td>
	  <td>Brak</td>
	  <td><div class="dot_block" style="margin-left: 45px;">&#8226;</div></td>
	  <td>
		<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
	      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<a class="dropdown-item" href="#">Kto wypożyczył</a>
			<a class="dropdown-item" href="#">Pokaż wszystkie informacje</a>
			<a class="dropdown-item" href="#">Usuń</a>
		  </div> 
	  </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Tarcza diamentowa [250\']</td>
      <td>Osprzęt</td>
	  <td>
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pokaż</button>
	      
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<img  src="generuj_kod_kreskowy.php?number=1349875921349">	
			</div>
	  
	  </td>
	  <td><div class="dot_block">&#8226;</div></td>
	  <td>28 luty 2018r</td>
	  <td>Brak</td>
	  <td><div class="dot_block" style="margin-left: 45px;">&#8226;</div></td>
	  	  <td>
		<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
	      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<a class="dropdown-item" href="#">Action</a>
			<a class="dropdown-item" href="#">Another action</a>
			<a class="dropdown-item" href="#">Something else here</a>
		  </div> 
	  </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Szlifierka kątowa Makita</td>
      <td>Elektronarzędzia</td>
	  <td>
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pokaż</button>
	      
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<img  src="generuj_kod_kreskowy.php?number=1349875921349">	
			</div>
	  
	  </td>
	  <td><div class="dot_ok" style="">&#8226;</div></td>
	  <td>28 luty 2018r</td>
	  <td>Brak</td>
	  <td><div class="dot_block" style="margin-left: 45px;">&#8226;</div></td>
	  	  <td>
		<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
	      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<a class="dropdown-item" href="#">Action</a>
			<a class="dropdown-item" href="#">Another action</a>
			<a class="dropdown-item" href="#">Something else here</a>
		  </div> 
	  </td>
    </tr>
  </tbody>
</table>

	
	';
}


function CreatePageWypozyczyl()
{
echo '<h1>Baran860 wypożyczył następujące narzędzia</h1>';


echo '
<table class="table table-hover table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nazwa</th>
      <th scope="col">Typ</th>
      <th scope="col">Kod kreskowy</th>
	  <th scope="col">Status</th>
	  <th scope="col">Data dodania</th>
	  <th scope="col">Opis</th>
	  <th scope="col">Wypożyczono</th>
	  <th scope="col">Akcja</th>
    </tr>
  </thead>
  <tbody>
    <tr >
      <th scope="row">1</th>
      <td>Wiertarka Hilti E60</td>
      <td>Elektronarzędzia</td>
	  <td>
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pokaż</button>
	      
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<img  src="generuj_kod_kreskowy.php?number=1349875921349">	
			</div>
	  
	  </td>
	  <td><div class="dot_ok">&#8226;</div></td>
	  <td>28 luty 2018r</td>
	  <td>Brak</td>
	  <td><div class="dot_block" style="margin-left: 45px;">&#8226;</div></td>
	  <td>
		<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
	      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<a class="dropdown-item" href="#">Oddaj narzędzie</a>
		  </div> 
	  </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Tarcza diamentowa [250\']</td>
      <td>Osprzęt</td>
	  <td>
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pokaż</button>
	      
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<img  src="generuj_kod_kreskowy.php?number=1349875921349">	
			</div>
	  
	  </td>
	  <td><div class="dot_block">&#8226;</div></td>
	  <td>28 luty 2018r</td>
	  <td>Brak</td>
	  <td><div class="dot_block" style="margin-left: 45px;">&#8226;</div></td>
	  	  <td>
		<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
	      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<a class="dropdown-item" href="#">Action</a>
			<a class="dropdown-item" href="#">Another action</a>
			<a class="dropdown-item" href="#">Something else here</a>
		  </div> 
	  </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Szlifierka kątowa Makita</td>
      <td>Elektronarzędzia</td>
	  <td>
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pokaż</button>
	      
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<img  src="generuj_kod_kreskowy.php?number=1349875921349">	
			</div>
	  
	  </td>
	  <td><div class="dot_ok" style="">&#8226;</div></td>
	  <td>28 luty 2018r</td>
	  <td>Brak</td>
	  <td><div class="dot_block" style="margin-left: 45px;">&#8226;</div></td>
	  	  <td>
		<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
	      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<a class="dropdown-item" href="#">Action</a>
			<a class="dropdown-item" href="#">Another action</a>
			<a class="dropdown-item" href="#">Something else here</a>
		  </div> 
	  </td>
    </tr>
  </tbody>
</table>

	
	';
}




?>
