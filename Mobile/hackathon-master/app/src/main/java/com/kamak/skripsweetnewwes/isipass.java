package com.kamak.skripsweetnewwes;

import android.app.ProgressDialog;
import android.content.Intent;
import android.os.AsyncTask;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.*;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.kamak.skripsweetnewwes.R;

import java.util.HashMap;

public class isipass extends AppCompatActivity {
    private String nik;
    EditText txtpswd;
    EditText txtpswd2;
    Button btnsave;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_isipass);
        final Intent intent = getIntent();
        nik=intent.getStringExtra("iduser");
        txtpswd=(EditText)findViewById(R.id.txtpswd);
        txtpswd2=(EditText)findViewById(R.id.txtpswd2);
        btnsave=(Button)findViewById(R.id.btnsave);
        btnsave.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                simpan();
                Intent intent = new Intent(isipass.this, login.class);
                finish();
                startActivity(intent);

            }
        });



    }
    private void simpan(){
        final String pswd=txtpswd.getText().toString().trim();

        class simpan extends AsyncTask<Void,Void,String>{

            ProgressDialog loading;
            protected void onPreExecute(){
                super.onPreExecute();
                loading=ProgressDialog.show(isipass.this ,"Menyipman","Tunggu Sebentar",false,false);

            }
            protected void onPostExecute(String s){
                super.onPostExecute(s);
                loading.dismiss();
                Toast.makeText(isipass.this,s,Toast.LENGTH_LONG).show();
            }

            @Override
            protected String doInBackground(Void... params)
            {
                HashMap<String,String>hashMap=new HashMap<>();
                hashMap.put("iduser",nik);
                hashMap.put(konfigurasi.TAG_pswd,pswd);

                RequestHandler rh=new RequestHandler();
                String s=rh.sendPostRequest(konfigurasi.URL_pswd,hashMap);
                return s;
            }
        }
        simpan ue = new simpan();
        ue.execute();
    }

}
