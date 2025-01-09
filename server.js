
const express=require("express");
const mongoose=require("mongoose");
const app=express();

const uri="mongodb+srv://Roshan:znmdrs#234@cluster0.4wpbdqc.mongodb.net/?retryWrites=true&w=majority&appName=Cluster"
async function connect(){

     try {

          await mongoose.connect(uri);
          console.log("connected to mongoDB");
     }catch(error){
          console.error(error);
}}

connect();

app.listen(5500, ()=> {


     console.log("server started on port 5500");
cl
});