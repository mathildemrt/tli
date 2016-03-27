<?php
    
    /**
    *
    * Classe de gestion de la base de donnée
    *
    * Cette classe regroupe toutes les méthodes nécessitant un appel 
    * à la base de donnée.
    *
    * @author PORTE PARISEL MAREITE CORNILLON
    */
	class BD{
	
        /**
        * @var string Attribut de classe pour le nom de la base de donnée
        */
		private $dbName = "acupuncture";
		/**
        * @var string Attribut de classe spécifiant le mot de passe pour accéder à la base de donnée
        */
        private $pass = "";
		/**
        * @var string Attribut de classe spécifiant l'utilisateur de la base de donnée
        */
        private $user = "root"; 
		
        
        
        /**
        * Méthode permettant d'accéder à la base de donnée
        *
        * Cette méthode permet de se connecter à la base de donnée grâce a PDO.
        * Elle retourne un objet PDO si la connexion est effectuée.
        *
        * @param void
        * @return PDO $db Objet PDO pointant sur la base de données créée
        * @throws Exception Pour obtenir une trace de l'erreur lors de la connexion
        * @author PORTE-PARISELLE
        */
		public function getDB(){
			$db = null;
			try{
				$db = new PDO('mysql:host=localhost; dbname='.  $this->dbName .'; charset=utf8',
                                                                $this->user, 
                                                                $this->pass,
                                array(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true));
			}
			catch (Exception $e){
					die('Erreur : ' . $e->getMessage());
            }
			return $db;
		}
		
        
        
        /**
        * Méthode de gestion de la connexion de l'utilisateur
        *
        * Cette méthode permet de vérifier l'intégrité des paramètres donnés par
        * l'utilisateur lorsque que ce dernier souhaite se connecter. Redirige vers
        * l'index une fois la connexion vérifiée
        *
        * @todo Vérifier l'intégrité des paramètres POST
        * @param void
        * @return void
        * @author PORTE-PARISELLE
        */
		public function connexion()
		{		  
		    $bdd = $this->getDB();
		    
		    $identifiant = $_POST['identifiant'];
            $password = $_POST['password'];


            if(isset($identifiant)&& !empty($identifiant) && isset($password)&& !empty($password))
            {
                $reponse = $bdd->query("SELECT * FROM utilisateurs WHERE user = '".$identifiant."'"); // on cherche dans la table utilisateur le pseudo
                $data = $reponse->fetch();

                if(($identifiant==$data['user'] ) && ($password==$data['password']))    // si les pseudos et les mots de passe sont bon, on va vers l'index et on ouvre la session
                {
                    session_start();
                    $_SESSION['identifiant'] = $identifiant;    // on fait correspondre le pseudo de session a celui de l'utilisateur
                    $_SESSION['nom'] = $data['nom'];
                    $_SESSION['prenom'] = $data['prenom'];

                    $_SESSION['password'] = $password;          // pareil pour le mot de passe
                    header("Location: ../index.php");           // redirige vers l'index
                }
                else{
                    header("Location: ../index.php?page=erreur_connexion");        
                }
            }
            else
            {
                header("Location: ../index.php?page=erreur_connexion");
            }
		}
		
        
        
        /**
        * Méthode de gestion de la déconnexion de l'utilisateur
        *
        * Cette méthode permet de détruire la session de l'utilisateur en cours
        * afin d'assurer sa déconnexion. Redirige vers l'index une fois la déconnexion
        * effectuée
        *
        * @param void
        * @return void
        * @author PORTE-PARISELLE
        */
		public function deconnexion()
		{
		    session_start();
		    session_destroy();
		    header("Location: ../index.php?page=accueil");
		}
        
        
        
        /**
        * Méthode de vérification de l'unicité d'un pseudo
        *
        * Cette méthode permet vérifier que le pseudo d'un utilisateur est
        * bien unique lors de la création d'un nouveau compte, afin de ne pas avoir
        * de problème par la suite
        *
        * @todo Faire une requête préparée
        * @param string $nom Pseudo de l'utilisateur
        * @return boolean True si le pseudo n'existe pas, False sinon
        * @throws Exception POur obtenir une trace en cas d'echec
        * @author PORTE-PARISELLE
        */
		public function verifie_pseudo($pseudo){
		   try
		   {
		      $dbb = $this->getDB();
		      
	
		      $requete= $dbb->prepare("SELECT user FROM utilisateurs WHERE user='".$pseudo."'");
		      
		      $requete->execute();
		      
		      if ($requete->fetch())
			  {
				echo 'le pseudo existe déja !';
				return FALSE;
			  }
		      else
		      {
			     return TRUE;
		      }
		
		    } 
            catch (Exception $e)
		    {
			    die('Erreur : ' . $e->getMessage());
		    }
		}
        
        
        
        
        
		/**
        * Méthode d'inscription d'un utilisateur dans la base de données
        *
        * Cette méthode permet d'inscrire un nouvel utilisateur dans la base
        * de données, afin de créer un nouveau compte utilisable par la suite.
        * Redirige vers l'index une fois l'inscription effectuée
        *
        * @todo Vérifier l'intégrité des paramètres POST
        * @param void
        * @return void
        * @throws Exception Pour garder une trace de l'erreur en cas d'echec
        * @author PORTE-PARISELLE
        */
		public function inscription(){
		    try
		    {
			    $db = $this->getDB();
			    
			    $nom = $_POST['nom'];
			    $prenom = $_POST['prenom'];
			    $email = $_POST['email_addr'];
			    $user =  $_POST['user_name'];
			    $password = $_POST['mot_de_passe'];
			    
			    //on verifie si le pseudo existe déja
			    if ($this->verifie_pseudo($user)==FALSE){
				    header("Location: ../index.php?page=inscription");
                }
  
			    // On prépare la requête
			    $requete = $db->prepare("INSERT INTO utilisateurs (user, password, nom, prenom, email) VALUES (:user,:password,:nom,:prenom,:email)");

			    // On lie les variables définie au-dessus au paramètre de la requête préparée
			    $requete->bindValue(':user', $user, PDO::PARAM_STR);
			    $requete->bindValue(':password', $password, PDO::PARAM_STR);
			    $requete->bindValue(':nom', $nom, PDO::PARAM_STR);
			    $requete->bindValue(':prenom', $prenom, PDO::PARAM_STR);
			    $requete->bindValue(':email', $email, PDO::PARAM_STR);

			    //On exécute la requête
			    $requete->execute();
                header("Location: ../index.php?page=accueil");
			    
		    } catch (Exception $e)
		    {
			    die('Erreur : ' .$e->getMessage());
		    }
  
		}
        
        
        /**
        * Méthode de d'obtention de la liste des pathologies
        *
        * Cette méthode permet de retourner une liste de toute les pathologies
        * contenues dans la base de données
        *
        * @param void
        * @return Array[] Tableau comprenant la liste des pathologies
        * @throws Exception Pour garder une trace de l'erreur en cas d'echec
        * @author CORNILLON
        */
        public function getPatho(){
            try{
                $bdd = $this->getDB(); 
                
                $req_pathologies = $bdd->prepare('SELECT * FROM symptpatho 
                                                  LEFT JOIN patho ON symptpatho.idP = patho.idP
                                                  LEFT JOIN symptome ON symptpatho.idS = symptome.idS');
                $req_pathologies->execute();
                $req_pathologies->setFetchMode(PDO::FETCH_LAZY);
                
                return $req_pathologies;
                
            } catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
        }
        
        
        /**
        * Méthode de d'obtention de la liste des méridien
        *
        * Cette méthode permet de retourner une liste de tous les méridiens
        * contenus dans la base de données
        *
        * @param void
        * @return Array[] Tableau comprenant la liste des méridien
        * @throws Exception Pour garder une trace de l'erreur en cas d'echec
        * @author CORNILLON
        */
        public function getMeridien(){
            try{
                $bdd = $this->getDB(); 
                
                $req_meridien = $bdd->prepare('SELECT * FROM meridien');
                $req_meridien->execute();
                $req_meridien->setFetchMode(PDO::FETCH_LAZY);
                
                return $req_meridien;
                
            } catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
        }
        
        
        /**
        * Méthode de corespondance mot-clé/symptome
        *
        * Cette méthode permet de faire le lien entre une liste de mot-clés passés en paramètre et
        * les symptomes associés dans la base de données. Les mot-clés sont reçus sous la forme
        * d'une chaine de caractère, et séparés par une *. Il faut donc au préalable séparer les mot-clés
        * pour obtenir un tableau exploitable
        *
        * @todo Ne pas passer une string entière, mais directement un tableau des mot-clés !
        * @param string $keyword Une chaine de caractères comprenants tous les keywords, séparés par une *
        * @return void
        * @author PORTE-PARISELLE-CORNILLON-MAREITE
        */
		public function correspondance_keyword_symptome($keyword){
          
            $resu=null;
            $DB = $this->getDB();
            $list_keyword = $this->get_keyword();
            $list_keyword = explode('*',$list_keyword);
            
            //On verifie que les paramètres existent
            if(!isset($keyword) || !isset($list_keyword))
                return false;
            
            //Si le mot-clé est bien dans la liste de mot-clés,
            // on effectue le lien entre symptomes et mot-clé
            if(in_array($keyword,$list_keyword)){
                 $requete = $DB->prepare("SELECT mer,type,desc_patho,desc_symptome 
                                            FROM keywords 
                                            JOIN keySympt ON keywords.idK = keySympt.idK 
                                            JOIN symptome ON keySympt.idS = symptome.idS 
                                            JOIN symptPatho ON symptome.idS = symptPatho.idS 
                                            JOIN patho ON symptPatho.idP = patho.idP 
                                            WHERE name = :keyword");

                // On lie la variable $keyword définie au-dessus au paramètre :keyword de la requête préparée

                $requete->execute();
                $i=0;

                while($row = $requete->fetch()){
                    $resu[$i] = $row;
                    $i++;
                }
                
                return $resu;
                
            } else return false;
		}
		
		        
               
        /**
        * Méthode d'obtention de la liste des mot-clés
        *
        * Cette méthode permet de retourner la liste des mot-clés sous la 
        * forme d'une chaine de caractère, séparés par des *
        *
        * @todo Ne pas retourner une chaine de caractère, mais directement le tableau des mot-clés
        * @todo Ajouter les deux premiers mot-clés, qui bugs pour le moment
        * @param void
        * @return string Liste des mot-clés
        * @author CORNILLON-MAREITE
        */
        public function get_keyword(){
            
            //Recuperation de la base de données
            $db = $this->getDB(); 
            
            // On prépare la requête
			$requete = $db->query('SELECT name FROM keywords');
            
            //On exécute la requête. Les deux premières lignes bugs, on enlève pour le moment
            $i=0;
            while($row = $requete->fetch()){
                if($i>2)
                    $list_keyword[] = $row[0];
                $i++;
             }
            
            $list_keyword = implode('*',$list_keyword);
            return $list_keyword;
        }		
	}

?>