package com.tunitask.entities;

import com.tunitask.utils.Statics;

public class Reclamation implements Comparable<Reclamation> {

    private int id;
    private User user;
    private String nom;
    private String prenom;
    private String email;
    private String description;
    private String etat;

    public Reclamation() {
    }

    public Reclamation(int id, User user, String nom, String prenom, String email, String description, String etat) {
        this.id = id;
        this.user = user;
        this.nom = nom;
        this.prenom = prenom;
        this.email = email;
        this.description = description;
        this.etat = etat;
    }
      public Reclamation( String nom, String prenom, String email, String description, String etat) {
        
       
        this.nom = nom;
        this.prenom = prenom;
        this.email = email;
        this.description = description;
        this.etat = etat;
    }
      
        public Reclamation( int id,String nom, String prenom, String email, String description, String etat) {
        
       this.id = id;
        this.nom = nom;
        this.prenom = prenom;
        this.email = email;
        this.description = description;
        this.etat = etat;
    }

   

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public User getUser() {
        return user;
    }

    public void setUser(User user) {
        this.user = user;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public String getPrenom() {
        return prenom;
    }

    public void setPrenom(String prenom) {
        this.prenom = prenom;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getEtat() {
        return etat;
    }

    public void setEtat(String etat) {
        this.etat = etat;
    }


    @Override
    public int compareTo(Reclamation reclamation) {
        switch (Statics.compareVar) {
            case "User":
                return this.getUser().getEmail().compareTo(reclamation.getUser().getEmail());
            case "Nom":
                return this.getNom().compareTo(reclamation.getNom());
            case "Prenom":
                return this.getPrenom().compareTo(reclamation.getPrenom());
            case "Email":
                return this.getEmail().compareTo(reclamation.getEmail());
            case "Description":
                return this.getDescription().compareTo(reclamation.getDescription());
            case "Etat":
                return this.getEtat().compareTo(reclamation.getEtat());

            default:
                return 0;
        }
    }

}