package com.tunitask.services;

import com.codename1.components.InfiniteProgress;
import com.codename1.io.*;
import com.codename1.ui.events.ActionListener;
import com.tunitask.entities.Reclamation;
import com.tunitask.entities.User;
import com.tunitask.utils.Statics;

import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

public class ReclamationService {

    public static ReclamationService instance = null;
    public int resultCode;
    private ConnectionRequest cr;
    private ArrayList<Reclamation> listReclamations;


    private ReclamationService() {
        cr = new ConnectionRequest();
    }

    public static ReclamationService getInstance() {
        if (instance == null) {
            instance = new ReclamationService();
        }
        return instance;
    }

    public ArrayList<Reclamation> getAll() {
        listReclamations = new ArrayList<>();

        cr = new ConnectionRequest();
        cr.setUrl(Statics.BASE_URL + "/reclamation");
        cr.setHttpMethod("GET");

        cr.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {

                if (cr.getResponseCode() == 200) {
                    listReclamations = getList();
                }

                cr.removeResponseListener(this);
            }
        });

        try {
            cr.setDisposeOnCompletion(new InfiniteProgress().showInfiniteBlocking());
            NetworkManager.getInstance().addToQueueAndWait(cr);
        } catch (Exception e) {
            e.printStackTrace();
        }

        return listReclamations;
    }

    private ArrayList<Reclamation> getList() {
        try {
            Map<String, Object> parsedJson = new JSONParser().parseJSON(new CharArrayReader(
                    new String(cr.getResponseData()).toCharArray()
            ));
            List<Map<String, Object>> list = (List<Map<String, Object>>) parsedJson.get("root");

            for (Map<String, Object> obj : list) {
                Reclamation reclamation = new Reclamation(
                        (int) Float.parseFloat(obj.get("id").toString()),

                        makeUser((Map<String, Object>) obj.get("user")),
                        (String) obj.get("nom"),
                        (String) obj.get("prenom"),
                        (String) obj.get("email"),
                        (String) obj.get("description"),
                        (String) obj.get("etat")

                );

                listReclamations.add(reclamation);
            }
        } catch (IOException e) {
            e.printStackTrace();
        }
        return listReclamations;
    }

    public User makeUser(Map<String, Object> obj) {
        if (obj == null) {
            return null;
        }
        User user = new User();
        user.setId((int) Float.parseFloat(obj.get("id").toString()));
        user.setEmail((String) obj.get("email"));
        return user;
    }

    public int add(Reclamation reclamation,int id) {

        cr = new ConnectionRequest();

        cr.setHttpMethod("POST");
        cr.setUrl(Statics.BASE_URL + "/reclamation/add/"+id);

       
        cr.addArgument("nom", reclamation.getNom());
        cr.addArgument("prenom", reclamation.getPrenom());
        cr.addArgument("email", reclamation.getEmail());
        cr.addArgument("description", reclamation.getDescription());
        cr.addArgument("etat", reclamation.getEtat());


        cr.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultCode = cr.getResponseCode();
                cr.removeResponseListener(this);
            }
        });
        try {
            cr.setDisposeOnCompletion(new InfiniteProgress().showInfiniteBlocking());
            NetworkManager.getInstance().addToQueueAndWait(cr);
        } catch (Exception ignored) {

        }
        return resultCode;
    }

    public int edit(Reclamation reclamation,int id) {

        cr = new ConnectionRequest();
        cr.setHttpMethod("POST");
        cr.setUrl(Statics.BASE_URL + "/reclamation/edit/"+id);
        cr.addArgument("id", String.valueOf(reclamation.getId()));

        
        cr.addArgument("nom", reclamation.getNom());
        cr.addArgument("prenom", reclamation.getPrenom());
        cr.addArgument("email", reclamation.getEmail());
        cr.addArgument("description", reclamation.getDescription());
        cr.addArgument("etat", reclamation.getEtat());


        cr.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultCode = cr.getResponseCode();
                cr.removeResponseListener(this);
            }
        });
        try {
            cr.setDisposeOnCompletion(new InfiniteProgress().showInfiniteBlocking());
            NetworkManager.getInstance().addToQueueAndWait(cr);
        } catch (Exception ignored) {

        }
        return resultCode;
    }

    public int delete(int reclamationId) {
        cr = new ConnectionRequest();
        cr.setUrl(Statics.BASE_URL + "/reclamation/delete");
        cr.setHttpMethod("POST");
        cr.addArgument("id", String.valueOf(reclamationId));

        cr.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                cr.removeResponseListener(this);
            }
        });

        try {
            cr.setDisposeOnCompletion(new InfiniteProgress().showInfiniteBlocking());
            NetworkManager.getInstance().addToQueueAndWait(cr);
        } catch (Exception e) {
            e.printStackTrace();
        }
        return cr.getResponseCode();
    }
}
