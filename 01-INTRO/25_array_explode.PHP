<?PHP 
$cadena = "ALBERTO.MOZO avellaned.doc";
echo "<p>valor inicial = $cadena </p>";
$cadena = str_replace(' ', '_',$cadena);

$partes =explode('.',$cadena);
print_r ($partes);
$cadena_univoca='';
for ($i=0;$i<count($partes)-1;$i++)
{
    $cadena_univoca .= $partes[$i] .'-';
}
$cadena_univoca .= time() .'.'. $partes[count($partes)-1];
echo "<p>valor final =$cadena_univoca </p>";

