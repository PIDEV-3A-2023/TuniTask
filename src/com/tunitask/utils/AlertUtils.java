package com.tunitask.utils;

import com.codename1.components.ToastBar;
import com.codename1.ui.Component;

public class AlertUtils {

    public static void makeNotification(String message) {
        new java.util.Timer().schedule(
                new java.util.TimerTask() {
                    @Override
                    public void run() {
                        ToastBar.getInstance().setPosition(Component.TOP);
                        ToastBar.Status status = ToastBar.getInstance().createStatus();
                        status.setShowProgressIndicator(false);
                        status.setMessage(message);
                        status.setExpires(3000);
                        status.show();
                    }
                },
                2000
        );
    }
}
