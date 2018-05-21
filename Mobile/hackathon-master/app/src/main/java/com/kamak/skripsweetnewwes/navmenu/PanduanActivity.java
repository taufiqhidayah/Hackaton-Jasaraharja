package com.kamak.skripsweetnewwes.navmenu;

import android.os.Bundle;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.Snackbar;
import android.support.v4.view.ViewPager;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.View;

import com.kamak.skripsweetnewwes.R;

import java.util.Timer;
import java.util.TimerTask;

public class PanduanActivity extends AppCompatActivity {

    ViewPager viewPager;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_panduan);
        Toolbar toolbar = (Toolbar) findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);
        getSupportActionBar().setDisplayHomeAsUpEnabled(true);
//        viewPager = (ViewPager) findViewById(R.id.viewPager);
//        Pager viewPagerAdapter = new Pager(this);
//        viewPager.setAdapter(viewPagerAdapter);
//        Timer timer = new Timer();

//        timer.scheduleAtFixedRate(new

//                MyTimerTask(), 2000, 4000);

    }


    public class MyTimerTask extends TimerTask {

        @Override

        public void run() {

            PanduanActivity.this.runOnUiThread(new Runnable() {

                @Override

                public void run() {

                    if (viewPager.getCurrentItem() == 0) {

                        viewPager.setCurrentItem(1);

                    } else if (viewPager.getCurrentItem() == 1) {

                        viewPager.setCurrentItem(2);

                    } else {

                        viewPager.setCurrentItem(0);

                    }

                }

            });

        }
    }
}

