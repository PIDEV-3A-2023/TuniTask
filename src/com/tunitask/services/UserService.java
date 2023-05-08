package com.tunitask.services;

import com.codename1.components.InfiniteProgress;
import com.codename1.io.*;
import com.codename1.ui.events.ActionListener;
import com.tunitask.entities.User;
import com.tunitask.utils.Statics;

import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

public class UserService {

    public static UserService instance = null;
    private ConnectionRequest cr;
    private ArrayList<User> listUsers;


    private UserService() {
        cr = new ConnectionRequest();
    }

    public static UserService getInstance() {
        if (instance == null) {
            instance = new UserService();
        }
        return instance;
    }

    public ArrayList<User> getAll() {
        listUsers = new ArrayList<>();

        cr = new ConnectionRequest();
        cr.setUrl(Statics.BASE_URL + "/user");
        cr.setHttpMethod("GET");

        cr.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {

                if (cr.getResponseCode() == 200) {
                    listUsers = getList();
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

        return listUsers;
    }

    private ArrayList<User> getList() {
        try {
            Map<String, Object> parsedJson = new JSONParser().parseJSON(new CharArrayReader(
                    new String(cr.getResponseData()).toCharArray()
            ));
            List<Map<String, Object>> list = (List<Map<String, Object>>) parsedJson.get("root");

            for (Map<String, Object> obj : list) {
                User user = new User(
                        (int) Float.parseFloat(obj.get("id").toString()),

                        (String) obj.get("email")

                );

                listUsers.add(user);
            }
        } catch (IOException e) {
            e.printStackTrace();
        }
        return listUsers;
    }

}
