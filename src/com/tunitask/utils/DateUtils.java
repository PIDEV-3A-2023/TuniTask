package com.tunitask.utils;

import java.text.SimpleDateFormat;
import java.util.Date;

public class DateUtils {

    public static boolean dateIsAfter(Date d1, Date d2) {

        int day1 = (int) Float.parseFloat(new SimpleDateFormat("dd").format(d1));
        int month1 = (int) Float.parseFloat(new SimpleDateFormat("MM").format(d1));
        int year1 = (int) Float.parseFloat(new SimpleDateFormat("yyyy").format(d1));

        int day2 = (int) Float.parseFloat(new SimpleDateFormat("dd").format(d2));
        int month2 = (int) Float.parseFloat(new SimpleDateFormat("MM").format(d2));
        int year2 = (int) Float.parseFloat(new SimpleDateFormat("yyyy").format(d2));

        if (year1 <= year2) {
            if (month1 <= month2) {
                if (day1 <= day2) {
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }

        return true;
    }

    public static int compareDates(Date d1, Date d2) {

        int day1 = (int) Float.parseFloat(new SimpleDateFormat("dd").format(d1));
        int month1 = (int) Float.parseFloat(new SimpleDateFormat("MM").format(d1));
        int year1 = (int) Float.parseFloat(new SimpleDateFormat("yyyy").format(d1));

        int day2 = (int) Float.parseFloat(new SimpleDateFormat("dd").format(d2));
        int month2 = (int) Float.parseFloat(new SimpleDateFormat("MM").format(d2));
        int year2 = (int) Float.parseFloat(new SimpleDateFormat("yyyy").format(d2));

        if (year1 < year2) {
            return -1;
        } else if (year1 > year2) {
            return 1;
        } else {
            if (month1 < month2) {
                return -1;
            } else if (month1 > month2) {
                return 1;
            } else {
                return Integer.compare(day1, day2);
            }
        }
    }

}