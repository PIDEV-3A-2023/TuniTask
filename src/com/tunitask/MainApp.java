package com.tunitask;

import com.codename1.ui.Dialog;
import com.codename1.ui.Form;
import com.codename1.ui.Toolbar;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
import com.tunitask.gui.front.reclamation.AfficherToutReclamation;

import static com.codename1.ui.CN.getCurrentForm;
import static com.codename1.ui.CN.updateNetworkThreadCount;

/**
 * This file was generated by <a href="https://www.codenameone.com/">Codename
 * One</a> for the purpose of building native mobile applications using Java.
 */
public class MainApp {

    private Form current;

    public static Resources res;

    public void init(Object context) {
        res = UIManager.initFirstTheme("/theme");
        updateNetworkThreadCount(3);
        Toolbar.setGlobalToolbar(true);
    }

    public void start() {
        if (current != null) {
            current.show();
            return;
        }
        new AfficherToutReclamation().show();
    }

    public void stop() {
        current = getCurrentForm();
        if (current instanceof Dialog) {
            ((Dialog) current).dispose();
            current = getCurrentForm();
        }
    }

    public void destroy() {
    }

}