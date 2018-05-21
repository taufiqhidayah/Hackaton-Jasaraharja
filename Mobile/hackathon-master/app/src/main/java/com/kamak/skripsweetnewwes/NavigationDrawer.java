package com.kamak.skripsweetnewwes;

import android.app.Activity;
import android.app.AlertDialog;
import android.content.Context;
import android.content.DialogInterface;
import android.content.Intent;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.os.Handler;
import android.support.annotation.NonNull;
import android.support.design.widget.BottomNavigationView;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.Snackbar;
import android.support.v4.widget.SwipeRefreshLayout;
import android.util.Log;
import android.view.View;
import android.support.design.widget.NavigationView;
import android.support.v4.view.GravityCompat;
import android.support.v4.widget.DrawerLayout;
import android.support.v7.app.ActionBarDrawerToggle;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.Menu;
import android.view.MenuItem;
import android.widget.*;
import android.widget.ListView;

import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.VolleyLog;
import com.android.volley.toolbox.JsonArrayRequest;
import com.kamak.skripsweetnewwes.adapter.NewsAdapter;
import com.kamak.skripsweetnewwes.app.AppController;
import com.kamak.skripsweetnewwes.data.NewsData;
import com.kamak.skripsweetnewwes.navmenu.ActivitySms;
import com.kamak.skripsweetnewwes.navmenu.PanduanActivity;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;
import java.util.List;

import static com.kamak.skripsweetnewwes.MenuActivity.TAG_pswd;

public class NavigationDrawer extends AppCompatActivity
        implements NavigationView.OnNavigationItemSelectedListener, SwipeRefreshLayout.OnRefreshListener {

    ListView list;
    SwipeRefreshLayout swipe;
    List<NewsData> newsList = new ArrayList<>();

    private static final String TAG = MainActivity.class.getSimpleName();

    private static String url_list = Server.URL + "berita.php?offset=";

    private int offSet = 0;

    int no;

    NewsAdapter adapter;

    public final static String TAG_pswd = "pswd";

    public static final String TAG_NO = "no";
    public static final String TAG_IDnews = "id";
    public static final String TAG_ALAMAT = "alamat";
    public static final String TAG_TGL = "tgl";
    public static final String TAG_ISI = "isi";
    public static final String TAG_GAMBAR = "gambar";
    public static final String TAG_NAMA = "nama";
    public static final String TAG_STATUS = "status";


    SharedPreferences sharedpreferences;
    Boolean session = false;
    String pswd, tgldaftarr;
    public static final String my_shared_preferences = "my_shared_preferences";
    public static final String session_status = "session_status";
    public static final String TAG_ID = "iduser";
    public static final String TAG_USERNAME = "username";
    TextView txt;
    Handler handler;
    Runnable runnable;
    String id, iduser, username, alamat, nohp, idnews;

    public final static String TAG_alamat = "alamat";
    public final static String TAG_NOHP = "nohp";

    private TextView mTextMessage;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_navigation_drawer);
        Toolbar toolbar = (Toolbar) findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);


        id = getIntent().getStringExtra(TAG_ID);
        username = getIntent().getStringExtra(TAG_USERNAME);
        alamat = getIntent().getStringExtra(TAG_ALAMAT);
        nohp = getIntent().getStringExtra(TAG_NOHP);
        pswd = getIntent().getStringExtra(TAG_pswd);

        FloatingActionButton fab = (FloatingActionButton) findViewById(R.id.fab);
        fab.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

                final CharSequence[] items = {"Post Kejadian", "Post Berita", "Batal"};

                AlertDialog.Builder builder = new AlertDialog.Builder(NavigationDrawer.this);
                builder.setTitle("Pilihan");
                builder.setIcon(R.drawable.kamera);
                builder.setItems(items, new DialogInterface.OnClickListener() {
                    @Override
                    public void onClick(DialogInterface dialog, int item) {
                        if (items[item].equals("Post Kejadian")) {
                            Intent intent = new Intent(NavigationDrawer.this, foto.class);

                            intent.putExtra(TAG_ID, id);
                            intent.putExtra(TAG_USERNAME, username);
                            finish();
                            startActivity(intent);

                        } else if (items[item].equals("Batal")) {
                            dialog.dismiss();
                        } else if (items[item].equals("Post Berita")) {
                            Intent intent = new Intent(NavigationDrawer.this, post_review.class);

                            intent.putExtra(TAG_ID, id);
                            intent.putExtra(TAG_USERNAME, username);
                            finish();
                            startActivity(intent);

                        }
//                        else if (items[item].equals("Simpan Sebagai Draft")) {
//                            Intent intent = new Intent(NavigationDrawer.this, draft.class);
//
//
//                            intent.putExtra(TAG_ID, id);
//                            intent.putExtra(TAG_USERNAME, username);
//                            finish();
//                            startActivity(intent);
//
//                        }

                    }
                });
                builder.show();
            }
        });

        DrawerLayout drawer = (DrawerLayout) findViewById(R.id.drawer_layout);
        ActionBarDrawerToggle toggle = new ActionBarDrawerToggle(
                this, drawer, toolbar, R.string.navigation_drawer_open, R.string.navigation_drawer_close);
        drawer.addDrawerListener(toggle);
        toggle.syncState();

        NavigationView navigationView = (NavigationView) findViewById(R.id.nav_view);
        navigationView.setNavigationItemSelectedListener(this);

        alamat = getIntent().getStringExtra(TAG_ALAMAT);
        nohp = getIntent().getStringExtra(TAG_NOHP);
        iduser = getIntent().getStringExtra(TAG_ID);
        idnews = getIntent().getStringExtra(TAG_IDnews);
        username = getIntent().getStringExtra(TAG_USERNAME);

        BottomNavigationView navigation = (BottomNavigationView) findViewById(R.id.navigation);
        navigation.setOnNavigationItemSelectedListener(mOnNavigationItemSelectedListener);
        swipe = (SwipeRefreshLayout) findViewById(R.id.swipe_refresh_layout);
        list = (ListView) findViewById(R.id.list_news);
        newsList.clear();
        sharedpreferences = getSharedPreferences(MainActivity.my_shared_preferences, Context.MODE_PRIVATE);

        list.setOnItemClickListener(new AdapterView.OnItemClickListener() {

            @Override
            public void onItemClick(AdapterView<?> parent, View view,
                                    int position, long id) {
                // TODO Auto-generated method stub

                Intent intent = new Intent(NavigationDrawer.this, DetailNews.class);
                intent.putExtra(TAG_ID, iduser);
                intent.putExtra(TAG_USERNAME, username);
                intent.putExtra(TAG_IDnews, newsList.get(position).getId());

                startActivity(intent);
            }
        });

        adapter = new NewsAdapter(NavigationDrawer.this, newsList);
        list.setAdapter(adapter);

        swipe.setOnRefreshListener(this);

        swipe.post(new Runnable() {
                       @Override
                       public void run() {
                           swipe.setRefreshing(true);
                           newsList.clear();
                           adapter.notifyDataSetChanged();
                           callNews(0);
                       }
                   }
        );

        list.setOnScrollListener(new AbsListView.OnScrollListener() {

            private int currentVisibleItemCount;
            private int currentScrollState;
            private int currentFirstVisibleItem;
            private int totalItem;

            @Override
            public void onScrollStateChanged(AbsListView view, int scrollState) {
                this.currentScrollState = scrollState;
                this.isScrollCompleted();
            }

            @Override
            public void onScroll(AbsListView view, int firstVisibleItem, int visibleItemCount, int totalItemCount) {
                this.currentFirstVisibleItem = firstVisibleItem;
                this.currentVisibleItemCount = visibleItemCount;
                this.totalItem = totalItemCount;
            }

            private void isScrollCompleted() {
                if (totalItem - currentFirstVisibleItem == currentVisibleItemCount
                        && this.currentScrollState == SCROLL_STATE_IDLE) {

                    swipe.setRefreshing(true);
                    handler = new Handler();

                    runnable = new Runnable() {
                        public void run() {
                            callNews(offSet);
                        }
                    };

                    handler.postDelayed(runnable, 3000);
                }
            }

        });

    }

    @Override
    public void onRefresh() {
        newsList.clear();
        adapter.notifyDataSetChanged();
        callNews(0);
    }
    private BottomNavigationView.OnNavigationItemSelectedListener mOnNavigationItemSelectedListener

            = new BottomNavigationView.OnNavigationItemSelectedListener() {

        @Override
        public boolean onNavigationItemSelected(@NonNull MenuItem item) {
            alamat = getIntent().getStringExtra(TAG_ALAMAT);
            nohp = getIntent().getStringExtra(TAG_NOHP);
            iduser = getIntent().getStringExtra(TAG_ID);
            idnews = getIntent().getStringExtra(TAG_IDnews);
            username = getIntent().getStringExtra(TAG_USERNAME);
            Intent intent = new Intent(NavigationDrawer.this, home.class);
            switch (item.getItemId()) {
                case R.id.home:
                    intent = new Intent(NavigationDrawer.this, NavigationDrawer.class);
                    intent.putExtra(TAG_ID, iduser);
                    intent.putExtra(TAG_USERNAME, username);
                    intent.putExtra(TAG_ALAMAT, alamat);
                    intent.putExtra(TAG_NOHP, nohp);
                    finish();
                    startActivity(intent);
                    break;
                case R.id.post:
                    intent = new Intent(NavigationDrawer.this, profil.class);
                    intent.putExtra(TAG_ID, iduser);
                    intent.putExtra(TAG_USERNAME, username);
                    intent.putExtra(TAG_ALAMAT, alamat);
                    intent.putExtra(TAG_NOHP, nohp);
                    finish();
                    startActivity(intent);
                    break;
            }
            return false;
        }

    };
    private void callNews(int page) {

        swipe.setRefreshing(true);

        // Creating volley request obj
        JsonArrayRequest arrReq = new JsonArrayRequest(url_list + page,
                new Response.Listener<JSONArray>() {
                    @Override
                    public void onResponse(JSONArray response) {
                        Log.e(TAG, response.toString());

                        if (response.length() > 0) {
                            // Parsing json
                            for (int i = 0; i < response.length(); i++) {
                                try {

                                    JSONObject obj = response.getJSONObject(i);
                                    NewsData news = new NewsData();
                                    no = obj.getInt(TAG_NO);

                                    news.setId(obj.getString(TAG_IDnews));
                                    news.setAlamat(obj.getString(TAG_ALAMAT));
                                    news.setNama(obj.getString(TAG_NAMA));
                                    news.setStatus(obj.getString(TAG_STATUS));

                                    if (obj.getString(TAG_GAMBAR) != "") {
                                        news.setGambar(obj.getString(TAG_GAMBAR));
                                    }

                                    news.setDatetime(obj.getString(TAG_TGL));
                                    news.setketerangan(obj.getString(TAG_ISI));

                                    // adding news to news array
                                    newsList.add(news);

                                    if (no > offSet)
                                        offSet = no;

                                    Log.e(TAG, "offSet " + offSet);

                                } catch (JSONException e) {
                                    Log.e(TAG, "JSON Parsing error: " + e.getMessage());
                                }

                                // notifying list Adapter about data changes
                                // so that it renders the list view with updated data
                                adapter.notifyDataSetChanged();
                            }
                        }
                        swipe.setRefreshing(false);
                    }

                }, new Response.ErrorListener() {

            @Override
            public void onErrorResponse(VolleyError error) {
                VolleyLog.e(TAG, "Error: " + error.getMessage());
                swipe.setRefreshing(false);
            }
        });

        // Adding request to request queue
        AppController.getInstance().addToRequestQueue(arrReq);
    }


    @Override
    public void onBackPressed() {
        DrawerLayout drawer = (DrawerLayout) findViewById(R.id.drawer_layout);
        if (drawer.isDrawerOpen(GravityCompat.START)) {
            drawer.closeDrawer(GravityCompat.START);
        } else {
            super.onBackPressed();
        }
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.navigation_drawer, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.
        int id = item.getItemId();

        //noinspection SimplifiableIfStatement
        if (id == R.id.action_settings) {
            return true;
        }

        return super.onOptionsItemSelected(item);
    }

    @SuppressWarnings("StatementWithEmptyBody")
    @Override
    public boolean onNavigationItemSelected(MenuItem item) {
        // Handle navigation view item clicks here.
        int id = item.getItemId();

        if (id == R.id.nav_camera) {
            Intent i = new Intent(getApplication(), NavigationDrawer.class);
            startActivity(i);
        } else if (id == R.id.nav_gallery) {
            Intent i = new Intent(getApplication(), ActivitySms.class);
            startActivity(i);
        } else if (id == R.id.nav_slideshow) {
            Intent i = new Intent(getApplicationContext(), PanduanActivity.class);
            startActivity(i);

        } else if (id == R.id.nav_send) {

            android.support.v7.app.AlertDialog.Builder builder = new android.support.v7.app.AlertDialog.Builder(this);
            builder.setMessage("Apakah anda yakin ?")
                    .setCancelable(false)//tidak bisa tekan tombol back
                    //jika pilih1 yess
                    .setPositiveButton("Ya", new DialogInterface.OnClickListener() {
                        public void onClick(DialogInterface dialog, int id) {
                            SharedPreferences.Editor editor = sharedpreferences.edit();
                            editor.putBoolean(login.session_status, false);
                            editor.putString(TAG_ID, null);
                            editor.putString(TAG_USERNAME, null);
                            editor.commit();

                            Intent intent = new Intent(NavigationDrawer.this, login.class);
                            finish();
                            startActivity(intent);
                        }
                    })
                    //jika pilih no
                    .setNegativeButton("Tidak", new DialogInterface.OnClickListener() {
                        public void onClick(DialogInterface dialog, int id) {
                            dialog.cancel();
                        }
                    }).show();
        }

        DrawerLayout drawer = (DrawerLayout) findViewById(R.id.drawer_layout);
        drawer.closeDrawer(GravityCompat.START);
        return true;
    }
}
