<?php
date_default_timezone_set('Africa/Lagos');
 class Model
 {
     private const HOST ='localhost';//Nom du serveur
     private const DBNAME='ecole';
     private const USERNAME ='root';
     private const PASSWORD='';
     private $bd;

     function __construct()
    {
        try {
            //code...
            $this->bd=new PDO('mysql:host='.self::HOST.';dbname='.self::DBNAME,self::USERNAME,self::PASSWORD);
        } catch (PDOException $e) {
            //throw $th;
            die('Impossible de se connecté a la base: '.$e->getMessage());
        }
     }

     public function ajouterEleve($nom,$prenom,$classe){
        $insererUnEleve = $this->bd->prepare('INSERT INTO eleve(nom,prenoms,classe) VALUES (?,?,?)');
        if($insererUnEleve->execute(array($nom, $prenom, $classe)) == true)
            return 1;
        else
            return 0;
     }
     public function ajouterMatiere($nom,$professeur,$coefficient){
        $insererUneMatiere = $this->bd->prepare('INSERT INTO matiere(nom,professeur,coefficient) VALUES (?,?,?)');
        if($insererUneMatiere->execute(array($nom, $professeur, $coefficient)) == true)
            return 1;
        else
            return 0;
     }
     public function ajouterNote($id_eleve,$id_matiere,$note){
        $insererUneNote = $this->bd->prepare('INSERT INTO evaluer VALUES (?,?,?,NOW())');
        if($insererUneNote->execute(array($id_eleve, $id_matiere,$note)) == true)
            return 1;
        else
            return 0;
     }
     public function supprimerEleve($id_eleve){
        $supprimerUnEleve = $this->bd->prepare('DELETE FROM eleve WHERE id = ?');        
        if($supprimerUnEleve->execute(array($id_eleve)) == true ) 
            return 1;
        else
            return 0;
     }
     public function supprimerMatiere($id_matiere){
        $supprimerUneMatiere = $this->bd->prepare('DELETE  FROM matiere WHERE id= ?');
        if($supprimerUneMatiere->execute(array($id_matiere)) == true)
            return 1;
        else
            return 0;
        
     }
     public function listEleve(){
        $afficherUnEleve = $this->bd->query('SELECT * FROM eleve');  
        return $afficherUnEleve->fetchAll();             
     }

     public function listMatiere(){
        $afficherUnEleve = $this->bd->query('SELECT * FROM matiere');  
        return $afficherUnEleve->fetchAll();
     }

     public function listNotes(){
        $afficherUneNote = $this->bd->query('SELECT  eleve.nom, eleve.prenoms AS Leleve , matiere.nom AS LaMatiere, note, date_compo FROM evaluer 
        LEFT JOIN eleve ON evaluer.id_eleve = eleve.id
        LEFT JOIN matiere ON evaluer.id_matiere=matiere.id');  
        return $afficherUneNote->fetchAll();

        return 0;
     }

     public function listNotesParEleve ($id_eleve){       
      $afficherNoteEleve = $this->bd->query('SELECT eleve.nom, eleve.prenoms AS Leleve, note FROM evaluer 
      LEFT JOIN eleve ON evaluer.id_eleve=eleve.id  
       WHERE id_eleve='.$_GET['id_eleve']);
    //    var_dump($afficherNoteEleve);
    //    exit;
      return $afficherNoteEleve->fetchAll();

        
     }

     public function  listNotesParMatiere ($id_matiere){
        $afficherNoteMatiere = $this->bd->query('SELECT matiere.nom AS LaMatiere, note FROM evaluer 
        LEFT JOIN matiere ON evaluer.id_matiere=matiere.id  
        WHERE id_matiere='.$_GET['id_matiere']);
    //    var_dump($afficherNoteEleve);
    //    exit;
      return $afficherNoteMatiere->fetchAll();
     }

     public function listCinqMeuilleurEleve (){
        $meilleurEleve =$this->bd->query('SELECT eleve.nom, eleve.prenoms AS Leleve, AVG(note) AS moyenne FROM evaluer 
        LEFT JOIN eleve ON evaluer.id_eleve=eleve.id
        GROUP BY id_eleve
        ORDER BY moyenne DESC
        LIMIT 5');
        return $meilleurEleve->fetchAll();
     }
     public function listCinqMeuilleureNote (){
        $listCinqMeuilleureNote = $this->bd->query('SELECT eleve.nom, eleve.prenoms AS Leleve , matiere.nom AS LaMatiere, note, date_compo FROM evaluer 
        LEFT JOIN eleve ON evaluer.id_eleve = eleve.id
        LEFT JOIN matiere ON evaluer.id_matiere=matiere.id       
        GROUP BY note DESC LIMIT 5');       
        return $listCinqMeuilleureNote->fetchAll();
     }


//      public function select($sql, $data=array()){

//         $req = $this->bd->prepare($sql);
//         $req->execute($data);
//         return $req;
//      }

//        public function insert($sql, $data=array()){

//         $req = $this->bd->prepare($sql);
//         $req->execute($data);
//        }

//        public function affiche($sql, $data=array()){

//         $req = $this->bd->query($sql);
//         $data = $req->fetchAll();
//         return $data;
//        }

//        public function modifie($sql, $data=array()){
//         $req = $this->bd->prepare($sql);
//         $req->execute();

//        }
//        public function supprime($sql, $data=array()) {

//         $req = $this->bd->prepare($sql);
//         $req->execute();
//        }
}
 $BD = new Model();
?>