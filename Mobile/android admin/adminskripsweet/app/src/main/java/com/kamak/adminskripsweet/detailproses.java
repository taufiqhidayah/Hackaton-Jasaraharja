package com.kamak.adminskripsweet;

import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.support.v4.widget.SwipeRefreshLayout;
import android.support.v7.app.AppCompatActivity;
import android.text.Html;
import android.util.Log;
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

/**
 * Created by chukamak on 27/11/2017.
 */
public class detailproses extends AppCompatActivity implements SwipeRefreshLayout.OnRefreshListener {

    NetworkImageView thumb_image;
    TextView nama, tgl, keterangan,alamat,status;
    ImageLoader imageLoader = AppController.getInstance().getImageLoader();
    SwipeRefreshLayout swipe;
    String id_news,lokasi,name,iduser,alamatt,keterangann;
    private static final String TAG = detailproses.class.getSimpleName();

    public static final String TAG_ID       = "id";
    public static final String TAG_IDuser       = "iduser";
    public static final String TAG_username       = "username";
    public static final String TAG_NAMA    = "nama";
    public static final String TAG_TGL      = "tgl";
    public static final String TAG_KETERANGAN      = "keterangan";
    public static final String TAG_GAMBAR   = "gambar";
    public static final String TAG_ALAMAT   = "alamat";
    public static final String TAG_STATUS   = "status";

    private static final String url_detail  = Server.URL + "detailnews.php";
    String tag_json_obj = "json_obj_req";
    EditText txtkomen;
    Button btnkirim;
    Button btnlihat;
    String goolgeMap = "com.google.android.apps.maps";
    Uri gmmIntentUri;
    Intent mapIntent;
    public static final String TAG_longi   = "longitude";
    public static final String TAG_lat   = "lattitude";
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.detail_news);
        getSupportActionBar().setDisplayHomeAsUpEnabled(true);
        setTitle("Detail");
        id_news = getIntent().getStringExtra(TAG_ID);
        iduser = getIntent().getStringExtra(TAG_IDuser);


        btnkirim=(Button)findViewById(R.id.btnsend);
        btnkirim.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                gmmIntentUri = Uri.parse("google.navigation:q=" + lokasi);

                mapIntent = new Intent(Intent.ACTION_VIEW, gmmIntentUri);


                mapIntent.setPackage(goolgeMap);

                if (mapIntent.resolveActivity(getPackageManager()) != null) {
                    startActivity(mapIntent);
                } else {
                    Toast.makeText(detailproses.this, "Google Maps Belum Terinstal. Install Terlebih dahulu.",
                            Toast.LENGTH_LONG).show();
                }
            }

        });
        btnlihat=(Button)findViewById(R.id.btnsee);
        btnlihat.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(detailproses.this, uploadselesai.class);

                intent.putExtra(TAG_ID, id_news);
                intent.putExtra(TAG_NAMA, name);
                intent.putExtra(TAG_IDuser, iduser);
                intent.putExtra(TAG_ALAMAT, alamatt);
                intent.putExtra(TAG_KETERANGAN, keterangann);


                finish();
                startActivity(intent);           }
        });
        thumb_image = (NetworkImageView) findViewById(R.id.gambar_news);
        nama       = (TextView) findViewById(R.id.judul_news);
        tgl         = (TextView) findViewById(R.id.tgl_news);
        keterangan         = (TextView) findViewById(R.id.isi_news);
        alamat         = (TextView) findViewById(R.id.txt_alamat);
        status         = (TextView) findViewById(R.id.txtstatus);
        swipe       = (SwipeRefreshLayout) findViewById(R.id.swipe_refresh_layout);

        id_news = getIntent().getStringExtra(TAG_ID);

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

    private void callDetailNews(final String id){
        swipe.setRefreshing(true);

        StringRequest strReq = new StringRequest(Request.Method.POST, url_detail, new Response.Listener<String>() {

            @Override
            public void onResponse(String response) {
                Log.d(TAG, "Response " + response.toString());
                swipe.setRefreshing(false);

                try {
                    JSONObject obj = new JSONObject(response);
                    lokasi = obj.getString(TAG_lat)+","+ obj.getString(TAG_longi);
                   name   = obj.getString(TAG_NAMA);
                    String Gambar   = obj.getString(TAG_GAMBAR);
                    String Tgl      = obj.getString(TAG_TGL);
                     keterangann      = obj.getString(TAG_KETERANGAN);
                    alamatt      = obj.getString(TAG_ALAMAT);
                    String Status      = obj.getString(TAG_STATUS);
                    iduser = obj.getString(TAG_IDuser);

                    nama.setText("Post By "+name);
                    tgl.setText(Tgl);
                    alamat.setText("Alamat "+alamatt);
                    status.setText("Status "+Status);
                    keterangan.setText("Keterangan "+Html.fromHtml(keterangann));

                    if (obj.getString(TAG_GAMBAR)!=""){
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
                Toast.makeText(detailproses.this,
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

        Intent intent = new Intent(detailproses.this, pesanbaru.class);

        intent.putExtra(TAG_ID, iduser);

        finish();
        startActivity(intent);

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