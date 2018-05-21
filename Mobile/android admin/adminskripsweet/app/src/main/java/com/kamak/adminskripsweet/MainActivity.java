package com.kamak.adminskripsweet;


import android.content.DialogInterface;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.app.TabActivity;
import android.content.Intent;
import android.support.v7.app.AlertDialog;
import android.widget.TabHost;
import android.widget.Toast;

public class MainActivity extends TabActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        TabHost tabHost = (TabHost) findViewById(android.R.id.tabhost);
        TabHost.TabSpec spec;
        Intent intent;

        spec = tabHost.newTabSpec("Perlu Penanganan");
        spec.setIndicator("Pesan Baru");
        intent = new Intent(this, pesanbaru.class);

        spec.setContent(intent);
        tabHost.addTab(spec);



        spec = tabHost.newTabSpec("Proses");
        spec.setIndicator("Proses");
        intent = new Intent(this, proses.class);
        spec.setContent(intent);
        tabHost.addTab(spec);

        spec = tabHost.newTabSpec("Selesai"); // Create a new TabSpec using tab host
        spec.setIndicator("Selesai"); // set the “CONTACT” as an indicator
        // Create an Intent to launch an Activity for the tab (to be reused)
        intent = new Intent(this, selesai.class);
        spec.setContent(intent);
        tabHost.addTab(spec);


        tabHost.setCurrentTab(0);
        tabHost.setOnTabChangedListener(new TabHost.OnTabChangeListener() {
            @Override
            public void onTabChanged(String tabId) {
                // display the name of the tab whenever a tab is changed
                Toast.makeText(getApplicationContext(), tabId, Toast.LENGTH_SHORT).show();
            }
        });


    }

    public void onBackPressed() {
        AlertDialog.Builder builder = new AlertDialog.Builder(this);
        builder.setCancelable(false);
        builder.setMessage("Do you want to Exit?");
        builder.setPositiveButton("Yes", new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialog, int which) {
                //if user pressed "yes", then he is allowed to exit from application
                finish();
            }
        });
        builder.setNegativeButton("No", new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialog, int which) {
                //if user select "No", just cancel this dialog and continue with app
                dialog.cancel();
            }
        });
        AlertDialog alert = builder.create();
        alert.show();
    }
}