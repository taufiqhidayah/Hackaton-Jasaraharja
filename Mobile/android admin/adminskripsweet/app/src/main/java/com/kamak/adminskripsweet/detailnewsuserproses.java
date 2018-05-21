package com.kamak.adminskripsweet;

import android.app.AlertDialog;
import android.app.ProgressDialog;
import android.content.Intent;
import android.content.SharedPreferences;
import android.net.Uri;
import android.os.Bundle;
import android.support.v4.widget.SwipeRefreshLayout;
import android.support.v7.app.AppCompatActivity;
import android.text.Html;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import com.android.volley.Request;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.ImageLoader;
import com.android.volley.toolbox.NetworkImageView;
import com.android.volley.toolbox.StringRequest;
import com.kamak.adminskripsweet.app.AppController;

import org.json.JSONException;
import org.json.JSONObject;

import java.util.HashMap;
import java.util.Map;


public class detailnewsuserproses extends AppCompatActivity implements SwipeRefreshLayout.OnRefreshListener {

    NetworkImageView thumb_image;
    TextView nama, tgl, keterangan, alamat, status;
    ImageLoader imageLoader = AppController.getInstance().getImageLoader();
    SwipeRefreshLayout swipe;
    String id_news;
    Button navigasi,update;
    private static final String TAG = detailnewsuserproses.class.getSimpleName();
    String goolgeMap = "com.google.android.apps.maps";
    Uri gmmIntentUri;
    Intent mapIntent;
    public static final String TAG_ID = "id";
    public static final String TAG_IDuser = "iduser";
    public static final String TAG_NAMA = "nama";
    public static final String TAG_TGL = "tgl";
    public static final String TAG_KETERANGAN = "keterangan";
    public static final String TAG_GAMBAR = "gambar";
    public static final String TAG_ALAMAT = "alamat";
    public static final String TAG_STATUS = "status";
    public static final String TAG_KOMENTAR = "komentar";

    String iduser, username,lokasi;
    SharedPreferences sharedpreferences;
    EditText isikoment;
    View dialogView;

    AlertDialog.Builder dialog;
    LayoutInflater inflater;
    ProgressDialog pDialog;
    public static final String TAG_USERNAME = "username";
    String Nama;
    EditText komentar;
    public static final String TAG_long = "longitude";
    public static final String TAG_lat = "lattitude";
    public static final String TAG_IDnews = "id";
    private static final String url_detail =Server.URL+"detailnews.php";
    private static final String URL_KOMENT = "http://dinaspuprkabjbg.site/webservice/postkomen.php";
    String tag_json_obj = "json_obj_req";
    private static final String TAG_SUCCESS = "success";
    private static final String TAG_MESSAGE = "message";
    int success;
    String id_user,name,idusr;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_detailpostuser);
        getSupportActionBar().setDisplayHomeAsUpEnabled(true);
        setTitle("Detail");
        navigasi = (Button) findViewById(R.id.btnnavigasi);
        thumb_image = (NetworkImageView) findViewById(R.id.gambar_news);
        nama = (TextView) findViewById(R.id.judul_news);
        tgl = (TextView) findViewById(R.id.tgl_news);
        keterangan = (TextView) findViewById(R.id.isi_news);
        alamat = (TextView) findViewById(R.id.txtalamat);
        status = (TextView) findViewById(R.id.txtstatus);
        swipe = (SwipeRefreshLayout) findViewById(R.id.swipe_refresh_layout);



        iduser = getIntent().getStringExtra(TAG_IDuser);
        username = getIntent().getStringExtra(TAG_USERNAME);
        id_news = getIntent().getStringExtra(TAG_IDnews);
        update=(Button)findViewById(R.id.btnupdate);
        update.setOnClickListener(new  View.OnClickListener(){

            public void onClick(View view){
                Intent intent = new Intent(detailnewsuserproses.this, uploadselesai.class);

                intent.putExtra(TAG_IDnews, id_news);
                intent.putExtra(TAG_IDuser, idusr);
                intent.putExtra(TAG_USERNAME, Nama);

                finish();
                startActivity(intent);

            }


        });
        navigasi.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                gmmIntentUri = Uri.parse("google.navigation:q=" + lokasi);

                mapIntent = new Intent(Intent.ACTION_VIEW, gmmIntentUri);


                mapIntent.setPackage(goolgeMap);

                if (mapIntent.resolveActivity(getPackageManager()) != null) {
                    startActivity(mapIntent);
                } else {
                    Toast.makeText(detailnewsuserproses.this, "Google Maps Belum Terinstal. Install Terlebih dahulu.",
                            Toast.LENGTH_LONG).show();
                }
            }

        });
        swipe.setOnRefreshListener(this);

        swipe.post(new Runnable() {
                       @Override
                       public void run() {
                           if (!id_news.isEmpty()) {
                               callDetailNews(id_news);
                           }
                       }
                   }
        );

    }

    private void callDetailNews(final String id) {
        swipe.setRefreshing(true);

        StringRequest strReq = new StringRequest(Request.Method.POST, url_detail, new Response.Listener<String>() {

            @Override
            public void onResponse(String response) {
                Log.d(TAG, "Response " + response.toString());
                swipe.setRefreshing(false);

                try {
                    JSONObject obj = new JSONObject(response);

                   Nama = obj.getString(TAG_NAMA);
                    String Gambar = obj.getString(TAG_GAMBAR);
                    String Tgl = obj.getString(TAG_TGL);
                    String Keterangan = obj.getString(TAG_KETERANGAN);
                    String Alamat = obj.getString(TAG_ALAMAT);
                    String Status = obj.getString(TAG_STATUS);
                     idusr = obj.getString(TAG_IDuser);

                    lokasi = obj.getString(TAG_lat)+","+ obj.getString(TAG_long);

                    nama.setText("Post By " + Nama);
                    tgl.setText(Tgl);
                    alamat.setText("Alamat " + Alamat);
                    status.setText("Status " + Status);
                    keterangan.setText("Keterangan " + Html.fromHtml(Keterangan));

                    if (obj.getString(TAG_GAMBAR) != "") {
                        thumb_image.setImageUrl(Gambar, imageLoader);
                    }

                } catch (JSONException e) {
                    e.printStackTrace();
                }

            }
        }, new Response.ErrorListener() {

            @Override
            public void onErrorResponse(VolleyError error) {
                Log.e(TAG, "Detail News Error: " + error.getMessage());
                Toast.makeText(detailnewsuserproses.this,
                        error.getMessage(), Toast.LENGTH_LONG).show();
                swipe.setRefreshing(false);
            }
        }) {

            @Override
            protected Map<String, String> getParams() {
                // Posting parameters to post url
                Map<String, String> params = new HashMap<String, String>();
                params.put("id", id);

                return params;
            }

        };

        // Adding request to request queue
        AppController.getInstance().addToRequestQueue(strReq, tag_json_obj);
    }

    @Override
    public void onBackPressed() {
        finish();
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        switch (item.getItemId()) {
            case android.R.id.home:
                this.finish();
                return true;
            default:
                return super.onOptionsItemSelected(item);
        }
    }

    @Override
    public void onRefresh() {
        callDetailNews(id_news);
    }




}



