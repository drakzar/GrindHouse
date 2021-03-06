<?php
/*
*
* -------------------------------------------------------
* CLASSNAME:        Utilisateur
* GENERATION DATE:  23.09.2013
* CLASS FILE:       C:\wamp\www\php_class_generator/generated_classes/class.Utilisateur.php
* FOR MYSQL TABLE:  utilisateur
* FOR MYSQL DB:     grindhouse
*/

include_once("resources/class.database.php");

// **********************
// CLASS DECLARATION
// **********************

class Utilisateur
{


// **********************
// ATTRIBUTE DECLARATION
// **********************

var $utilisateur_pk_id;   // PrimaryKey de la table
var $id_user;   // PrimaryKey de la table User
var $prenom;   // Prenom de l'utilisateur
var $nom;   // Nom de l'utilisateur
var $email;   // Email de l'utilisateur
var $mdp;   // Mot de passe encodé en MD5 de l'utilisateur
var $adresse_postale;   // Adresse postale de l'utilisateur
var $complement_adresse;   // Complément d'adresse de l'utilisateur
var $cp;   // Code postale de l'utilisateur
var $pays;   // Pays de l'utilisateur
var $is_venteprivee;   // L'utilisateur a t il acces à la section "vente privé"
var $is_admin;   // L'utilisateur est il un administrateur
var $date_inscription;   // Date de l'inscription de l'utilisateur
var $database; // Instance de la base de données


// **********************
// CONSTRUCTOR METHOD
// **********************

function Utilisateur()
{

$this->database = new Database();

}


// **********************
// GETTER METHODS
// **********************


function getid_user()
{
return $this->id_user;
}

function getprenom()
{
return $this->prenom;
}

function getnom()
{
return $this->nom;
}

function getemail()
{
return $this->email;
}

function getmdp()
{
return $this->mdp;
}

function getadresse_postale()
{
return $this->adresse_postale;
}

function getcomplement_adresse()
{
return $this->complement_adresse;
}

function getcp()
{
return $this->cp;
}

function getpays()
{
return $this->pays;
}

function getis_venteprivee()
{
return $this->is_venteprivee;
}

function getis_admin()
{
return $this->is_admin;
}

function getdate_inscription()
{
return $this->date_inscription;
}

// **********************
// SETTER METHODS
// **********************


function setid_user($val)
{
$this->id_user =  $val;
}

function setprenom($val)
{
$this->prenom =  $val;
}

function setnom($val)
{
$this->nom =  $val;
}

function setemail($val)
{
$this->email =  $val;
}

function setmdp($val)
{
$this->mdp =  $val;
}

function setadresse_postale($val)
{
$this->adresse_postale =  $val;
}

function setcomplement_adresse($val)
{
$this->complement_adresse =  $val;
}

function setcp($val)
{
$this->cp =  $val;
}

function setpays($val)
{
$this->pays =  $val;
}

function setis_venteprivee($val)
{
$this->is_venteprivee =  $val;
}

function setis_admin($val)
{
$this->is_admin =  $val;
}

function setdate_inscription($val)
{
$this->date_inscription =  $val;
}

// **********************
// SELECT METHOD / LOAD
// **********************

function select($id)
{

$sql =  "SELECT * FROM utilisateur WHERE utilisateur_pk_id = $id;";
$result =  $this->database->query($sql);
$result = $this->database->result;
$row = mysql_fetch_object($result);


$this->id_user = $row->id_user;

$this->prenom = $row->prenom;

$this->nom = $row->nom;

$this->email = $row->email;

$this->mdp = $row->mdp;

$this->adresse_postale = $row->adresse_postale;

$this->complement_adresse = $row->complement_adresse;

$this->cp = $row->cp;

$this->pays = $row->pays;

$this->is_venteprivee = $row->is_venteprivee;

$this->is_admin = $row->is_admin;

$this->date_inscription = $row->date_inscription;

}

// **********************
// DELETE
// **********************

function delete($id)
{
$sql = "DELETE FROM utilisateur WHERE utilisateur_pk_id = $id;";
$result = $this->database->query($sql);

}

// **********************
// INSERT
// **********************

function insert()
{
$this->utilisateur_pk_id = ""; // clear key for autoincrement

$sql = "INSERT INTO utilisateur ( id_user,prenom,nom,email,mdp,adresse_postale,complement_adresse,cp,pays,is_venteprivee,is_admin,date_inscription ) VALUES ( '$this->id_user','$this->prenom','$this->nom','$this->email','$this->mdp','$this->adresse_postale','$this->complement_adresse','$this->cp','$this->pays','$this->is_venteprivee','$this->is_admin','$this->date_inscription' )";
$result = $this->database->query($sql);
$this->utilisateur_pk_id = mysql_insert_id($this->database->link);

}

// **********************
// UPDATE
// **********************

function update($id)
{



$sql = " UPDATE utilisateur SET  id_user = '$this->id_user',prenom = '$this->prenom',nom = '$this->nom',email = '$this->email',mdp = '$this->mdp',adresse_postale = '$this->adresse_postale',complement_adresse = '$this->complement_adresse',cp = '$this->cp',pays = '$this->pays',is_venteprivee = '$this->is_venteprivee',is_admin = '$this->is_admin',date_inscription = '$this->date_inscription' WHERE utilisateur_pk_id = $id ";

$result = $this->database->query($sql);



}


} 

?>