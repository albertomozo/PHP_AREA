<?php
$servidor="localhost";
$bduser="root";
$bdclave="";
$bdnombre="peliculas";
$con=mysqli_connect($servidor,$bduser,$bdclave,$bdnombre) ; // id de conexión (link)
if ($con) 
{ //echo 'Conexión Ok';
}
else {
    //echo 'Conexión Error';
}
/* valores tmdb themovie.org */
$apikey='98fee347b91da83932ea8b9daa0edece';
$access_token = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI5OGZlZTM0N2I5MWRhODM5MzJlYThiOWRhYTBlZGVjZSIsInN1YiI6IjYwODJmZTgyMDFiMWNhMDA0MWVjMmUyMyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.FdoxXdJncEQQ24BduFOAz-P3gt6I7pPd6s7vWc8-NrM';
$tmdb_ruta_poster = 'https://image.tmdb.org/t/p/w154/'; // carpetada donde estan las imagenes de poster 

?>