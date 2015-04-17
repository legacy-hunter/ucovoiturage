<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Utilisateurs\UtilisateursBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use FOS\UserBundle\Command\CreateUserCommand as BaseCommand;

class CreateUserCommand extends BaseCommand
{
 
    
     /**
     * @see Command
     */
    protected function configure()
    {
        parent::configure();
        $this
            ->setName('utilisateurs:user:create')
            ->getDefinition()->addArguments(array(
                new InputArgument('nom', InputArgument::REQUIRED, 'Le nom'),
                new InputArgument('prenom', InputArgument::REQUIRED, 'le prenom'),
                new InputArgument('matricule', InputArgument::REQUIRED, 'le matricule'),
                new InputArgument('cin', InputArgument::REQUIRED, 'le cin'),
                new InputArgument('telephone', InputArgument::REQUIRED, 'le contact'),
                new InputArgument('numPermis', InputArgument::REQUIRED, 'le numero du permis'),
                new InputArgument('ville', InputArgument::REQUIRED, 'la ville'),
                new InputArgument('role', InputArgument::REQUIRED, 'le role'),
                new InputArgument('compte', InputArgument::REQUIRED, 'le numero de compte'),
                new InputArgument('sexe', InputArgument::REQUIRED, 'le sexe'),
                new InputArgument('dateNaissance', InputArgument::REQUIRED, 'la date de naissance')
            ))
        ;
        $this->setHelp(<<<EOT
// L'aide qui va bien
EOT
            );
      
    }
 
    // ...
 
    protected function interact(InputInterface $input, OutputInterface $output)
    {
        parent::interact($input, $output);
        if (!$input->getArgument('nom')) {
            $nom = $this->getHelper('dialog')->askAndValidate(
                $output,
                'Svp saisissez un nom:',
                function($nom) {
                    if (empty($nom)) {
                        throw new \Exception('Le nom ne peut etre vide');
                    }
 
                    return $nom;
                }
            );
            $input->setArgument('nom', $nom);
        }
       
    
        if (!$input->getArgument('prenom')) {
            $prenom = $this->getHelper('dialog')->askAndValidate(
                $output,
                'Choisissez un prenom :',
                function($prenom) {
                    if (empty($prenom)) {
                        throw new \Exception('Le prenom ne peut etre vide');
                    }
 
                    return $prenom;
                }
            );
            $input->setArgument('prenom', $prenom);
        }
        
         if (!$input->getArgument('matricule')) {
            $matricule = $this->getHelper('dialog')->askAndValidate(
                $output,
                'Choisissez un Matricule :',
                function($matricule) {
                    if (empty($matricule)) {
                        throw new \Exception('Le matricule ne peut etre vide');
                    }
 
                    return $matricule;
                }
            );
            $input->setArgument('matricule', $matricule);
        }
        
         if (!$input->getArgument('cin')) {
            $cin = $this->getHelper('dialog')->askAndValidate(
                $output,
                'Saisissez votre Cin :',
                function($cin) {
                    if (empty($cin)) {
                        throw new \Exception('Le Cin ne peut etre vide');
                    }
 
                    return $cin;
                }
            );
            $input->setArgument('Le cin', $cin);
        }
       
        if (!$input->getArgument('telephone')) {
            $telephone = $this->getHelper('dialog')->askAndValidate(
                $output,
                'Saisissez votre contact :',
                function($telephone) {
                    if (empty($telephone)) {
                        throw new \Exception('Le contact ne peut etre vide');
                    }
 
                    return $telephone;
                }
            );
            $input->setArgument('Le telephone', $telephone);
        }
        
        if (!$input->getArgument('numPermis')) {
            $numPermis = $this->getHelper('dialog')->askAndValidate(
                $output,
                'Saisissez votre numero de permis :',
                function($numPermis) {
                    if (empty($numPermis)) {
                        throw new \Exception('Le numero de permis ne peut etre vide');
                    }
 
                    return $numPermis;
                }
            );
            $input->setArgument('Le numero de permis', $numPermis);
        }
        
        if (!$input->getArgument('compte')) {
            $compte = $this->getHelper('dialog')->askAndValidate(
                $output,
                'Saisissez votre compte :',
                function($compte) {
                    if (empty($compte)) {
                        throw new \Exception('Le compte ne peut etre vide');
                    }
 
                    return $compte;
                }
            );
            $input->setArgument('Le compte', $compte);
        }
        
        if (!$input->getArgument('dateNaissance')) {
            $dateNaissance = $this->getHelper('dialog')->askAndValidate(
                $output,
                'Saisissez votre date de naissance :',
                function($dateNaissance) {
                    if (empty($dateNaissance)) {
                        throw new \Exception('La date de naissancen ne peut etre vide');
                    }
 
                    return $dateNaissance;
                }
            );
            $input->setArgument('La date de naissance', $dateNaissance);
        }
        
        if (!$input->getArgument('role')) {
            $role = $this->getHelper('dialog')->askAndValidate(
                $output,
                'Saisissez votre role :',
                function($role) {
                    if (empty($role)) {
                        throw new \Exception('');
                    }
 
                    return $role;
                }
            );
            $input->setArgument('Le role', $role);
        } 
        
         if (!$input->getArgument('ville')) {
            $ville = $this->getHelper('dialog')->askAndValidate(
                $output,
                'Saisissez votre Ville :',
                function($ville) {
                    if (empty($ville)) {
                        throw new \Exception('La ville  ne peut etre vide');
                    }
 
                    return $ville;
                }
            );
            $input->setArgument('La ville', $ville);
        }
        
        if (!$input->getArgument('sexe')) {
            $sexe = $this->getHelper('dialog')->askAndValidate(
                $output,
                'Selectionnez votre Sexe :',
                function($sexe) {
                    if (empty($sexe)) {
                        throw new \Exception('');
                    }
 
                    return $sexe;
                }
            );
            $input->setArgument('Le sexe', $sexe);
        }
    }
    
    
   /**
     * @see Command
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $username   = $input->getArgument('username');
        $email      = $input->getArgument('email');
        $password   = $input->getArgument('password');
        $nom  = $input->getArgument('nom');
        $prenom   = $input->getArgument('prenom');
        $inactive   = $input->getOption('inactive');
        $superadmin = $input->getOption('super-admin');
        $matricule = $input->getArgument('matricule');
        $cin = $input->getArgument('cin');
        $telephone = $input->getArgument('telephone');
        $numPermis = $input->getArgument('numPermis');
        $compte = $input->getArgument('compte');
        $dateNaissance = $input->getArgument('dateNaissance');
        $role= $input->getArgument('role');
        $ville = $input->getArgument('ville');
        $sexe = $input->getArgument('sexe');
 
        /** @var \FOS\UserBundle\Model\UserManager $user_manager */
        $user_manager = $this->getContainer()->get('fos_user.user_manager');
 
        /** @var \Utilisateurs\UtilisateursBundle\Entity\Utilisateurs $user */
        $user = $user_manager->createUser();
        $user->setUsername($username);
        $user->setEmail($email);
        $user->setPlainPassword($password);
        $user->setEnabled((Boolean) !$inactive);
        $user->setSuperAdmin((Boolean) $superadmin);
        $user->setNom($nom);
        $user->setMatricule($matricule);
        $user->setPrenom($prenom);
        $user->setCin($cin);
        $user->setTelephone($telephone);
        $user->setNum_permis($numPermis);
        $user->setCompte($compte);
        $user->setDateNaissance($dateNaissance);
        $user->setRole($role);
        $user->setVille($ville);
        $user->setSexe($sexe);
        
        $user_manager->updateUser($user);
 
        $output->writeln(sprintf('Created user <comment>%s</comment>', $username));
    }  
   

    
    
}