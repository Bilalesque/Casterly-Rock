package com.example.bilalsalman.hogwartsexpress;

import android.content.Intent;
import android.net.Uri;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;

import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;

public class addtrainactivity extends AppCompatActivity  implements View.OnClickListener{

    EditText manuName,OpName,NumCar,routeid,BusCap,EcoCsp;
    String MN,ON,NC,RI,BC,EC;


    DatabaseReference traindata;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_addtrainactivity);
        traindata = FirebaseDatabase.getInstance().getReference("Train");
        findViewById(R.id.OkbuttonID).setOnClickListener(this);
    }

    @Override
    public void onClick(View v) {

        switch (v.getId()) {
            case R.id.OkbuttonID:
                if(checkvariables())
                    addTRAINtofirebase();
                break;
        }
    }

    private boolean checkvariables() {

        manuName=(EditText)findViewById(R.id.ManufacturerID);
        OpName=(EditText)findViewById(R.id.OperatorID);
        NumCar=(EditText)findViewById(R.id.NumberOfCarriagesID);
        routeid=(EditText)findViewById(R.id.RuutID);
        BusCap=(EditText)findViewById(R.id.businessCapID);
        EcoCsp=(EditText)findViewById(R.id.EcoCapID);

        MN= manuName.getText().toString().trim();
        ON= OpName.getText().toString().trim();
        NC= NumCar.getText().toString().trim();
        RI= routeid.getText().toString().trim();
        BC= BusCap.getText().toString().trim();
        EC= EcoCsp.getText().toString().trim();
        if (MN.isEmpty()) {
            manuName.setError("Manufacturer's Name is required");
            manuName.requestFocus();
            return false;
        }

        if (RI.isEmpty()) {
            routeid.setError("Route ID is required");
            routeid.requestFocus();
            return false;
        }

        if (ON.isEmpty()) {
            OpName.setError("Operator's Name is required");
            OpName.requestFocus();
            return false;
        }

        return true;

    }

    private void addTRAINtofirebase() {

        String id = traindata.push().getKey();
        AddTrain obj = new AddTrain(id,MN,ON,RI,BC,EC,NC);
        traindata.child(id).setValue(obj);
        Toast.makeText(addtrainactivity.this, "Train Added", Toast.LENGTH_SHORT).show();
        startActivity(new Intent(this, addtrainactivity.class));

    }
}
