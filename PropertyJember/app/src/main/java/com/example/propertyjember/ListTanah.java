package com.example.propertyjember;

import android.os.Bundle;

import androidx.appcompat.app.AppCompatActivity;

import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;
import com.example.propertyjember.Model.Ruko;

import org.json.JSONArray;
import org.json.JSONObject;

import java.util.ArrayList;

public class ListTanah extends AppCompatActivity {
    RequestQueue requestQueue;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);

    }

    private void loadCart()
    {
        StringRequest senddata = new StringRequest(Request.Method.GET, ServerApi.URL_DATA, new Response.Listener<String>() {
            @Override
            public void onResponse(String response) {
                try{
                    JSONObject objectLuar = new JSONObject(response);
                    JSONArray data = objectLuar.getJSONArray("data");

                    //item = new ArrayList<>();
                    for (int i = 0; i < data.length(); i++)
                    {
                        Ruko playerModel = new Ruko();
                        JSONObject datae = data.getJSONObject(i);

                        //item.add(playerModel);


                    }
                    setupListView();
                } catch (Exception e) {

                }
            }
        }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {

            }
        });
        requestQueue = Volley.newRequestQueue(ListTanah.this);
        requestQueue.add(senddata);
    }

    private void setupListView() {

    }

}
