<?
global $DBType;

CModule::AddAutoloadClasses(
	"orgm.favorites",
	array(
		'ORGMFavorites'  => 'classes/general/favorites.php',
		'ORGMFav'	=> 'classes/'.$DBType.'/favorites.php',
		)
	);

?>
