<?php
function Verification_Caractere($Str_Entree) {
	$String_Entree = str_split($Str_Entree);
	$ListeChar = "";
	$i = 0;
	foreach ($String_Entree as $key) {
		if (retourCaractèresInterdit($String_Entree[$i]) == 0) {
			$ListeChar = $ListeChar . $String_Entree[$i];
		}
		$i++;
	}
	if ($ListeChar == null) {
		$ListeChar = "Neant";
	}
	return $ListeChar;
}

function retourCaractèresInterdit($str){
	switch ($str) {
		case '²':
			return 1;
			break;
		case '&':
			return 1;
			break;
		case 'é':
			return 1;
			break;
		case '"':
			return 1;
			break;
		case '\'':
			return 1;
			break;
		case '(':
			return 1;
			break;
		case '-':
			return 1;
			break;
		case 'è':
			return 1;
			break;
		case '_':
			return 1;
			break;
		case 'ç':
			return 1;
			break;
		case 'à':
			return 1;
			break;
		case ')':
			return 1;
			break;
		case '=':
			return 1;
			break;
		case '~':
			return 1;
			break;
		case '#':
			return 1;
			break;
		case '{':
			return 1;
			break;
		case '[':
			return 1;
			break;
		case '|':
			return 1;
			break;
		case '`':
			return 1;
			break;
		case '\\':
			return 1;
			break;
		case '^':
			return 1;
			break;
		case '@':
			return 1;
			break;
		case ']':
			return 1;
			break;
		case '}':
			return 1;
			break;
		case '^':
			return 1;
			break;
		case '$':
			return 1;
			break;
		case 'ù':
			return 1;
			break;
		case '*':
			return 1;
			break;
		case '¨':
			return 1;
			break;
		case '£':
			return 1;
			break;
		case '%':
			return 1;
			break;
		case 'µ':
			return 1;
			break;
		case '':
			return 1;
			break;
		case '<':
			return 1;
			break;
		case '>':
			return 1;
			break;
		case '/':
			return 1;
			break;
		case '*':
			return 1;
			break;
		case '-':
			return 1;
			break;
		case '+':
			return 1;
		break;
		case ',':
			return 1;
		break;
		case ';':
			return 1;
		break;
		case ':':
			return 1;
		break;
		case '!':
			return 1;
		break;
		case '?':
			return 1;
		break;
		case '.':
			return 1;
		break;
		case '/':
			return 1;
		break;
		case '§':
			return 1;
		break;
		default:
			return 0;
			break;
	}

	return 0;
}
?>
