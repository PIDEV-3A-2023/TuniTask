package com.tunitask.gui.front.reclamation;


import com.codename1.components.InteractionDialog;
import com.codename1.ui.*;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.tunitask.entities.Reclamation;
import com.tunitask.services.ReclamationService;
import com.tunitask.utils.Statics;

import java.util.ArrayList;
import java.util.Collections;

public class AfficherToutReclamation extends Form {


    public static Reclamation currentReclamation = null;
    Button addBtn;


    PickerComponent sortPicker;
    ArrayList<Component> componentModels;

    public AfficherToutReclamation() {
        super("Reclamations", new BoxLayout(BoxLayout.Y_AXIS));

        addGUIs();
        addActions();
    }

    public void refresh() {
        this.removeAll();
        addGUIs();
        addActions();
        this.refreshTheme();
    }

    private void addGUIs() {
        addBtn = new Button("Ajouter");
        addBtn.setUIID("buttonWhiteCenter");
        this.add(addBtn);


        ArrayList<Reclamation> listReclamations = ReclamationService.getInstance().getAll();

        componentModels = new ArrayList<>();

        sortPicker = PickerComponent.createStrings("User", "Nom", "Prenom", "Email", "Description", "Etat").label("Trier par");
        sortPicker.getPicker().setSelectedString("");
        sortPicker.getPicker().addActionListener((l) -> {
            if (componentModels.size() > 0) {
                for (Component componentModel : componentModels) {
                    this.removeComponent(componentModel);
                }
            }
            componentModels = new ArrayList<>();
            Statics.compareVar = sortPicker.getPicker().getSelectedString();
            Collections.sort(listReclamations);
            for (Reclamation reclamation : listReclamations) {
                Component model = makeReclamationModel(reclamation);
                this.add(model);
                componentModels.add(model);
            }
            this.revalidate();
        });
        this.add(sortPicker);

        if (listReclamations.size() > 0) {
            for (Reclamation reclamation : listReclamations) {
                Component model = makeReclamationModel(reclamation);
                this.add(model);
                componentModels.add(model);
            }
        } else {
            this.add(new Label("Aucune donnée"));
        }
    }

    private void addActions() {
        addBtn.addActionListener(action -> {
            currentReclamation = null;
            new AjouterReclamation(this).show();
        });

    }

    Label userLabel, nomLabel, prenomLabel, emailLabel, descriptionLabel, etatLabel;


    private Container makeModelWithoutButtons(Reclamation reclamation) {
        Container reclamationModel = new Container(new BoxLayout(BoxLayout.Y_AXIS));
        reclamationModel.setUIID("containerRounded");


        userLabel = new Label("User : " + reclamation.getUser());
        userLabel.setUIID("labelDefault");

        nomLabel = new Label("Nom : " + reclamation.getNom());
        nomLabel.setUIID("labelDefault");

        prenomLabel = new Label("Prenom : " + reclamation.getPrenom());
        prenomLabel.setUIID("labelDefault");

        emailLabel = new Label("Email : " + reclamation.getEmail());
        emailLabel.setUIID("labelDefault");

        descriptionLabel = new Label("Description : " + reclamation.getDescription());
        descriptionLabel.setUIID("labelDefault");

        etatLabel = new Label("Etat : " + reclamation.getEtat());
        etatLabel.setUIID("labelDefault");

        userLabel = new Label(reclamation.getUser() == null ? "User : null" : "User : " + reclamation.getUser().getEmail());
        userLabel.setUIID("labelDefault");


        reclamationModel.addAll(

                userLabel, nomLabel, prenomLabel, emailLabel, descriptionLabel, etatLabel
        );

        return reclamationModel;
    }

    Button editBtn, deleteBtn;
    Container btnsContainer;

    private Component makeReclamationModel(Reclamation reclamation) {

        Container reclamationModel = makeModelWithoutButtons(reclamation);

        btnsContainer = new Container(new BorderLayout());
        btnsContainer.setUIID("containerButtons");

        editBtn = new Button("Modifier");
        editBtn.setUIID("buttonWhiteCenter");
        editBtn.addActionListener(action -> {
            currentReclamation = reclamation;
            new ModifierReclamation(this).show();
        });

        deleteBtn = new Button("Supprimer");
        deleteBtn.setUIID("buttonWhiteCenter");
        deleteBtn.addActionListener(action -> {
            InteractionDialog dlg = new InteractionDialog("Confirmer la suppression");
            dlg.setLayout(new BorderLayout());
            dlg.add(BorderLayout.CENTER, new Label("Voulez vous vraiment supprimer ce reclamation ?"));
            Button btnClose = new Button("Annuler");
            btnClose.addActionListener((ee) -> dlg.dispose());
            Button btnConfirm = new Button("Confirmer");
            btnConfirm.addActionListener(actionConf -> {
                int responseCode = ReclamationService.getInstance().delete(reclamation.getId());

                if (responseCode == 200) {
                    currentReclamation = null;
                    dlg.dispose();
                    reclamationModel.remove();
                    this.refreshTheme();
                } else {
                    Dialog.show("Erreur", "Erreur de suppression du reclamation. Code d'erreur : " + responseCode, new Command("Ok"));
                }
            });
            Container btnContainer = new Container(new BoxLayout(BoxLayout.X_AXIS));
            btnContainer.addAll(btnClose, btnConfirm);
            dlg.addComponent(BorderLayout.SOUTH, btnContainer);
            dlg.show(800, 800, 0, 0);
        });

        btnsContainer.add(BorderLayout.WEST, editBtn);
        btnsContainer.add(BorderLayout.EAST, deleteBtn);


        reclamationModel.add(btnsContainer);

        return reclamationModel;
    }

}